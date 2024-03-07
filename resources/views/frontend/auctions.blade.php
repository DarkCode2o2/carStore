@extends('layouts.views')


@section('path') {{ Breadcrumbs::render('auctions')}} @endsection

@section('content')
    <div class="md:w-11/12 w-full px-4  mx-auto">
        <div class="relative pb-40 grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8" data-aos="fade-right"  data-aos-duration="1500">
            @foreach($auctionCars as $car)
            <a href="/commercials-auctionCars/{{$car->id}}" title="عرض السيارات" class="group mt-10 bg-white text-main-text shadow-md hover:shadow-lg transition-all ease-linear rounded overflow-hidden relative">
                <img src="{{asset("uploads/car_logos/$car->car_logo")}}" class="w-full rounded-sm group-hover:blur-[1px] transition-all ease-linear object-contain" alt="صورة السيارة">
                <div class="content p-4 pt-0 bg-white">
                    <h3 class="pt-2 mb-4 font-semibold text-main-back">{{$car->car_model}}</h3>
                    <div class="flex justify-between items-center mt-2">
                        <span class="font-semibold"><i class="fa-solid fa-gauge"></i> {{$car->car_odometer}} كم</span>
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
        </div>
    </div>
@endsection