@extends('layouts.main')

@section('content') 
    @if(session()->has('success-msg'))
        <div class="p-4 mb-4 fixed right-5 z-50 alert-msg w-80 mx-2 mt-4 flex justify-between items-center text-sm text-green-800 rounded-lg bg-green-200/50 dark:bg-gray-800 dark:text-green-400" role="alert" >
            <span  class="font-semibold">{{session('success-msg')}}<i class="fa-solid ms-1 fa-circle-check text-sm"></i></span>
            <svg class="w-7 h-7 p-2 xmark cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </div>
    @endif
    
    <div class="main-container lg:pt-40 pt-52 bg-gray-100 md:px-[100px] px-[20px]">
        <div class="reviews md:w-[1200px] max-w-full mx-auto">
            <div class="container w-full max-w-full md:pb-20 pb-10">
                <div class="title text-center my-8 border-b w-[700px] max-w-full mx-auto border-gray-400">
                    <h1 class="text-5xl text-main-back mb-5">آراء العملاء</h1>
                    <p class=" text-gray-600 pb-2 w-[600px] max-w-full mx-auto">
                        تصفح تجارب وآراء عملائنا وتفاصيل شهاداتهم الشخصية حول تجربتهم معنا.                    </p>
                </div>

                <div class="relative border-b-gray-400 border-b-2">
                    @if (count($reviews) != 0)
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-8 pb-20 mb-20 mt-20">
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
                                        <i class="fa-solid fa-user text-2xl me-2"></i>
                                        <div class="">
                                            <h3 class=" font-bold mr-2 relative top-1">{{$review->reviewer_name}}</h3>
                                            <small class="text-gray-600 mr-2 relative top-1">{{$review->reviewer_city}}</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="user-review relative bg-gray-200 p-4 rounded shadow-md">

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
                    @else
                        <div class="max-w-full  mx-auto w-[700px] mb-20 flex flex-col items-center py-10">
                            <i class="fa-solid fa-magnifying-glass max-w-full text-[100px] text-main-back mx-auto text-center mb-4"></i>
                            <h3 class="text-main-back text-center sm:text-2xl mt-2 max-w-full bg-green-100 py-2 px-4 w-[500px] mx-auto rounded-md shadow">ليس هنالك آراء بعد، <a href="#review-form " class="underline text-base">أضافة رأيي</a></h3>
                        </div>

                        <div class="user-review mb-4 w-1/2 relative bg-gray-200 p-4 rounded shadow-md">

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
                    @endif
                </div>



                <div class="add-review flex justify-center items-center flex-col ">
                    <div class="title my-10">
                        <h2 class="text-4xl text-gray-600 text-center mb-6" >رأيك يهمنا</h2>
                        <p>شكرًا لثقتكم وتعاونكم. نحن شركاء في النجاح.</p>
                    </div>

                    <form action="{{route('reviews.store')}}#review-form" method="POST" id="review-form" class="bg-white p-5 shadow-md w-[800px] max-w-full rounded review-form">
                        @csrf
                       <div class="flex md:flex-row flex-col md:gap-5">
                            <div class="relative md:w-1/2 w-full">
                                <label class=" my-2 inline-block">الإسم</label>
                                <input type="text" name="reviewer_name" placeholder="الإسم بالكامل" value="{{old('reviewer_name')}}" class="w-full rounded border-gray-400 focus:ring-2 focus:ring-main-back" required>
                                @error('reviewer_name')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                                <p class="absolute left-2 top-[75%] -translate-y-1/2 text-red-500 text-xl">*</p>
                            </div>
                            <div class="relative md:w-1/2 w-full">
                                <label class="mb-2 inline-block mt-2">المدينة</label>
                                <input type="text" name="reviewer_city" placeholder="اكتب مدينتك: الرياض، أبها، جدة...." value="{{old('reviewer_city')}}" class="w-full rounded border-gray-400 focus:ring-2 focus:ring-main-back" required>
                                @error('reviewer_city')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                                <p class="absolute left-2 top-[75%] -translate-y-1/2 text-red-500 text-xl">*</p>
                            </div>
                       </div>

                        <div class="my-4 relative">
                            <label class="mb-2 inline-block">رأي العميل</label>
                            <textarea name="reviewer_content" placeholder="أكتب رأيك..." minlength="2" maxlength="200" class=" w-full h-40 rounded border-gray-400 focus:ring-2 focus:ring-main-back" required>{{old('reviewer_content')}}</textarea>
                            @error('reviewer_content')
                                <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                            @enderror
                            <p class="absolute left-2 top-[30%] -translate-y-1/2 text-red-500 text-xl">*</p>
                        </div>
                        <div class="text-center  py-8">
                            <label class="mb-2 inline-block text-xl"> (القيمة الأفتراضية هي 5 نجوم)</label>
                            <div class="star_ratings_add block mb-8">
                                <span><i class="fa-solid fa-star cursor-pointer select-none text-main-back text-3xl" data-rating="0"></i></span>
                                <span><i class="fa-solid fa-star cursor-pointer select-none text-main-back text-3xl" data-rating="1"></i></span>
                                <span><i class="fa-solid fa-star cursor-pointer select-none text-main-back text-3xl" data-rating="2"></i></span>
                                <span><i class="fa-solid fa-star cursor-pointer select-none text-main-back text-3xl" data-rating="3"></i></span>
                                <span><i class="fa-solid fa-star cursor-pointer select-none text-main-back text-3xl" data-rating="4"></i></span>
                            </div>                        
                        </div>
                        <input type="hidden" name="rating" id="ratingValue" value="">
                        <input type="submit" value="إرسال" class="bg-main-back rounded border-none text-white py-2 px-4 sm:w-1/3 w-full cursor-pointer hover:scale-[0.99] transition-all ease-linear ">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection