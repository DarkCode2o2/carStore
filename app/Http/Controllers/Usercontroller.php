<?php

namespace App\Http\Controllers;

use App\Models\customAuction;
use App\Models\contactus;
use App\Models\customCar;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function users() {
        $usersMsg = contactus::all();
        $carsCount = customCar::all()->count();
        $auctionsCount = customAuction::all()->count();

        return view('dashboard', [
            'carsCount' => $carsCount,
            'auctionsCount' => $auctionsCount,
            'users' => $usersMsg,
        ]);
    }

    public function deleteUser($id) {
        contactus::findOrFail($id)->delete();

        return redirect('dashboard')->with('success-msg', 'تم الحذف بنجاح.');
    }
}
