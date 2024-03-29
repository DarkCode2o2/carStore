<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carImage extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function customCar() {
        return $this->belongsTo(customCar::class, 'car_id');
    }
}
