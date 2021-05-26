<?php

// Isabel Piedrahita

// Isabel Piedrahita

// Isabel Piedrahita

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Review extends Model
{
    //Attributes: id, rating, comment, image, created_at, updated_at, user_id, seed_id
    protected $fillable = ['rating', 'comment', 'image', 'user_id', 'seed_id'];

    public static function validateForm(Request $request)
    {
        $request->validate([
            'rating'=>'required',
            'comment'=>'required',
            'user_id'=>'required',
            'seed_id'=>'required',
            'image'=>'required',
        ]);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getRating()
    {
        return $this->attributes['rating'];
    }

    public function setRating($rating)
    {
        $this->attributes['rating'] = $rating;
    }

    public function getComment()
    {
        return $this->attributes['comment'];
    }

    public function setComment($comment)
    {
        $this->attributes['comment'] = $comment;
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($user_id)
    {
        $this->attributes['user_id'] = $user_id;
    }

    public function seed()
    {
        return $this->belongsTo(Seed::class);
    }

    public function getSeedId()
    {
        return $this->attributes['seed_id'];
    }

    public function setSeedId($seed_id)
    {
        $this->attributes['seed_id'] = $seed_id;
    }
}
