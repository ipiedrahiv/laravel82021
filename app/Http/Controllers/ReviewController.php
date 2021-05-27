<?php

// Isabel Piedrahita

// Isabel Piedrahita

// Isabel Piedrahita

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Interfaces\ImageStorage;

class ReviewController extends Controller
{
    public function create()
    {
        $data = [];
        $data['title'] = __('seed.write');

        return view('seed.show')->with('data', $data);
    }

    public function save(Request $request)
    {
        Review::validateForm($request);

        $storeInterface = app(ImageStorage::class);
        $storeInterface->store($request);

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $review = new Review();
        $review->setRating($request->input('rating'));
        $review->setComment($request->input('comment'));
        $review->setUserId($request->input('user_id'));
        $review->setSeedId($request->input('seed_id'));
        $review->setImage($imageName);

        $review->save();

        return back()->with('success', __('messages.success'));
    }
}
