<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SeedResource;
use App\Models\Seed;

class SeedApi extends Controller
{
    public function index()
    {
        return SeedResource::collection(Seed::all());
    }

    public function show($id)
    {
        return new SeedResource(Seed::findOrFail($id));
    }
}
