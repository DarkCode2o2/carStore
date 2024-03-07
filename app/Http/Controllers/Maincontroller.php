<?php

namespace App\Http\Controllers;

use App\Models\carImage;
use App\Models\auctionImage;
use App\Models\customAuction;
use App\Models\contactus;
use App\Models\customCar;
use App\Models\UserOpinion;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index() {

        $cars = customCar::limit(8)->orderby('id','DESC')->get();
        $auctions = customAuction::limit(8)->orderby('id','DESC')->get();
        $reviews = UserOpinion::where('approval', 1)->limit(8)->orderby('id','DESC')->get();

        return view('frontend.index', compact('cars', 'auctions', 'reviews'));
    }

    public function about() {
        return view('frontend.about');
    }

    public function purchase() {
        return view('frontend.purchase');
    }

    public function contact() {
        return view('frontend.contact');
    }

    public function partners() {
        return view('frontend.partners');
    }

    public function userMsg(Request $request) {

        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'email|required',
            'phone' => '',
            'description' => 'max:200|required',
        ]);

        contactus::create([
            'fname' => request('first-name'),
            'lname' => request('last-name'),
            'email' => request('email'),
            'number' => request('phone'),
            'description' => request('description'),
        ]);

        return redirect()->back()->with('success-msg' , 'تم الإرسال بنجاح');

    }

    // Cars Frontend

    public function allcars() {
        $cars = customCar::orderby('id','DESC')->get();
        
        return view('frontend.cars', compact('cars'));
    }

    public function showCar($id) {

        $car = customCar::findOrFail($id);
        $images = carImage::where('car_id', $id)->get();
        
        return view('frontend.showCar', compact('car', 'images'));
    }

     // Auction Cars Frontend

    public function allauctionCars() {
        $auctionCars = customAuction::orderby('id','DESC')->get();
        
        return view('frontend.auctions', compact('auctionCars'));
    }

    public function showauctionCar($id) {

        $auctionCar = customAuction::findOrFail($id);
        $images = auctionImage::where('car_id', $id)->get();
        
        return view('frontend.showAuction', compact('auctionCar', 'images'));
    }

   

}
