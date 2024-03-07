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
    
    <div class="main-container pt-10 pb-20">
        <div class="px-4 flex justify-center items-end md:flex-row flex-col  w-full gap-10">
            <form action="/userMsg" method="POST" class="md:w-1/2 w-full mt-20 max-w-full contact-form bg-gray-100 shadow p-4 rounded" data-aos="fade-left" data-aos-duration="1500">
                @csrf
                <h1 class="text-5xl text-center mb-10 text-main-text">تواصل معنا</h1>
                <div class="grid sm:grid-cols-2 grid-col gap-5 mb-4">
                    <div class="relative">
                        <input type="text" name="first-name" class="w-full focus:outline-none focus:ring-2 focus:ring-main-back border-none focus:border-2 focus:border-main-back rounded-md transition-all placeholder:text-gray-500" placeholder="الإسم الأول" value="{{old('first-name')}}" required autofocus>
                        @error('first-name')
                            <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                        @enderror
                        <p class="absolute left-2 top-[60%] -translate-y-1/2 text-red-500 text-xl">*</p>
                    </div>
                    <div class="relative">
                        <input type="text" name="last-name" class="rounded-md w-full focus:outline-none focus:ring-2 focus:ring-main-back border-none focus:border-2 focus:border-main-back transition-all" placeholder="الإسم الأخير" value="{{old('last-name')}}" required>
                        @error('last-name')
                            <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                        @enderror
                        <p class="absolute left-2 top-[60%] -translate-y-1/2 text-red-500 text-xl">*</p>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 grid-col gap-5">
                    <div>
                        <input type="number" name="phone" class="rounded-md w-full focus:outline-none focus:ring-2 focus:ring-main-back border-none focus:border-2 focus:border-main-back transition-all placeholder:text-gray-500" placeholder="رقم الهاتف" value="{{old('phone')}}">
                    </div>
                    <div class="relative">
                        <input type="email" name="email" class="rounded-md w-full focus:outline-none focus:ring-2 focus:ring-main-back border-none focus:border-2 focus:border-main-back transition-all placeholder:text-gray-500" placeholder="البريد الإلكتروني" value="{{old('email')}}" required>
                        @error('email')
                                <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                        @enderror
                        <p class="absolute left-2 top-[60%] -translate-y-1/2 text-red-500 text-xl">*</p>
                    </div>
                </div>
                <div class="w-full mt-4 relative">
                    <textarea name="description" placeholder="أكتب رسالتك هنا..." maxlength="500" 
                    class="desc w-full h-[200px] rounded-md p-4 border-none  focus:ring-2 focus:ring-main-back placeholder:text-gray-500" minlength="2" maxlength="200" required>{{old('description')}}</textarea>
                    @error('description')
                        <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                    @enderror
                    <p class="absolute left-2 top-2  text-red-500 text-xl">*</p>
                </div>
                <input type="submit" value="إرسال" class="rounded-md py-1 px-4 mt-4 text-white  bg-sec-back w-40 transition-all ease-linear bg-main-back hover:bg-hover-back cursor-pointer">
            </form>
            <img src="{{asset('images/about2.png')}}"
                class="md:w-1/3 h-1/3 w-full max-w-full "
             alt="تواصل معنا" data-aos="fade-left" data-aos-duration="1500">
        </div>
    </div>
@endsection