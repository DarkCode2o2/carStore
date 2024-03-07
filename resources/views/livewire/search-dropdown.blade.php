    <div class="fixed top-1/2 left-1/2 bg-black/70 w-full h-screen -translate-x-1/2 -translate-y-1/2 z-[3000]">

        <i class="fa-solid fa-xmark fixed top-10 right-14 text-3xl text-white cursor-pointer hover:rotate-90 transition-all ease-linear"></i>

        <div class="fixed top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 mx-auto max-w-full md:w-3/4 w-5/6">
            <div role="status" class="absolute left-3  md:top-5 top-2 z-50 " wire:loading>
                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-main-back" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
            </div>
            <input wire:model.live.debounce.500ms="query" type="text" placeholder="ابحث عن طريق اسم السيارة"
            class="
                focus:outline-none 
                focus:ring-2
                focus:ring-main-back
                border-none
                focus:border-2 
                focus:border-main-back
                rounded-md 
                transition-all
                absolute 
                left-0
                w-full
                mx-auto
                shadow-md
                md:px-10
                px-5
                md:py-5
                py-2
                text-xl
                ">
                <i class="fa-solid md:block hidden fa-magnifying-glass absolute right-3 top-5 text-gray-400 text-xl"></i>
            </div>
            @if (!empty($query))
                @if (count($cars) != 0 || count($auctionCars) != 0)
                    <ul class="bg-white shadow-md rounded fixed top-[40%] left-1/2 -translate-x-1/2  mx-auto max-w-full  md:w-3/4 w-5/6 z-50 overflow-auto results-list">
                        @foreach ($cars as $car)
                            <a href="/commercials-cars/{{$car->id}}" class="p-2 border-b-2 border-gray-100 hover:bg-slate-100 flex items-center">
                                <img src="{{asset("uploads/car_logos/$car->car_logo")}}" alt="" class="w-[50px] h-[50px] object-cover rounded-full">
                                <div class="ms-2">
                                    <p class="text-lg">{{$car->car_model}}</p>
                                    <span class="text-gray-500 text-sm font-semibold">{{$car->car_company}}</span>
                                </div>
                            </a>
                        @endforeach
                        @foreach ($auctionCars as $car)
                            <a href="/commercials-auctionCars/{{$car->id}}" class="p-2 border-b-2 border-gray-100 hover:bg-slate-100 flex items-center">
                                <img src="{{asset("uploads/car_logos/$car->car_logo")}}" alt="" class="w-[50px] h-[50px] object-cover rounded-full">
                                <div class="ms-2">
                                    <p class="text-lg">{{$car->car_model}}</p>
                                    <span class="text-gray-500 text-sm font-semibold">{{$car->car_company}} - (سيارة مزاد)</span>
                                </div>
                            </a>
                        @endforeach
                      
                    </ul>
                @else
                    <p class="bg-white shadow-md p-2 rounded fixed top-[45%] left-1/2 -translate-x-1/2 -translate-y-1/2 mx-auto max-w-full  md:w-3/4 w-5/6 z-50 results-list">
                        لا توجد نتائج
                    </p>
                @endif
            @endif
       
    </div>
    