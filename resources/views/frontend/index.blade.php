@extends('layouts.main')
@section('content')
    
    <div class="main-container ">
        <div class="hero mx-auto bg-main-back md:pb-8 py-8">
            <img src="{{asset('images/banner.jpg')}}" alt="الصورة الرئيسية" class="mx-auto object-cover sm:w-10/12 w-full  rounded-md">
        </div>
        <div class="container w-full max-w-full  md:pt-40 pt-10">
            <div class="cars md:w-11/12 w-full px-4 mx-auto border-b-2 border-gray-200" data-aos="fade-up" data-aos-duration="1500">
                <div class="car-boxs pb-[120px] flex justify-center sm:flex-row flex-col items-center mt-6 gap-10">

                    <a href="commercials-cars" title="سيارات البيع المباشر" class="bg-white relative sm:mx-0 mx-auto sm:mb-0 mb-10 rounded shadow-md group hover:shadow-lg hover:-translate-y-2 transition-all ease-linear border-b-4 border-main-back hover:border-transparent w-[400px] max-w-full">
                        <span class="bg-main-back h-1 w-0 absolute top-0 left-1/2 -translate-x-1/2 group-hover:w-full transition-all ease-linear"></span>
                        <img src="{{asset("images/direct_sale.jpg")}}" class="w-full object-contain p-4" alt="صورة">
                        <h3 class="p-2 text-xl font-semibold sm:text-right text-center group-hover:text-main-back">سيارات البيع المباشر</h3>
                    </a>            

                    <a href="commercials-auctions" title="سيارات المزاد" class="bg-white relative sm:mx-0 mx-auto sm:mb-0 mb-10 rounded shadow-md group hover:shadow-lg hover:-translate-y-2 transition-all ease-linear border-b-4 border-main-back hover:border-transparent w-[400px] max-w-full">
                        <span class="bg-main-back h-1 w-0 absolute top-0 left-1/2 -translate-x-1/2 group-hover:w-full transition-all ease-linear"></span>
                        <img src="{{asset("images/auction_sale.png")}}" class="w-full object-contain p-4" alt="صورة">
                        <h3 class="p-2 text-xl font-semibold sm:text-right text-center group-hover:text-main-back">سيارات المزاد</h3>
                    </a>  

                </div>
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
                                    <div class="user-review relative bg-gray-100 p-4 rounded shadow-md flex flex-col justify-between">
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
                                <div class=" user-review relative bg-gray-100 p-4 rounded shadow-md flex flex-col justify-between" dir="rtl">
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
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="max-w-full mx-auto w-[700px] mb-20 flex flex-col  gap-5 py-10">
                        <div class="flex flex-col items-center">
                            <i class="fa-solid fa-magnifying-glass max-w-full text-[100px] text-main-back mx-auto text-center mb-4"></i>
                            <h3 class="text-main-back text-center sm:text-2xl mt-2 max-w-full bg-green-100 py-2 px-4 w-[500px] mx-auto rounded-md shadow">ليس هنالك آراء بعد، <a href="{{route('reviews.index')}}#review-form " class="underline text-base">أضافة رأيي</a></h3>
                        </div>

                        <div class=" user-review relative bg-gray-100 p-4 rounded shadow-md flex flex-col justify-between" dir="rtl">
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
                        </div>
                    </div>
                @endif
            </section>
        </div>
    </div>
@endsection