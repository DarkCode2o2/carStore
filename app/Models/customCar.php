<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customCar extends Model
{

    protected $guarded = [];
    use HasFactory;

    public function carImage() {
        return $this->hasMany(carImage::class, 'car_id');
    }

}
