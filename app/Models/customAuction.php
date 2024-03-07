<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customAuction extends Model
{
    
    protected $guarded = [];
    use HasFactory;

    public function auctionImage() {
        return $this->hasMany(auctionImage::class, 'car_id');
    }

}
