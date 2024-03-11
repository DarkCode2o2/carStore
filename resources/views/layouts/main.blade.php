<!DOCTYPE html>
<html dir="rtl" style="scroll-behavior: smooth">
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

        
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        
        <!-- Scripts -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


        <link rel="stylesheet" href="{{asset('build/assets/app.css')}}">
        
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9JXWSEQVN3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9JXWSEQVN3');
</script>
    </head>
    <body class="font-sans bg-white">

        <a href="https://wa.me/966503001887" target="_blank" class="whatsapp-icon">
            <i class="fa-brands fa-whatsapp text-whatsapp"></i>
        </a>
        
        <header class="relative z-[2000] bg-main-back px-10 lg:px-0">
            <nav class="flex md:justify-evenly justify-between items-center py-2">
                <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse" title="ابو بدر لإستيراد السيارات الكورية">
                    <img src="{{asset('images/logov2.png')}}" class="w-[120px] h-[120px] object-cover bg-gray-100 p-2 rounded-md" alt="شعار الموقع">
                </a>
                <div class="flex items-center justify-evenly">
                    <i class="fa-solid fa-bars-staggered sm:text-3xl text-2xl text-main-text cursor-pointer md:hidden inline-block relative -top-2 " onclick="navbarToggle()"></i>
                    
                    <div class="md:block hidden nav-list md:static fixed right-0 top-0 md:w-auto w-full md:h-auto h-screen md:bg-transparent bg-black/70 nav-links z-10">
                        <ul class="md:bg-transparent bg-white  md:w-full sm:w-1/2 w-4/5 pb-4 rounded-e-lg md:h-auto h-screen flex md:flex-row flex-col relative">
                            <i class="fa-solid fa-xmark absolute left-4 text-3xl text-white cursor-pointer hover:rotate-90 transition-all ease-linear md:hidden inline-block" onclick="navbarToggle()"></i>

                            <img src="{{asset('images/ابو بدر كارد 02.jpg')}}" alt="" class="w-full object-cover md:hidden inline-block">

                            <li>
                                <a href="/" class="block py-2 px-3 mt-2 md:mt-0 rounded md:hover:text-slate-200 font-semibold hover:bg-main-back hover:text-white text-main-text md:hover:bg-transparent md:border-0 transition md:p-0 lg:text-xl md:text-lg lg:me-10 md:me-5" aria-current="page" data-pagename="">الرئيسية</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}" class="block py-2 px-3 mt-2 md:mt-0 rounded md:hover:text-slate-200 font-semibold hover:bg-main-back hover:text-white text-main-text md:hover:bg-transparent md:border-0 transition md:p-0 lg:text-xl md:text-lg lg:me-10 md:me-5" data-pagename="about">من نحن</a>
                            </li>
                            <li>
                                <a href="{{route('purchase')}}" class="block py-2 px-3 mt-2 md:mt-0 rounded md:hover:text-slate-200 font-semibold hover:bg-main-back hover:text-white text-main-text md:hover:bg-transparent md:border-0 transition md:p-0 lg:text-xl md:text-lg lg:me-10 md:me-5" data-pagename="purchase-method">طرق شراء السيارات</a>
                            </li>
                           
                            <li>
                                <a href="{{route('reviews.index')}}" class="block py-2 px-3 mt-2 md:mt-0 rounded md:hover:text-slate-200 font-semibold hover:bg-main-back hover:text-white text-main-text md:hover:bg-transparent md:border-0 transition md:p-0 lg:text-xl md:text-lg lg:me-10 md:me-5" data-pagename="user-reviews">آراء العملاء</a>
                            </li>
                            <li>
                                <a href="{{route('partners')}}" class="block py-2 px-3 mt-2 md:mt-0 rounded md:hover:text-slate-200 font-semibold hover:bg-main-back hover:text-white text-main-text md:hover:bg-transparent md:border-0 transition md:p-0 lg:text-xl md:text-lg lg:me-10 md:me-5" data-pagename="partners">شركاء النجاح</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}" class="block py-2 px-3 mt-2 md:mt-0 rounded md:hover:text-slate-200 font-semibold hover:bg-main-back hover:text-white text-main-text md:hover:bg-transparent md:border-0 transition md:p-0 lg:text-xl md:text-lg lg:me-10 md:me-5" data-pagename="contact-us">تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                    <i class="fa-solid fa-magnifying-glass cursor-pointer hover:text-slate-100 text-main-text sm:text-3xl text-2xl md:mr-10 mr-5 relative -top-2" onclick="searchSection()"></i>
                </div>
            </nav>
            <div class="hidden" id="searchSection">
                @livewire('search-dropdown')
            </div>

        </header>

        @yield('content')



        <footer class="w-full mx-auto max-w-full bg-main-text pt-8 pb-4 md:px-10 px-5">
            <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 gap-10 justify-center">
                <div class="w-full col-span-2 sm:text-right text-center">
                    <img src="{{asset('images/logov2.png')}}" alt="شعار الموقع" class=" w-[200px] h-[200px] mx-auto max-w-full mb-5 bg-gray-100 p-2 rounded-md">
                    <h3 class="text-white sm:text-xl text-lg leading-2">
                        أبو بدر لاستيراد السيارات الكورية يقدم لكم خبرته الطويلة في استيراد سيارات الديزل والبنزين من دولة كوريا الجنوبية. 
                    </h3>
                </div>
                <div>
                    <h3 class="mt-5 sm:mb-10 mb-5 sm:text-2xl text-xl text-white font-bold">شركاء النجاح</h3>
                    <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 ">
                        <li>
                            <a href="https://wa.me/966505700333" target="_blank" title="شركاء النجاح" class="text-white sm:text-xl text-lg block mb-5 hover:text-main-back font-normal transition-all ease-linear"> <i class="fa-solid fa-handshake"></i> السواري العربية لصيانة سيارات الديزل </a>
                        </li>
                        <li>
                            <a href="https://wa.me/966507907300" target="_blank" title="شركاء النجاح" class="text-white sm:text-xl text-lg block mb-5 hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-handshake"></i> المركز السعودي السوري لصيانة سيارات الديزل</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="mt-5 sm:mb-10 mb-5 sm:text-2xl text-xl text-white font-bold">روابط قد تهمك</h3>
                    <ul class="mb-6 text-sm font-medium text-gray-500 sm:mb-0 ">
                        <li>
                            <a href="{{route('about')}}"  title="من نحن" class="text-white sm:text-xl text-lg block mb-3 hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-up-right-from-square"></i> من نحن</a>
                        </li>
                        <li>
                            <a href="{{route('reviews.index')}}"  title="آراء العملاء" class="text-white sm:text-xl text-lg block mb-3 hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-up-right-from-square"></i> آراء العملاء</a>
                        </li>
                        <li>
                            <a href="{{route('purchase')}}"  title="طرق شراء السيارات" class="text-white sm:text-xl text-lg block mb-3 hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-up-right-from-square"></i> طرق شراء السيارات</a>
                        </li>
                        <li>
                            <a href="{{route('partners')}}"  title="شركاء النجاح" class="text-white sm:text-xl text-lg block  sm:mb-5 hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-up-right-from-square"></i> شركاء النجاح</a>
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
        @livewireScripts
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="{{asset('build/assets/app.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
