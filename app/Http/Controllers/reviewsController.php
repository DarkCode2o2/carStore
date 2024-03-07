<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Models\UserOpinion;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;


class reviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = UserOpinion::where('approval', 1)->orderBy('id', 'desc')->with('clients')->get();

        return view('reviews.index')->with('reviews', $reviews);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         
        $request->validate([
            'reviewer_name' => 'required|max:20',
            'reviewer_city' => 'required|min:2',
            'reviewer_content' => 'required|max:200|min:2',
            'rating' => ''
        ]);


        if(!$request->hasCookie('user_token')) {
            $client = clients::create([
                'token' => Str::uuid(),
            ]);
    
            UserOpinion::create([
                'reviewer_name' => request('reviewer_name'),
                'reviewer_city' => request('reviewer_city'),
                'reviewer_content' => request('reviewer_content'),
                'star_ratings' => !empty(request('rating')) ? request('rating') :  5,
                'client_id' => $client->id
            ]);
            // Set a cookie using the cookie helper
            $cookie = cookie('user_token', $client->token, 525600);

            // Attach the cookie to the response
            $response = new Response();
            $response->withCookie($cookie);

            return redirect()->back()->with('success-msg' , 'تم الإرسال بنجاح')->cookie($cookie );

        }else {

            $client = clients::create([
                'token' => request()->cookie('user_token'),
            ]);

    
            UserOpinion::create([
                'reviewer_name' => request('reviewer_name'),
                'reviewer_city' => request('reviewer_city'),
                'reviewer_content' => request('reviewer_content'),
                'star_ratings' => !empty(request('rating')) ? request('rating') :  5,
                'client_id' => $client->id
            ]);

            return redirect()->back()->with('success-msg' , 'تم الإرسال بنجاح، في إنتظار الموافقة من قبل الأدمن ');
        }

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
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update( )
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
    
    }
}
