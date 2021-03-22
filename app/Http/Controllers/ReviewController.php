<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller{

    public function create(){
        $data = [];
        $data['title'] = "Write comment";

        return view('seed.show')->with("data",$data);

    }

    public function save(Request $request){
        Review::validateForm($request);

        Review::create($request->all());

        return back()->with('success','Successfuly uploaded!');

    }

}
