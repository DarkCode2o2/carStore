<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOpinion extends Model
{
    protected $guarded = [];
    use HasFactory;


    public function clients() {
        return $this->belongsTo(clients::class,'client_id');
    }
    
}
