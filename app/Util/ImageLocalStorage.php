<?php

namespace App\Util;

use App\Interfaces\ImageStorage;
use Illuminate\Support\Facades\Storage;

class ImageLocalStorage implements ImageStorage
{
    public function store($request)
    {
        $image = $request->file('image');
        if ($request->hasFile('image')) {
            $imageName = $image->getClientOriginalName();
            Storage::disk('public')
            ->put($imageName, file_get_contents($request->file('image')
            ->getRealPath()));
        }
    }
}
