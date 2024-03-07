<?php

namespace App\Livewire;

use App\Models\customAuction;
use App\Models\customCar;
use Livewire\Component;

class UpdateColumn extends Component
{

  //  public $data;
    public $data;
    public $status;
    public $part;


    public function updateColumn($id)
    {

        if($this->part == 'car')  {
            $car = CustomCar::findOrFail($id);
            if ($car) {
                if ($car->car_status == 1) {
                    $car->car_status = 0;
                } else {
                    $car->car_status = 1;
                }
                $car->save();
                $this->status = $car->car_status;
            }
        }elseif($this->part == 'auctionCar') {
            $car = customAuction::findOrFail($id);
            if ($car) {
                if ($car->car_status == 1) {
                    $car->car_status = 0;
                } else {
                    $car->car_status = 1;
                }
                $car->save();
                $this->status = $car->car_status;
            }
        }
        
    }
    

}
