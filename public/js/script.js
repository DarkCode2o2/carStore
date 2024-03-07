function readLogo(input) {
  if (input.files && input.files[0]) {
    
    let carLogo = document.getElementById('car_logo')
    
      var reader = new FileReader();
      
      reader.onload = function(e) {
        carLogo.setAttribute("src",e.target.result);
        carLogo.classList.add('h-full')
        carLogo.classList.add('w-full')
        document.getElementById('displayMain').style.display = "none";
      };

      reader.readAsDataURL(input.files[0])
  }
}




let filesArray = [];

function displayImages(images) {
  
    if(images.files) {
        for(let i = 0; i < images.files.length; i++) {

          let preview = document.querySelector('.preview-images');
          let image = document.createElement('img');
          image.className = 'rounded max-w-100 shadow car-images h-[300px] w-[400px]'
          image.setAttribute('name', 'images');

          let reader = new FileReader()

          reader.onload = function(e) {

            if(document.querySelector('.preview-images h1')) {

              document.querySelector('.preview-images h1').style.display = 'none';
            }

            let carImages = document.querySelectorAll('.preview-images .car-images');

            image.src = e.target.result;


            if(carImages.length > 0) {

              let arrValue = [];

              for(let i = 0; i < carImages.length; i++) {
                arrValue.push(carImages[i].src)
              }

              if(!arrValue.includes(image.src)) {
                preview.append(image);
              }

            }else {
              preview.append(image);
            }

            
          }
          reader.readAsDataURL(images.files[i]);
        }
      
        document.querySelector('.myForm').addEventListener('submit', (e) => {
            var formData = new FormData();

            for (var i = 0; i < images.files.length; i++) {
                var file = images.files[i];
                formData.append('images[]', file);
            }

            let carid = document.querySelector('.car-id');

            if(carid) {
               id = carid.value != null ? carid.value : '';
            }


            fetch(`/customCar/${id}`, {
              method: 'POST',
              body: formData
            })
            .then(response => response.json())
            .then(responseData => {
                // Handle the response from the backend
                console.log(responseData);
            })
            .catch(error => {
                // Handle any errors that occurred during the request
                console.error(error);
            });
        })
        
    }
}



let alertCloser = document.querySelector('.xmark');
let alertMsg = document.querySelectorAll('.alert-msg');
let errorMsg = document.querySelectorAll('input ~ span, textarea ~ span');

if(errorMsg) {
  errorMsg.forEach((msg) => {
    setTimeout(() => {
      msg.style.display = 'none';
    },5000)
  })

}


if(alertCloser) {
  alertCloser.addEventListener('click', () => {

    alertCloser.closest('.alert-msg').style.display = 'none'
  })

  alertMsg.forEach((msg) => {
    setTimeout(() => {
      msg.style.display = 'none';
    },5000)
  })

}

let tableDescriptions = document.querySelectorAll('.table-desc')

tableDescriptions.forEach(desc => {
  let contentArray = desc.dataset.content.split(' ');

  if(contentArray.length > 10) {
    desc.className = 'cursor-pointer hide'

    for(let i = 0; i < 10; i++) {
      desc.innerHTML += desc.dataset.content.split(' ')[i] + ' '
    }
    desc.innerHTML += 'قراءة المزيد.....'


    desc.addEventListener('click', function(e) {
      if(this.classList.contains('hide')) {

        this.classList.add('show')
        this.classList.remove('hide')
        desc.innerHTML = desc.dataset.content

      }else {
        this.classList.remove('show')
        this.classList.add('hide')

        desc.innerHTML = '';

        for(let i = 0; i < 10; i++) {
          desc.innerHTML += desc.dataset.content.split(' ')[i] + ' '
        }

        desc.innerHTML += 'قراءة المزيد.....'

      }

    })
  }else {
    desc.innerHTML += desc.dataset.content
  }

})


function confirmDelete() {
  
    // Show a confirmation dialog
    var result = confirm("هل فعلا تريد حذف هذا العرض ؟");
    
    // If the user clicks "OK," the form will be submitted; otherwise, it will be canceled
    return result;
}

// Offer status (Sold/Not Sold)
let offerStatus = document.querySelectorAll('.offer-status');

offerStatus.forEach(offer => {
  offer.addEventListener('click', function(){
    function handleAttributeChange(mutationsList) {
      for (const mutation of mutationsList) {
        if (mutation.type === 'attributes' && mutation.attributeName === 'data-status') {
          if(offer.dataset.status == 1) {
            offer.className = 'fa-solid fa-store text-xl cursor-pointer offer-status text-green-500'
          }else {
            offer.className = 'fa-solid fa-store-slash text-xl cursor-pointer offer-status text-gray-400'
          }
        }
      }
    }
    
    // Options for the observer (which mutations to observe)
    const config = { attributes: true, attributeFilter: ['data-status'] };
    
    // Create an observer instance linked to the callback function
    const observer = new MutationObserver(handleAttributeChange);
    
    // Start observing the target node for configured mutations
    observer.observe(offer, config);
    
  })
})

// Change offer icon when load page

window.onload = function() {

  offerStatus.forEach(s => {

    if(s.dataset.status != 1) {

      s.className = 'fa-solid fa-store-slash text-xl cursor-pointer offer-status text-gray-400'
      
    }else {
      s.className = 'fa-solid fa-store text-xl cursor-pointer offer-status text-green-600'

    }

  })
}

