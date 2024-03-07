<?php

namespace App\Http\Controllers;

use App\Models\auctionImage;
use App\Models\customAuction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class auctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = customAuction::orderby('id', 'DESC')->get();
        $type = 'car';
        return view('manageAuction.index', compact('cars', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manageAuction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'car_company' => 'required|max:255',
            'car_model' => 'required|max:255',
            'car_created' => 'required',
            'car_location' => 'required',
            'car_price' => 'required',
            'car_costs' => 'required',
            'car_odometer' => 'required',
            'car_status' => '',
            'car_fuel' => '',
            'car_description' => 'required',
            'car_logo' => 'required|mimes:jpeg,png,jpg,gif',
            'car_images.*' => 'required|mimes:jpeg,png,jpg,gif'
        ]);
        
        $name = $request->car_logo->getClientOriginalName();
        $size = $request->car_logo->getSize();
        
        $image_path = uniqid($size) . strtolower(str_replace(' ', '_', $name));
        $image = Image::make($request->car_logo);
        $image->save(public_path('uploads/car_logos/' . $image_path), 40, 'webp');
                
        
        $car = customAuction::create([
            'car_company' => request('car_company'),
            'car_model' => request('car_model'),
            'car_created' => request('car_created'),
            'car_location' => request('car_location'),
            'car_price' => request('car_price'),
            'car_costs' => request('car_costs'),
            'car_odometer' => request('car_odometer'),
            'car_status' => request('car_status') ?? '1',
            'car_fuel' => request('car_fuel'),
            'car_description' => request('car_description'),
            'car_logo' => $image_path
        ]);

        // Insert Images

        if($request->hasfile('auction_images')) {
            
           $images = $request->auction_images;

            foreach($images as $image) {
                $name = $image->getClientOriginalName();
                $size = $image->getSize();

                $image_file_path = uniqid($size) . strtolower(str_replace(' ', '_', $name));
                
                $compressedImage = Image::make($image);
                $compressedImage->save(public_path('uploads/auction_images/' . $image_file_path), 40);
                
                auctionImage::create([
                    'image_path' => $image_file_path,
                    'car_id' => $car->id,
                ]);
            }
        }
        
        return redirect()->back()->with('success-msg', 'تم الإضافة بنجاح.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = customAuction::findOrFail($id);
        return view('manageAuction.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->hasfile('auction_images')) { 
            $auction_images = 'required|mimes:jpeg,png,jpg|max:2048';

        }else {
            $auction_images = '';
        }

        $request->validate([
            'car_company' => 'required|max:255',
            'car_model' => 'required|max:255',
            'car_created' => 'required',
            'car_location' => 'required',
            'car_price' => 'required',
            'car_costs' => 'required',
            'car_odometer' => 'required',
            'car_status' => '',
            'car_fuel' => '',
            'car_description' => 'required',
            'car_logo' => '',
            'auction_images.*' =>  $auction_images,
        ]);

        if($request->has('car_logo'))  {
            $name = $request->car_logo->getClientOriginalName();
            $size = $request->car_logo->getSize();
            
            $image_path = uniqid($size) . strtolower(str_replace(' ', '_', $name));

            $image = Image::make($request->car_logo);
            $image->save(public_path('uploads/car_logos/' . $image_path), 40);
                              
        }

        customAuction::where('id', $id)->update([
            'car_company' => request('car_company'),
            'car_model' => request('car_model'),
            'car_created' => request('car_created'),
            'car_location' => request('car_location'),
            'car_price' => request('car_price'),
            'car_costs' => request('car_costs'),
            'car_odometer' => request('car_odometer'),
            'car_status' => request('car_status') ?? '1',
            'car_fuel' => request('car_fuel'),
            'car_description' => request('car_description'),
            'car_logo' => $image_path ?? customAuction::findOrFail($id)->car_logo
        ]);

        // Insert Images

        if($request->hasfile('auction_images')) {
           $images = $request->auction_images;

            foreach($images as $image) {
                $name = $image->getClientOriginalName();
                $size = $image->getSize();
                $image_file_path = uniqid($size) . strtolower(str_replace(' ', '_', $name));
                $compressedImage = Image::make($image);
                $compressedImage->save(public_path('uploads/auction_images/' . $image_file_path), 40);
                
                auctionImage::create([
                    'image_path' => $image_file_path,
                    'car_id' => $id,
                ]);
            }
        }

        
        return redirect()->back()->with('success-msg', 'تم التحديث بنجاح.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $carId)
    {

        // Get related records in the auction_images table
        $images =  auctionImage::where('car_id', $carId)->get();

        if($images->isNotEmpty()) {
            foreach($images as $image) {
                File::delete(public_path('uploads/auction_images/'. $image->image_path));
                $image->delete();
            }
        }

        // Delete the car record
        customAuction::destroy($carId);
        
        return redirect('manageAuction')->with('success-msg', 'تم الحذف بنجاح.');
    }
}
