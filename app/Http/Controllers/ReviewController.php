<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create()
    {
        $data = [];
        $data['title'] = 'Write comment';

        return view('seed.show')->with('data', $data);
    }

    public function save(Request $request)
    {
        Review::validateForm($request);

        $image = $request->file('image');
        if ($request->hasFile('image')) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path().'/img/', $imageName);
        }

        $review = new Review();
        $review->setRating($request->input('rating'));
        $review->setComment($request->input('comment'));
        $review->setUserId($request->input('user_id'));
        $review->setSeedId($request->input('seed_id'));
        $review->setImage($imageName);

        $review->save();

        return back()->with('success', 'Successfuly uploaded!');
    }
}
