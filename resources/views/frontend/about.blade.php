@extends('layouts.main')


@section('content')
    <div class="main-container pt-10 pb-20">
        <div class="about px-4 pt-10">
            <div class="container flex justify-center md:flex-row flex-col-reverse items-center gap-10" data-aos="fade-left" data-aos-duration="1500">
                <div class="sm:w-[400px] sm:h-[400px] w-[250px] h-[250px] max-w-full">
                    <img src="{{asset('images/about.jpg')}}" alt="من نحن؟" class="w-full shadow-lg rounded-full max-w-full">
                </div>
                <div class="content md:w-1/2 w-full max-w-full pb-2 border-b-4 border-main-back">
                    <h1 class="text-5xl mb-10 text-main-back ">من نحن؟</h1>
                    <p class="text-gray-500 mb-2 text-md">
                        أبو بدر لاستيراد السيارات الكورية يقدم لكم خبرته الطويلة في استيراد سيارات الديزل والبنزين من دولة كوريا الجنوبية. 
                    </p>
                    <p class="leading-8 text-gray-500 text-md">
                        حريصون على توفير طلباتكم من السيارات الكورية بالاسعار المناسبة ، والشراء مباشرةً من المزادات الكبيرة والمعتمدة في كوريا ، ونهتم باختيار أفضل السيارات الخالية من الأعطال والحوادث ، والممشى الحقيقي للسيارات.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection