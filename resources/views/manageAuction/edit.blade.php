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
        <div class="create_car pt-20 pb-96 ms:px-0 px-2">
            <div class="max-w-6xl mx-auto mt-11">
                <form action="/manageAuction/{{$car->id}}" class="myForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="border-b-2 border-gray-300 pb-8 mb-8">
                        <div class="md:w-1/3 w-full bg-white h-60 relative rounded-md flex overflow-hidden shadow-sm">
                            <img src="{{asset("/uploads/car_logos/$car->car_logo")}}" class="object-cover w-full" id="car_logo">
                            <h1 id="displayMain" class="absolute text-2xl left-1/2 top-1/2 text-blue-600 -translate-y-1/2 -translate-x-1/2"></h1>
                        </div>
                        <div class="flex mb-4 justify-between sm:flex-row flex-col gap-2">
                            <div class="sm:w-1/2">
                                <label class="block mb-2 text-sm font-medium text-blue-600 mt-4" for="file_input">اختر الصورة الرئيسية</label>
                                <input 
                                    class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-40" 
                                    id="main_img" 
                                    type="file" 
                                    name="car_logo"
                                    accept='image/*'
                                    multiple
                                    onchange="readLogo(this)"
                                    >
                                @error('car_logo')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="sm:w-1/2">
                                <label class="text-blue-600 block mb-2 mt-4">الشركة المصنعة</label>
                                <input type="text"
                                    class="rounded border-none shadow w-full text-md max-w-full transition-all ease-linear"
                                    name="car_company"
                                    placeholder="مثال: هيونداى"
                                    value="{{old('car_company') ?? $car->car_company}}"
                                    required
                                    >
                                @error('car_company')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex justify-between sm:flex-row flex-col mt-4 gap-2">
                            <div class="sm:w-1/2">
                                <label class="block mb-2 font-medium text-blue-600 mt-4">سنة التصنيع</label>
                                <input type="number" min="1900" value="1900"
                                name="car_created"
                                class="rounded border-none shadow w-full text-md max-w-full transition-all ease-linear"
                                value="{{old('car_created') ?? $car->car_created}}"
                                required
                                >
                                @error('car_created')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="sm:w-1/2">
                                <label class="text-blue-600 block mb-2 mt-4">إسم الموديل</label>
                                <input type="text"
                                    class="rounded border-none shadow w-full text-md max-w-full transition-all ease-linear"
                                    name="car_model"
                                    placeholder="مثال: توسان 1990"
                                    value="{{old('car_model') ?? $car->car_model}}"
                                    required
                                    >
                                @error('car_model')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex justify-between sm:flex-row flex-col mt-4 gap-2">
                            <div class="sm:w-1/2">
                                <label class="block mb-2 font-medium text-blue-600 mt-4">السعر</label>
                                <input type="number"
                                placeholder="مثال: 90,000"
                                name="car_price"
                                class="rounded border-none shadow w-full text-md max-w-full transition-all ease-linear"
                                value="{{old('car_price') ?? $car->car_price}}"
                                required
                                >
                                @error('car_price')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="sm:w-1/2">
                                <label class="text-blue-600 block mb-2 mt-4">نوع الوقود</label>
                                <select 
                                    class="rounded border-none shadow w-full text-md max-w-full transition-all ease-linear"
                                    name="car_fuel">
                                    <option value="0" @php echo $car->car_fuel == 0 ? 'selected' : '' @endphp>بنزين</option>
                                    <option value="1" @php echo $car->car_fuel == 1 ? 'selected' : '' @endphp>ديزل</option>
                                </select>
                                @error('car_fuel')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="border-b-2 border-gray-300 pb-8 mb-8">
                        <div class="flex justify-between sm:flex-row flex-col gap-2">
                            <div class="sm:w-1/2">
                                <label class="block mb-2 font-medium text-blue-600 mt-4">التكاليف</label>
                                <input type="number"
                                class="rounded border-none shadow w-full text-md max-w-full transition-all ease-linear"
                                name="car_costs"
                                placeholder="مثال: 70,000"
                                value="{{old('car_costs') ?? $car->car_costs}}"
                                required
                                >
                                @error('car_costs')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="sm:w-1/2">
                                <label class="text-blue-600 block mb-2 mt-4">العداد</label>
                                <input type="text"
                                    class="rounded border-none shadow w-full text-md max-w-full transition-all ease-linear"
                                    name="car_odometer"
                                    placeholder="مثال: ١٠٠ آلف كم"
                                    value="{{old('car_odometer') ?? $car->car_odometer}}"
                                    required
                                    >
                                @error('car_odometer')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex justify-between sm:flex-row flex-col mt-4 gap-2 sm:items-start">
                            <div class="sm:w-1/2">
                                <label class="text-blue-600 block mb-2 mt-4">وصف السيارة</label>
                                <textarea 
                                class="rounded border-none shadow w-full transition-all ease-linear text-md max-w-full h-52"
                                name="car_description"
                                required
                                placeholder="انزل خطوة بعد كل وصف:
...
...
...
...">{{old('car_description') ?? $car->car_description}}</textarea>

                                @error('car_description')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="sm:w-1/2">
                                <label class="text-blue-600 block mb-2 mt-4">الموقع</label>
                                <input type="text"
                                    class="rounded border-none shadow w-full text-md max-w-full transition-all ease-linear"
                                    name="car_location"
                                    placeholder="مثال: كوريا"
                                    value="{{old('car_location') ?? $car->car_location}}"
                                    required
                                    >
                                @error('car_location')
                                    <span class="text-red-500 block my-2 text-right" style="direction: ltr">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-blue-600 block mb-4 mt-4 text-2xl">الصور الاخرى</label>
                        @livewire('deleteImage', ['carType' => 'auctions', 'carid' => $car->id])
                        <div class="flex justify-center">                           
                            <div class="flex items-center justify-center  sm:w-1/2 my-4">
                                <label for="dropzone-file" class="flex flex-col items-center transition justify-center w-full p-2  rounded-lg cursor-pointer bg-blue-500 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-blue-700 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center">
                                        <p class="mb-2 text-sm text-white dark:text-gray-400"><span>أضغط لرفع صورة او عدة صور</span>
                                        <p class="text-xs text-white dark:text-gray-400">JPEG, PNG, JPG</p>
                                    </div>
                                    <input type="hidden" class="car-id" value="{{$car->id}}">
                                    <input id="dropzone-file" type="file" name="auction_images[]" multiple accept="image/*" onchange="displayImages(this)" class="hidden image-input" />
                                </label>
                            </div> 
                        </div>
                        @error('car_images.*')
                            <span class="text-red-500 block my-2  text-center" style="direction: ltr">{{$message}}</span>
                        @enderror
                    </div>
                    <input type="submit" value="إرسال" class="bg-blue-500 hover:bg-blue-600 transition rounded text-white border-none shadow-sm w-[200px] cursor-pointer py-2">
                </form>
            </div>
        </div>
@endsection