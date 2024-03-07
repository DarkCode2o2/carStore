@extends('layouts.views')

@section('path') {{ Breadcrumbs::render('showAuction', $auctionCar)}} @endsection

@section('content')

    <div class="show-car w-full mx-auto px-4">
        <div class="mx-auto flex lg:flex-row flex-col justify-center gap-4 lg:w-11/12">
            <div class="car-info bg-slate-700 lg:w-[60%] w-full shadow-md rounded-md md:pt-10 p-0" data-aos="fade-left"  data-aos-duration="1500">
                <div id="main-slider" class="splide w-full mx-auto  ">
                    <div class="splide__track">
                        <ul class="splide__list h-[300px]">
                            @foreach ($images as $image)
                                <li class="splide__slide w-1/2">
                                    <img src="{{asset("uploads/auction_images/$image->image_path")}}" alt="صورة السيارة" class="w-full mx-auto md:h-[400px] h-full max-h-full max-w-full md:object-contain rounded-md">
                                </li>
                            @endforeach
                            <li class="splide__slide w-1/2">
                                <img src="{{asset("uploads/car_logos/$auctionCar->car_logo")}}" alt="صورة السيارة" class="w-full mx-auto md:h-[400px] h-full max-h-full max-w-full md:object-contain rounded-md">
                            </li>
                        </ul>
                    </div>
                </div>
                
                
                <div id="thumbnails" class="thumbnails w-full whitespace-nowrap grid auto-cols-max grid-flow-col justify-center px-1 py-2 gap-1 overflow-x-auto over scroll-smooth scrollbar-hide sm:scrollbar-default  scroll-px-2">
                    @foreach ($images as $image)
                        <img src="{{asset("uploads/auction_images/$image->image_path")}}" alt="صور السيارة" class="thumbnail w-20 opacity-50 cursor-pointer m-1  object-cover rounded-md selection: h-20 max-w-full">
                    @endforeach
                    <img src="{{asset("uploads/car_logos/$auctionCar->car_logo")}}" alt="صورة السيارة" class="thumbnail w-20 opacity-50 cursor-pointer m-1  object-cover rounded-md selection: h-20 max-w-full">

                </div>
            </div>
            <div class="bg-gray-100 p-4 lg:w-[40%] w-full rounded-md  shadow  mt-10 md:mt-0" data-aos="fade-left"  data-aos-duration="1500">
                <h1 class="text-main-back mb-10 text-2xl font-semibold" title="تفاصيل السيارة">تفاصيل السيارة</h1>
                <div class="flex lg:justify-between md:justify-around md:flex-row flex-col gap-5 md:items-center">
                    <ul >
                        <li class="mb-10 border-b-2 border-gray-200 pb-2">
                            <i class="fa-solid fa-car-side ms-1 text-main-back"></i>
                            الموديل  :
                            <span class="font-semibold">{{$auctionCar->car_model}}</span>
                        </li>
                        <li class="mb-10 border-b-2 border-gray-200 pb-2">
                            <i class="fa-solid fa-key ms-1 text-main-back"></i>
                            الشركة:
                            <span class="font-semibold">{{$auctionCar->car_company}}</span>
                        </li>
                        <li class="mb-10 border-b-2 border-gray-200 pb-2">
                            <i class="fa-solid fa-calendar-days ms-1 text-main-back"></i>
                            سنة التصنيع: 
                            <span class="font-semibold">{{$auctionCar->car_created}}</span>
                        </li>
                        <li class="sm:mb-10 mb-5 border-b-2 border-gray-200 pb-2">
                            <i class="fa-solid fa-gas-pump text-main-back"></i>
                            نوع الوقود :
                            <span class="font-semibold">{{$auctionCar->car_fuel ? 'ديزل' : 'بنزين'}}</span>
                        </li>
                    </ul>
                    <ul>
                        <li class="mb-10 border-b-2 border-gray-200 pb-2">
                            <i class="fa-solid fa-gauge ms-1 text-main-back"></i>
                            العداد:
                            <span class="font-semibold">{{$auctionCar->car_odometer}}</span>
                        </li>

                        <li class="mb-10 border-b-2 border-gray-200 pb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block ms-1 text-main-back" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                            </svg>
                            السعر: 
                            <span class="font-semibold">{{number_format($auctionCar->car_price)}}</span>
                        </li>

                        <li class="mb-10 border-b-2 border-gray-200 pb-2">
                            <i class="fa-solid fa-money-bill-wave ms-1 text-main-back"></i>
                            باقي التكاليف: 
                            <span class="font-semibold">{{number_format($auctionCar->car_costs)}}</span>
                        </li>

                        <li class="mb-10 border-b-2 border-gray-200 pb-2">
                            <i class="fa-solid fa-tag ms-1 text-main-back"></i>
                            الإجمالي: 
                            <span class="font-semibold">{{number_format(intval(str_replace(',', '', $auctionCar->car_costs)) + intval(str_replace(',', '', $auctionCar->car_price)))}}</span>
                        </li>
                    </ul>
                </div>
                <div class="mb-10 border-b-2 border-gray-200 pb-2 md:text-center">
                    <i class="fa-solid fa-location-dot ms-1 text-main-back"></i>
                    الموقع: 
                    <span class="font-semibold">{{$auctionCar->car_location}}</span>
                </div>
                @if ($auctionCar->car_status)
                    <a href="https://iwtsp.com/966503001887" target="_blank" title="حجز السيارة" class="bg-main-back text-white text-center ease-in-out font-semibold mx-auto rounded-md py-2 px-4 sm:w-1/2 w-full lg:mt-20 mt-0 group sm:block hidden">احجزها الآن <i class="fa-solid fa-fire text-white group-hover:text-yellow-500 transition-all ease-linear"></i></a>
                @endif
            </div>
        </div>

        <div class="car-description w-full  my-20 lg:w-11/12 max-w-full mx-auto bg-teal-400 rounded-md p-4 shadow">
            <h1 class="text-main-text mb-10 text-2xl font-semibold" title="وصف السيارة">وصف السيارة</h1>

        @php
            $text = explode("\n", $auctionCar->car_description);

            foreach ($text as $line) {
                    echo "<span class='block mb-5 text-main-text'><i class='fa-solid fa-circle text-main-text mx-2 text-sm'></i>$line</span>";
            }
        @endphp
        </div>
        @if ($auctionCar->car_status)
            <a href="https://wa.me/966503001887" target="_blank" title="حجز السيارة" class="bg-main-back text-white text-center ease-in-out font-semibold mx-auto rounded-md py-2 px-4 sm:w-1/2 w-full my-10 mt-0 group sm:hidden block">احجزها الآن <i class="fa-solid fa-fire text-white group-hover:text-yellow-500 transition-all ease-linear"></i></a>
        @endif
    </div>
        
@endsection
