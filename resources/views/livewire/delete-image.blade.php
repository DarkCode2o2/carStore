<div class="w-full bg-white min-h-[250px] grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 p-2 overflow-hidden relative border-2 border-dashed border-blue-500 rounded-md shadow-sm preview-images">
    @if (isset($carImages) && count($carImages) != 0 && $carType == 'cars')
        @foreach ($carImages as $image)
            <div class="relative" id="preview-images">
                <img src="{{asset("/uploads/car_images/$image->image_path")}}" class="rounded max-w-100 shadow car-images h-[300px] w-[400px]" alt="">
                <div class="bg-slate-800 absolute top-3 right-3 rounded-full w-[30px] h-[30px]">
                    <i class="fa-solid fa-circle-xmark text-gray-200 relative -top-[3px] hover:text-gray-300 transition cursor-pointer text-3xl" wire:click="deleteImage({{$image->id}})"></i>
                </div>
            </div>
        @endforeach
    @elseif(isset($carImages) && count($carImages) != 0 && $carType == 'auctions')
        @foreach ($carImages as $image)
            <div class="relative" id="preview-images">
                <img src="{{asset("/uploads/auction_images/$image->image_path")}}" class="rounded max-w-100 shadow car-images h-[300px] w-[400px]" alt="">
                <div class="bg-slate-800 absolute top-3 right-3 rounded-full w-[30px] h-[30px]">
                    <i class="fa-solid fa-circle-xmark text-gray-200 relative -top-[3px] hover:text-gray-300 transition cursor-pointer text-3xl" wire:click="deleteImage({{$image->id}})"></i>
                </div>
            </div>
        @endforeach
    @else
        <h1 class="absolute text-2xl top-1/2 text-blue-600 text-center w-full -translate-y-1/2">يرجى أضافة صور بنفس الحجم</h1>
    @endif


</div>
