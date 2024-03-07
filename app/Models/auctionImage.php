<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auctionImage extends Model
{

    protected $guarded = [];
    use HasFactory;


    public function customAuction() {
        return $this->belongsTo(customAuction::class, 'car_id');
    }

}
