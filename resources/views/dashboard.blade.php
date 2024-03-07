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
    <div class="main-container md:py-40 py-20">
        <div class="dashborad bg-white md:p-8 p-2 shadow rounded-md w-full md:w-10/12 mx-auto">
            <div class="cards mx-auto flex mt-10 justify-center sm:flex-row flex-col items-center gap-5 mb-10 md:w-10/12">
                <a href="{{route('manageCar')}}" class="bg-blue-500 rounded-md sm:w-1/2 w-full max-w-full text-white p-2 flex justify-center items-center hover:shadow-lg hover:bg-blue-700 transition-all ease-in-out">
                    <div class="p-2 text-center me-10">
                        <h2 class="text-6xl font-semibold">{{$carsCount}}</h2>
                        <p class="text-2xl">سيارات البيع المباشر</p>
                    </div>
                    <i class="fa-solid fa-car-side text-5xl"></i>
                </a>
                <a href="{{route('manageAuction')}}" class="bg-red-500 rounded-md sm:w-1/2 w-full max-w-full text-white p-2 flex justify-center items-center hover:shadow-lg hover:bg-red-700 transition-all ease-in-out">
                    <div class="p-2 text-center me-10">
                        <h2 class="text-6xl font-semibold">{{$auctionsCount}}</h2>
                        <p class="text-2xl">سيارات المزاد</p>
                    </div>
                    <i class="fa-solid fa-tags text-5xl"></i>
                </a>
            </div>

            <div class="border-t-2 border-gray-200 pt-8">
                <h3 class="text-blue-500 text-2xl font-semibold pb-2 w-fit md:mt-20 mt-10">رسائل العملاء <i class="fa-solid fa-circle-chevron-up cursor-pointer user-arrow" onclick="toggleArrow(this)"></i></h3>
                <div class="users-msg mt-5">
                   @if (!empty($users) && count($users) != 0)
                        @foreach ($users as $user)
                            <div class="clients-section">
                                <div class="bg-slate-100 p-2 mb-5 rounded-md w-full border-b-2 border-gray-200 relative">
                                    <form action="/dashboard/{{$user->id}}" method="POST" class="delete-form" onsubmit="return confirmDelete()">
                                        @csrf
                                        
                                        <button type="submit">
                                            <i class="fa-solid fa-circle-xmark absolute -left-2 -top-2 text-3xl text-red-500 cursor-pointer hover:text-red-700 transition-all ease-linear "></i>
                                        </button>
                                    </form>
                                    <div class="w-full">
                                        <div class="mb-2">
                                            <img src="https://cdn-icons-png.flaticon.com/512/1144/1144760.png" alt="" class="w-10 h-10 max-w-full max-h-full inline-block">
                                            <p class="inline-block ms-2 text-gray-500 font-semibold">{{$user->fname}} {{$user->lname}}</p>
                                        </div>
                                        <p class="text-blue-500 font-semibold mb-2">البريد الإكتروني: {{$user->email}}</p>
                                        <p class="text-blue-500 font-semibold">رقم الهاتف: {{$user->number}}</p>
                                    </div>
                                    <div class="max-w-full mt-5 p-2">
                                        <h3 class="text-blue-500 font-semibold text-2xl mb-2">الرسالة: </h3>
                                        <p class="leading-8 text-gray-500">
                                            {{$user->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                   @else 
                        <div class="w-full h-[50vh] flex pb-10 items-center flex-col bg-white mb-20">
                            <img src="{{asset('images/no-offer.jpg')}}" alt="" class="max-w-full w-[400px]">
                            <h3 class="text-blue-400 sm:text-2xl mt-2 max-w-full bg-blue-100 py-2 px-4 rounded-md shadow">ليس هنالك بيانات لعرضها</h3>
                        </div>
                   @endif
                </div>
            </div>
        </div>
    </div>
@endsection