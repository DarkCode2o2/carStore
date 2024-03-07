@extends('layouts.main')


@section('content')
    <div class="main-container pt-40 pb-20">
        <div class="container lg:w-11/12 mx-auto">
            <div class="partners">
                <div class="title text-center my-8 border-b w-[700px] max-w-full mx-auto border-gray-400">
                    <h1 class="text-5xl mb-4 text-main-back">شركاء النجاح</h1>
                    <p class=" text-gray-600 pb-2">
                      شكرًا لثقتكم وتعاونكم. نحن شركاء في النجاح، ومعًا سنحقق المزيد بإذن الله.
                    </p>
                </div>
                <div class="relative pb-40 mt-20 grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
                   
                    <a href="https://wa.me/966505700333" target="_blank" class="box group relative p-5 overflow-hidden hover:[.partner-info] top-0 rounded shadow-lg inline-block bg-gray-100 hover:shadow-lg hover:scale-[0.99] transition-all ease-linear">
                        <img src="{{asset('images/partner1.jpg')}}" class="w-full h-full rounded" alt="">
                        <div class="partner-info content absolute left-0 w-full h-full flex justify-center flex-col items-center bg-main-back top-[-10000px] group-hover:top-[0px] group-hover:opacity-100 transition-all ease-linear">
                            <i class="fa-brands fa-whatsapp text-whatsapp text-5xl mb-2"></i>
                            <h3 class="text-white font-semibold">جدة - كيلو 14</h3>
                        </div>
                    </a>
                    <a href="https://wa.me/966507907300" target="_blank" class="box group relative p-5 overflow-hidden hover:[.partner-info] top-0 rounded shadow-lg inline-block bg-gray-100 hover:shadow-lg hover:scale-[0.99] transition-all ease-linear">
                        <img src="{{asset('images/partner2.jpg')}}" class="w-full h-full rounded" alt="">
                        <div class="partner-info content absolute left-0 w-full h-full flex justify-center flex-col items-center bg-main-back top-[-10000px] group-hover:top-[0px] group-hover:opacity-100 transition-all ease-linear">
                            <i class="fa-brands fa-whatsapp text-whatsapp text-5xl mb-2"></i>
                            <h3 class="text-white font-semibold">جدة - صناعية عسفان</h3>
                        </div>
                    </a>
                 
                </div>
            </div>
        </div>
    </div>
@endsection