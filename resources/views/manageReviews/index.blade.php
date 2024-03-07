@extends('layouts.customize')

@section('content')
    @if(session()->has('success-msg'))

    <div class="p-4 mb-4 fixed z-50 alert-msg w-80 mx-2 mt-4 flex justify-between items-center text-sm text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span  class="font-semibold">{{session('success-msg')}}<i class="fa-solid ms-1 fa-circle-check text-sm"></i></span>
        <svg class="w-7 h-7 p-2 xmark cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </div>

    @endif
    @if (!empty($reviews) && count($reviews) != 0)
    <div class="reviews-section py-20 px-10 ">
        @if (count($reviews) > 1)
            <div class="flex sm:flex-nowrap flex-wrap sm:gap-0 gap-5 show-options">
                <span class="text-3xl me-2"><i class="fa-solid fa-sort"></i></span>
                <a href="?sort=desc"  class=" {{$sort == 'desc' ? 'active' : '' }} sm:mx-1 border-2 border-gray-500 py-1 px-2 rounded text-gray-500">الأحدث </a> 
                <a href="?sort=asc" class=" {{$sort == 'asc' ? 'active' : '' }} ms-1 border-2 border-gray-500 py-1 px-2 rounded text-gray-500">الأقدم</a>
                @if($sort == 'asc')
                    <a href="?sort=asc&type=unapproval" class=" {{request()->has('type') ? 'active' : '' }} ms-1 border-2 border-gray-500 py-1 px-2 rounded text-gray-500"> الآراء التي لم يتم الموافقة عليه </a>
                @elseif($sort == 'desc')
                    <a href="?sort=desc&type=unapproval" class=" {{request()->has('type') ? 'active' : '' }} ms-1 border-2 border-gray-500 py-1 px-2 rounded text-gray-500"> الآراء التي لم يتم الموافقة عليه </a>
                @endif
            </div>
        @endif
        <div class="reviews grid md:grid-cols-3 sm:gird-cols-2 grid-cols-1 gap-5">
            @foreach ($reviews as $review)
                <div class="max-w-full relative">
                    <form action="/manageReviews/{{$review->id}}" method="POST" class="delete-form" onsubmit="return confirmDelete()">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-circle-xmark absolute -left-4 top-2 z-50 text-3xl text-red-500 cursor-pointer hover:text-red-700 transition-all ease-linear"></i>
                        </button>
                    </form>
                    <div class="user-review relative  bg-gray-200 p-4 pt-6 h-full flex flex-col justify-between rounded shadow-md">
                        <div class="star_ratings mb-4 flex justify-between">
                            <div>
                                @for ($i = 0; $i < 5; $i++)
                                @if ($i < $review->star_ratings)
                                    <span><i class="fa-solid fa-star text-yellow-400"></i></span>
                                    @php
                                        continue
                                    @endphp
                                @endif
                                    <span><i class="fa-regular fa-star text-yellow-400"></i></span>
                                @endfor
                            </div>
                            @if($review->approval == 0)
                                <form action="/manageReviews/{{$review->id}}/update" method="POST" class="delete-form">
                                    @csrf
                                    <button type="submit">
                                        <p class="bg-blue-500 text-white py-1 px-4 rounded cursor-pointer hover:bg-blue-800 text-sm transition-all ease-linear">قبول الرأي</p>
                                    </button>
                                </form>
                            @endif
                        </div>
                        <div class="content mb-5 leading-6 text-gray-600">{{$review->reviewer_content}}</div>
                        <div class="user-info flex justify-between items-end">
                           <div class="flex">
                                <i class="fa-solid fa-user text-2xl me-2"></i>
                                <div class="">
                                    <h3 class=" font-bold mr-2 relative top-1">{{$review->reviewer_name}}</h3>
                                    <small class="text-gray-600 mr-2 relative top-1">{{$review->reviewer_city}}</small>
                                </div>
                           </div>
                           <div class=" text-sm text-gray-500">
                                @php
                                    $date = date_create($review->created_at);
                                    echo date_format($date, 'l, M d, Y')
                                @endphp
                           </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @else
        <div class="w-full h-[90vh] flex pt-10 items-center flex-col bg-white">
            <img src="{{asset('images/no-offer.jpg')}}" alt="" class="max-w-full w-[500px]">
            <h3 class="text-blue-400 sm:text-2xl mt-2 max-w-full bg-blue-100 py-2 px-4 rounded-md shadow">ليس هنالك بيانات لعرضها</h3>
        </div>
    @endif
@endsection