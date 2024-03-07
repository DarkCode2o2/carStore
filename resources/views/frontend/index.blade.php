@extends('layouts.main')


@section('content')
    
    <div class="main-container ">
        <div class="hero mx-auto bg-main-back md:pb-8 py-8">
            <img src="{{asset('images/banner.jpg')}}" alt="الصورة الرئيسية" class="mx-auto object-cover sm:w-10/12 w-full  rounded-md">
        </div>
        <div class="container w-full max-w-full  md:pt-40 pt-10">
            <div class="cars md:w-11/12 w-full px-4 mx-auto border-b-2 border-gray-200" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="sm:mt-20 mt-10 sm:text-4xl text-3xl text-main-back border-b-4 border-main-back pb-4 w-fit" data-aos="fade-right" data-aos-duration="2000">سيارات البيع المباشر</h1>
                @if (count($cars) != 0)
                    <div class="car-boxs pb-[120px] relative grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
                        @foreach($cars as $car)
                            <a href="commercials-cars/{{$car->id}}" title="عرض السيارات" class="group mt-10 bg-white text-main-text shadow-md hover:shadow-lg transition-all ease-linear rounded overflow-hidden relative">
                                <img src="{{asset("uploads/car_logos/$car->car_logo")}}" class="w-full rounded-sm group-hover:blur-[1px] transition-all ease-linear object-contain" alt="صورة السيارة">
                                <div class="content p-4 pt-0 bg-white">
                                    <h3 class="pt-2 mb-4 font-semibold text-main-back">{{$car->car_model}}</h3>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="font-semibold"><i class="fa-solid fa-gauge"></i> {{$car->car_odometer}} </span>
                                        <span class="font-semibold"><i class="fa-solid fa-calendar-days me-2"></i>{{$car->car_created}}</span>
                                    </div>
                                    <div class="flex justify-between items-center mt-4">
                                        <span class="font-semibold"><i class="fa-solid fa-gas-pump"></i> {{$car->car_fuel ? "ديزل": "بنزين"}}</span>
                                        <p class="">{{$car->car_location}} <i class="fa-solid fa-location-dot me-1"></i></p>
                                    </div>
                                    
                                    @if (!$car->car_status)
                                        <span class=" bg-main-back text-white font-semibold w-24 text-left px-4 py-1 absolute top-2 rounded-3xl -right-3 ">تم البيع</span>
                                    @endif
                                </div>
                            </a>
                        @endforeach
                        @if(count($cars) > 3)
                            <a href="{{route('cars')}}" 
                                class="w-40 text-center py-2 px-4 mt-10 mx-auto absolute bottom-14 left-1/2 -translate-x-1/2 bg-main-back rounded-lg text-white hover:bg-hover-back transition-all font-semibold"
                            >عرض المزيد </a>
                        @endif
                    </div>
                @else
                    <div class="flex justify-center items-center mb-4 flex-col">
                        <img src="{{asset("images/no-data.png")}}" alt="لا توجد بيانات لعرضها"  class="md:w-[400px] md:h-[400px] w-[300px] h-[300px] mb-2">
                        <h3 class="bg-teal-200 md:text-2xl text-xl py-2 px-4  rounded text-main-back">لا يوجد عروض سيارات </h3>
                    </div>
                @endif
            </div>
            <div class="cars md:w-11/12 w-full px-4 mx-auto border-b-2 border-gray-200" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="sm:mt-20 mt-10 sm:text-4xl text-3xl text-main-back border-b-4 border-main-back pb-4 w-fit" data-aos="fade-right" data-aos-duration="2000">سيارات المزاد</h1>
                @if (count($auctions) != 0)
                    <div class="car-boxs pb-[120px] relative grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
                        @foreach($auctions as $car)
                            <a href="commercials-auctionCars/{{$car->id}}" title="عرض السيارات" class="group mt-10 bg-white text-main-text shadow-md hover:shadow-lg transition-all ease-linear rounded overflow-hidden relative">
                                <img src="{{asset("uploads/car_logos/$car->car_logo")}}" class="w-full rounded-sm group-hover:blur-[1px] transition-all ease-linear object-contain" alt="صورة السيارة">
                                <div class="content p-4 pt-0 bg-white">
                                    <h3 class="pt-2 mb-4 font-semibold text-main-back">{{$car->car_model}}</h3>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="font-semibold"><i class="fa-solid fa-gauge"></i> {{$car->car_odometer}} </span>
                                        <span class="font-semibold"><i class="fa-solid fa-calendar-days me-2"></i>{{$car->car_created}}</span>
                                    </div>
                                    <div class="flex justify-between items-center mt-4">
                                        <span class="font-semibold"><i class="fa-solid fa-gas-pump"></i> {{$car->car_fuel ? "ديزل": "بنزين"}}</span>
                                        <p class="">{{$car->car_location}} <i class="fa-solid fa-location-dot me-1"></i></p>
                                    </div>
                                    
                                    @if (!$car->car_status)
                                        <span class=" bg-main-back text-white font-semibold w-24 text-left px-4 py-1 absolute top-2 rounded-3xl -right-3 ">تم البيع</span>
                                    @endif
                                </div>
                            </a>
                        @endforeach
                        @if(count($cars) > 3)
                        <a href="{{route('auctions')}}" 
                            class="w-40 text-center py-2 px-4 mt-10 mx-auto absolute bottom-14 left-1/2 -translate-x-1/2 bg-main-back rounded-lg text-white hover:bg-hover-back transition-all font-semibold"
                        >عرض المزيد </a>
                    @endif
                    </div>
                @else
                    <div class="flex justify-center items-center mb-4 flex-col">
                        <img src="{{asset("images/no-data.png")}}" alt="لا توجد بيانات لعرضها"  class="md:w-[400px] md:h-[400px] w-[300px] h-[300px] mb-2">
                        <h3 class="bg-teal-200 md:text-2xl text-xl py-2 px-4 rounded text-main-back">لا يوجد عروض سيارات </h3>
                    </div>
                @endif
            </div>
            
            <section class="py-20 my-40 relative">
                <h2 class="text-center sm:text-5xl text-4xl text-main-back mb-5 max-w-full -top-10 bg-white sm:p-4 p-0 z-10 absolute left-1/2 -translate-x-1/2">آراء العملاء</h2>
                <span class="absolute w-[50%] h-1 bg-main-back sm:top-0 top-2 left-1/2 -translate-x-1/2 -z-1"></span>
                @if(count($reviews) != 0)
                    @if(count($reviews) >= 5)
                        <div class="swiper relative mySwiper w-full flex overflow-hidden">
                            <div class="swiper-wrapper flex ease-linear my-20">
                                <swiper-slide class=" user-review relative bg-gray-100 p-4 rounded shadow-md flex flex-col justify-between" dir="rtl">
                                    <div class="star_ratings inline-block">
                                        <span><i class="fa-solid fa-star text-yellow-400"></i></span>
                                        <span><i class="fa-solid fa-star text-yellow-400"></i></span>
                                        <span><i class="fa-solid fa-star text-yellow-400"></i></span>
                                        <span><i class="fa-solid fa-star text-yellow-400"></i></span>
                                        <span><i class="fa-solid fa-star text-yellow-400"></i></span>
                                        <span class="ms-2 text-main-text">(50+)</span>
                                    </div>
                                    <h3 class="my-4 text-main-text text-2xl font-bold">تقييمات العملاء على موقع حراج </h3>
                                    <div class="content mb-5 leading-6 text-gray-600">
                                        <a href="https://haraj.com.sa/users/%D8%A7%D8%A8%D9%88%20%D8%A8%D8%AF%D8%B1%20%D9%84%D9%84%D8%A7%D8%B3%D8%AA%D9%8A%D8%B1%D8%A7%D8%AF" target="_blank"  title="آراء العملاء" class="text-main-text sm:text-xl text-lg block mb-5 underline hover:text-main-back font-normal transition-all ease-linear"><i class="fa-solid fa-up-right-from-square"></i> موقع حراج</a>
                                    </div>
                                </swiper-slide>
                                @foreach ($reviews as $review)
                                    <swiper-slide class="swiper-slider user-review relative bg-gray-100 p-4 rounded shadow-md flex flex-col justify-between" dir="rtl">
                                        <div class="star_ratings inline-block mb-8">
                
                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i < $review->star_ratings)
                                                    <span><i class="fa-solid fa-star text-main-back text-xl"></i></span>
                                                    @php
                                                        continue
                                                    @endphp
                                                @endif
                                                <span><i class="fa-regular fa-star text-main-back text-xl"></i></span>
                                            @endfor
                                        </div>
                                        <div class="content mb-5 leading-6 text-gray-600">{{$review->reviewer_content}}</div>
                                        <div class="user-info flex">
                                            <i class="fa-solid fa-user text-2xl me-2"></i>
                                            <div class="">
                                                <h3 class=" font-bold mr-2 relative top-1">{{$review->reviewer_name}}</h3>
                                                <small class="text-gray-600 mr-2 relative top-1">{{$review->reviewer_city}}</small>
                                            </div>
                                        </div>
                                    </swiper-slide>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    @else 
                        <div class="w-[1000px] mx-auto max-w-full px-2">
                            <div class="grid md:grid-cols-2 grid-cols-1 gap-5 mb-20 mt-10">
                                @foreach ($reviews as $review)
                                    <div class="user-review relative bg-gray-200 p-4 rounded shadow-md flex flex-col justify-between">
                                        <div class="star_ratings inline-block mb-8">
                
                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i < $review->star_ratings)
                                                    <span><i class="fa-solid fa-star text-main-back"></i></span>
                                                    @php
                                                        continue
                                                    @endphp
                                                @endif
                                                <span><i class="fa-regular fa-star text-main-back"></i></span>
                                            @endfor
                                        </div>
                                        <div class="content mb-5 leading-6 text-gray-600">{{$review->reviewer_content}}</div>
                                        <div class="user-info flex">
                                            <i class="fa-solid fa-user text-2xl me-2 p-2 bg-white rounded-full w-[35px] h-[35px] flex justify-center items-start"></i>
                                            <div class="">
                                                <h3 class=" font-bold mr-2 relative top-1">{{$review->reviewer_name}}</h3>
                                                <small class="text-gray-600 mr-2 relative top-1">{{$review->reviewer_city}}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @else
                    <div class="max-w-full  mx-auto w-[700px] mb-20 flex flex-col items-center py-10">
                        <i class="fa-solid fa-magnifying-glass max-w-full text-[100px] text-main-back mx-auto text-center mb-4"></i>
                        <h3 class="text-main-back text-center sm:text-2xl mt-2 max-w-full bg-green-100 py-2 px-4 w-[500px] mx-auto rounded-md shadow">ليس هنالك آراء بعد، <a href="{{route('reviews.index')}}#review-form " class="underline text-base">أضافة رأيي</a></h3>
                    </div>
                @endif
            </section>
        </div>
    </div>
@endsection