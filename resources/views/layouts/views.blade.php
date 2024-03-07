<!DOCTYPE html>
<html dir="rtl">
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta name="description" content="
            أبو بدر لاستيراد السيارات يقدم لكم خبرته الطويلة في استيراد سيارات الديزل والبنزين.
حريصون على توفير طلباتكم من السيارات بالاسعار المناسبة ، والشراء مباشرةً من المزادات الكبيرة والمعتمدة، ونهتم باختيار أفضل السيارات الخالية من الأعطال والحوادث ، والممشى الحقيقي للسيارات.
        ">
        <meta name="keywords" content="سيارات مزاد , سيارات, إستيراد">

        <link rel="icon" type="image/png" href="{{asset('images/favicon.ico')}}">
        
        <!-- OG Meta Tags -->
        <meta property="og:title" content="ابو بدر لإستيراد السيارات">
        <meta property="og:description" content="أبو بدر لاستيراد السيارات يقدم لكم خبرته الطويلة في استيراد سيارات الديزل والبنزين.
حريصون على توفير طلباتكم من السيارات بالاسعار المناسبة ، والشراء مباشرةً من المزادات الكبيرة والمعتمدة، ونهتم باختيار أفضل السيارات الخالية من الأعطال والحوادث ، والممشى الحقيقي للسيارات.
        "> 
        <meta property="og:image" content="https://abobadrcars.com/images/logo.png">
        <meta property="og:url" content="https://abobadrcars.com">
        <meta name="twitter:card" content="https://abobadrcars.com/images/about.jpg">
        
        <!-- Twitter -->
        <meta property="twitter:card" content="https://abobadrcars.com/images/about.jpg">
        <meta property="twitter:url" content="https://abobadrcars.com">
        <meta property="twitter:title" content="ابو بدر لإسيتراد السيارات الكورية">
         <meta name="twitter:description" content="
            أبو بدر لاستيراد السيارات الكورية يقدم لكم خبرته الطويلة في استيراد سيارات الديزل والبنزين من دولة كوريا الجنوبية.
