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
        <a href="/manageAuction/create" class="bg-blue-600 hover:bg-blue-700 transition text-white py-2 px-4 rounded-lg fixed bottom-10 right-10 shadow-blue-300 shadow-lg z-50
        ">إنشاء عرض جديد <i class="fa-solid fa-pencil relative -bottom-0.5"></i> </a>
        @if (count($cars) != 0)
            <div class="pb-80">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-20 w-11/12 mx-auto">
                <table class="w-full text-sm text-left rtl:text-right text-blue-600 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr class=" border-gray-200 border-2">
                            <th scope="col" class="px-6 py-3">
                                الصورة الرئيسية
                            </th>
                            <th scope="col" class="px-6 py-3">
                                الشركة
                            </th>
                            <th scope="col" class="px-6 py-3">
                                الموديل
                            </th>
                            <th scope="col" class="px-6 py-3">
                                سنة التصنيع
                            </th>
                            <th scope="col" class="px-6 py-3">
                                السعر
                            </th>
                            <th scope="col" class="px-6 py-3">
                                الوصف
                            </th>
                            <th scope="col" class="px-6 py-3">
                                التكاليف
                            </th>
                            <th scope="col" class="px-6 py-3">
                                العداد
                            </th>
                            <th scope="col" class="px-6 py-3">
                                موقع السيارة
                            </th>
                            <th scope="col" class="px-6 py-3">
                                نوع الوقود
                            </th>
                            <th scope="col" class="px-6 py-3">
                                الحالة
                            </th>
    
                            <th scope="col" class="px-6 py-3">
                            </th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach ($cars as $car)
                            <tr class="bg-white border-b  hover:bg-gray-50">
                                <th scope="row" class="pr-4 ps-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{asset("uploads/car_logos/$car->car_logo")}}" alt="" class=" rounded-full w-[60px] h-[60px] max-w-full object-cover">
                                </th>
                                <td class="px-4 ">
                                    {{$car->car_company}}
                                </td>
                                <td class="px-4">
                                    {{$car->car_model}}
                                </td>
                                <td class="px-4">
                                    {{$car->car_created}}
                                </td>
                                <td class="px-4">
                                    {{$car->car_price}}
                                </th>
                                <td class="px-4 table-desc" data-content="{{ $car->car_description}}">
                                    
                                </td>
                                <td class="px-4">
                                    {{$car->car_costs}}
                                </td>
                                <td class="px-4">
                                    {{$car->car_odometer}}
                                </td>
                                <td class="px-4 text-right">
                                    {{$car->car_location}}
                                </td>
                                <td class="px-4 text-right">
                                    {{$car->car_fuel ? "ديزل" : "بنزين"}}
                                </td>
                                <td class="px-4 text-right">
                                    @livewire('updateColumn', ['data' => $car->id, 'status' => $car->car_status, 'part' => 'auctionCar'])                                    
                                </td>
                                <td class="px-4 text-right delete-td flex justify-cente items-center gap-2 h-[120px]">
                                    
                                    <a href="/manageAuction/{{$car->id}}/edit" class="text-xl font-medium text-blue-500 hover:text-blue-800 transition underline"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="/manageAuction/{{$car->id}}" method="POST" class="delete-form" onsubmit="return confirmDelete()">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-xl font-medium text-red-500 hover:text-red-800 transition  hover:underline">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @else
            <div class="w-full h-[90vh] flex pt-10 items-center flex-col bg-white">
    
                <img src="{{asset('images/no-offer.jpg')}}" alt="" class="max-w-full w-[500px]">
                <h3 class="text-blue-400 sm:text-2xl mt-2 max-w-full bg-blue-100 py-2 px-4 rounded-md shadow">ليس هنالك بيانات لعرضها</h3>
            </div>
        @endif
@endsection