// search input 
let searchSec = document.getElementById('searchSection');
let sectionChild = document.querySelector('#searchSection > div');
let searchInput = document.querySelector('#searchSection input');


function searchSection() {
  searchSec.classList.toggle('hidden');
  searchInput.value = '';
}

if(sectionChild) {
  sectionChild.addEventListener('click', function(event) {
    // Check if the clicked element is not within the search input or results section
    if (!event.target.matches('#searchSection input') && !event.target.matches('#searchSection .results-list')) {
      searchSec.classList.toggle('hidden');
      searchInput.value = '';
    }
  
  });
}

// Navbar links on small dvices
function navbarToggle() {
  document.querySelector('.nav-links').classList.toggle('hidden')
}



// Toggle User Messages 
function toggleArrow(e) {

    let clientSection = document.querySelector('.dashborad .users-msg')
  
    clientSection.classList.toggle('hidden')

    if(clientSection.classList.contains('hidden')) {
      e.className = 'fa-solid fa-circle-chevron-down cursor-pointer user-arrow'
    }else {
      e.className = 'fa-solid fa-circle-chevron-up cursor-pointer user-arrow'
    }
    
}



// Quick Links Design 

breadcrumb = document.querySelector('.breadcrumb');
crumbLinks = document.querySelectorAll('.breadcrumb-item:not(.active) a');

crumbLinks.forEach(link => {
 
  link.className += ' text-main-back font-semibold hover:text-red-500 inline-block';
  span = document.createElement('span');
  span.className = 'px-1 font-semibold';
  span.innerHTML = '/';

  link.after(span);
})



// Slider code
let slider = document.getElementById('main-slider');

if(slider) {

var splide = new Splide( '#main-slider', {
  type   : 'loop',
  autoplay: false,
  pagination: false,
  direction: 'rtl'
} );

var thumbnails = document.getElementsByClassName( 'thumbnail' );
var current;


for ( var i = 0; i < thumbnails.length; i++ ) {
  initThumbnail( thumbnails[ i ], i );
}


function initThumbnail( thumbnail, index ) {
  thumbnail.addEventListener( 'click', function () {
    splide.go( index );
  } );
}


splide.on( 'mounted move', function () {
  var thumbnail = thumbnails[ splide.index ];


  if ( thumbnail ) {
    if ( current ) {
      current.classList.remove( 'is-active' );
    }


    thumbnail.classList.add( 'is-active' );
    current = thumbnail;
  }
} );


splide.mount();

}
// End slider code


// Add active class on current page link
let pagename = location.pathname.slice(1)
let navLinks = document.querySelectorAll('.nav-links li a');

navLinks.forEach(link => {
  link.classList.remove('active-link')
 
  if(link.dataset.pagename == pagename) {
    link.classList.add('active-link');
  }

  if('index.php' == pagename) {
    document.querySelector('.main-page').classList.add('active-link');
  }
})

// Star Ratings code 
let starRatings = document.querySelectorAll('.star_ratings_add i');
let reviewForm = document.querySelector('.review-form');
let ratingValue = document.getElementById('ratingValue')
let starContainer = document.querySelector('.star-container');

starRatings.forEach((star, index) => {
  star.addEventListener('click', (e) => {
    // Retrieve the index of the clicked star
      starRatings.forEach(e => {
          e.classList.replace('fa-solid', 'fa-regular')
          if(e.dataset.rating == index || e.dataset.rating < index) {
            e.classList.replace('fa-regular', 'fa-solid')
            ratingValue.value = index + 1;
          }
      })
  });
});


// show/hide Reviews Options 

reviewOptions = document.querySelectorAll('.review-options') 
dropOptions = document.querySelectorAll('.dropdownDots');


reviewOptions.forEach(options => {
  
  options.addEventListener('click', function (event) {
    event.stopPropagation();
    options.style.background = 'rgb(209 213 219)'
    options.nextElementSibling.classList.toggle('hidden')
  })

})

window.addEventListener('click', function(event) {
  // Check if the clicked element is not within the dropdown
  if (!event.target.closest('.dropdownDots')) {
      // Close the dropdown by adding the 'hidden' class
      dropOptions.forEach(dropdown => {
          dropdown.classList.add('hidden');
          dropdown.previousElementSibling.style.background = 'none'
      });
  }
});

var swiper = new Swiper(".mySwiper", {

  breakpoints: {
    // when window width is <= 768px
    1200: {
      slidesPerView: 3// adjust the number of slides per view for small devices
    },
    900: {
      slidesPerView: 2// adjust the number of slides per view for small devices
    },
    768: {
      slidesPerView: 1// adjust the number of slides per view for small devices
    }
  },
  noSwiping: true,
  spaceBetween: 20,
  speed: 5000, // Decreased speed for smoother scrolling
  loop: true,
  autoplay: {
    delay: 0, // Increased delay for longer intervals between slides
    disableOnInteraction: false // Autoplay continues even when user interacts with the slider
  },
  mousewheel: false, // Enable mousewheel control for smoother scrolling
  keyboard: false, // Enable keyboard control for smoother navigation
});


// Animation class
if(typeof AOS !== 'undefined') {
  AOS.init()
}

// Footer get current year
if(document.getElementById("copyright")) {
  document.getElementById("copyright").innerHTML = new Date().getFullYear();

}