حريصون على توفير طلباتكم من السيارات الكورية بالاسعار المناسبة ، والشراء مباشرةً من المزادات الكبيرة والمعتمدة في كوريا ، ونهتم باختيار أفضل السيارات الخالية من الأعطال والحوادث ، والممشى الحقيقي للسيارات.
        ">
        <meta property="twitter:image" content="https://abobadrcars.com/images/logo.png">
        
        <title>أبو بدر للسيارات</title>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @livewireStyles
        
        <!-- Scripts -->
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('build/assets/app.css')}}">

        <!-- swiper css link -->
        <link href="
        https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css
        " rel="stylesheet">
        
            <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9JXWSEQVN3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-9JXWSEQVN3');
    </script>
    
    </head>
    <body class="font-sans bg-gray-100">
        <a href="https://wa.me/966503001887" target="_blank" class="whatsapp-icon" target="_blank">
            <i class="fa-brands fa-whatsapp text-whatsapp"></i>
        </a>
        <header class="lg:w-11/12 w-full px-4 mx-auto mb-20 z-50">
            <div class="flex justify-between flex-row items-center py-5">
                <nav class=" w-full">
                    <div class="flex flex-col">
                        <a href="/" class="flex items-center w-fit">
                            <img src="{{asset('images/logov2.png')}}" class="h-32 w-32 object-cover ">
                        </a>
                    </div>
                </nav>
                <i class="fa-solid fa-magnifying-glass cursor-pointer hover:text-main-back text-main-text text-3xl md:mr-10 mr-5 relative -top-2" onclick="searchSection()"></i>
                <div class="hidden" id="searchSection">
                    @livewire('search-dropdown')
                </div>
            </div>

            @yield('path')
        </header>

        @yield('content')


        <footer class="w-full mx-auto max-w-full bg-main-text pt-8 pb-4 md:px-10 px-5">
            <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 gap-10 justify-center">
                <div class="w-full col-span-2 sm:text-right text-center">
                    <img src="{{asset('images/logov2.png')}}" alt="شعار الموقع" class=" w-[200px] h-[200px] mx-auto max-w-full mb-5 bg-white rounded p-2">
                    <h3 class="text-white sm:text-xl text-lg leading-2">
                        أبو بدر لاستيراد السيارات الكورية يقدم لكم خبرته الطويلة في استيراد سيارات الديزل والبنزين من دولة كوريا الجنوبية. 
                    </h3>
                </div>
                <div class="">
                    <h3 class="mt-5 sm:mb-10 mb-5 sm:text-2xl text-xl text-white font-bold">شركاء النجاح</h3>
                    <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 ">
                        <li>
                            <a href="https://wa.me/966505700333" target="_blank" title="شركاء النجاح" class="text-white sm:text-xl text-lg block mb-5 hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-handshake"></i> السواري العربية</a>
                        </li>
                        <li>
                            <a href="https://wa.me/966507907300" target="_blank" title="شركاء النجاح" class="text-white sm:text-xl text-lg block mb-5 hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-handshake"></i> المركز السعودي السوري</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="mt-5 sm:mb-10 mb-5 sm:text-2xl text-xl text-white font-bold">روابط قد تهمك</h3>
                    <ul class="mb-6 text-sm font-medium text-gray-500 sm:mb-0 ">
                        <li>
                            <a href="{{route('about')}}"  title="من نحن" class="text-white sm:text-xl text-lg block mb-5 hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-up-right-from-square"></i> من نحن</a>
                        </li>
                        <li>
                            <a href="{{route('reviews.index')}}"  title="آراء العملاء" class="text-white sm:text-xl text-lg block mb-5 hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-up-right-from-square"></i> آراء العملاء</a>
                        </li>
                        <li>
                            <a href="{{route('purchase')}}"  title="طرق شراء السيارات" class="text-white sm:text-xl text-lg block mb-5 hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-up-right-from-square"></i> طرق شراء السيارات</a>
                        </li>
                        <li>
                            <a href="{{route('partners')}}"  title="شركاء النجاح" class="text-white sm:text-xl text-lg block mb-5 hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-up-right-from-square"></i> شركاء النجاح</a>
                        </li>
                    </ul>
                </div>
                  <div class="flex sm:items-start items-center flex-col sm:col-span-1 col-span-2">
                    <h3 class="mt-5 sm:mb-10 mb-5 text-2xl text-white font-bold">تواصل معنا</h3>
                    <ul class="flex flex-wrap gap-5 items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                        <li>
                            <a href="https://t.snapchat.com/NmDKCvqJ" target="_blank" title="حسابنا على سناب شات" class="hover:rotate-6 hover:scale-[1.1] block transition-all ease-linear text-4xl"><i class="fa-brands fa-snapchat text-snapchat"></i></a>
                        </li>
                        <li>
                            <a href="https://t.me/+5ntSzxq3j41hNDg8" target="_blank" title="حسابنا على تيليجرام"  class="hover:rotate-6 hover:scale-[1.1] block transition-all ease-linear text-4xl"><i class="fa-brands fa-telegram text-telegram"></i></a>
                        </li>
                        <li>
                            <a href="https://wa.me/966503001887" target="_blank" title="حسابنا على واتساب"  class="hover:rotate-6 hover:scale-[1.1] block transition-all ease-linear text-4xl"><i class="fa-brands fa-whatsapp text-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="https://haraj.com.sa/users/%D8%A7%D8%A8%D9%88%20%D8%A8%D8%AF%D8%B1%20%D9%84%D9%84%D8%A7%D8%B3%D8%AA%D9%8A%D8%B1%D8%A7%D8%AF" target="_blank" title="حسابنا على حراج"  class="hover:rotate-6 hover:scale-[1.1] block transition-all ease-linear text-2xl sm:text-4xl"><img src="{{asset('images/haraj-logo.png')}}" class="w-[40px] h-[40px] object-cover rounded-full"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t-2 border-gray-300 w-full pt-4 mt-2 text-center">
                <h2 class="text-white sm:text-xl text-lg">جميع الحقوق محفوظة لـ <a href="https://wa.me/966503001887" target="_blank" class="text-main-back hover:underline text-lg">أبو بدر</a> © <span id="copyright"></span> </h2>
            </div>
        </footer>
        <!-- swiper js link -->
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="{{asset('build/assets/app.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
