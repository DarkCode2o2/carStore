<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{   
    protected $fillable = ['fname', 'lname', 'email', 'number', 'description'];
    use HasFactory;
}
