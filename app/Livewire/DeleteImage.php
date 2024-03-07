<?php

namespace App\Livewire;

use App\Models\auctionImage;
use App\Models\carImage;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class DeleteImage extends Component
{
    
    public $carType;
    public $carid;
    
    public function carImages() {
        if($this->carType == 'cars') {
            return carImage::where('car_id', $this->carid)->get();
        }else {
            return auctionImage::where('car_id', $this->carid)->get();
        }
    }
    
    public function deleteImage($id) {

        if($this->carType == 'cars') {
            $car = carImage::where('id', $id)->get()->first();
            $car->delete();
            File::delete(public_path('uploads/car_images/' . $car->image_path));

        }else {
            $car = auctionImage::where('id', $id)->get()->first();
            $car->delete();
            File::delete(public_path('uploads/auction_images/' . $car->image_path));

        }

        return $this->carImages();
    }
    
    public function render()
    {
        return view('livewire.delete-image', ['carImages' => $this->carImages()], ['carType' => $this->carType]);
    }
}
