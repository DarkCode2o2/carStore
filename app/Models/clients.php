<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function UserOpinion() {
        return $this->hasMany(UserOpinion::class, 'client_id');
    }
}
