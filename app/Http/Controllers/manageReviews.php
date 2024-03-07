<?php

namespace App\Http\Controllers;

use App\Models\UserOpinion;
use Illuminate\Http\Request;

class manageReviews extends Controller
{
    public function index() {
        $sort = 'desc';

        if(request()->has('sort')) {
            $sort = request('sort');
        }

        if(request()->has('type')) {

            $reviews = UserOpinion::where('approval', 0)->orderBy('id',$sort)->get();

            return view('manageReviews.index', compact('reviews', 'sort'));
        }else {
            $reviews = UserOpinion::orderBy('id', $sort)->get();
            return view('manageReviews.index', compact('reviews', 'sort'));
        }       
    }

    public function update($id) {
        UserOpinion::findorfail($id)->update(['approval' => 1]);

        return redirect()->back()->with('success-msg', 'تم الموافقة عليه.');
    }

    public function destroy($id) {
        UserOpinion::findorfail($id)->delete();

        return redirect()->back()->with('success-msg', 'تم الحذف بنجاح.');
    }
}
