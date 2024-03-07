<?php

namespace App\Livewire;

use App\Models\customAuction;
use App\Models\customCar;
use Livewire\Component;

class SearchDropdown extends Component
{

    public $query;
    public $cars;
    public $auctionCars;

    public function updatedQuery() {
        $this->cars = customCar::where('car_model', 'like', '%'. $this->query . '%')
            ->get();

        $this->auctionCars = customAuction::where('car_model', 'like', '%'. $this->query . '%')
            ->get();
    }
    
    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
