<?php
// Isabel Piedrahita

// Isabel Piedrahita

namespace App\Http\Controllers;

use App\Models\Seed;
use Illuminate\Http\Request;

class SeedController extends Controller
{
    public function show($id)
    {
        $data = []; //What will be sent to the view
        $seed = Seed::findOrFail($id);
        $data['seed'] = $seed;
        $data['title'] = __('seed.list');
        $data['quantity'] = 0;

        return view('seed.show')->with('data', $data);
    }

    public function listAll()
    {
        $data = [];
        $data['title'] = __('seed.created');
        $data['seeds'] = Seed::all()->sortBy('id');
        $data['fromSearch'] = 'False';

        return view('seed.list')->with('data', $data);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('query');

        $data = [];
        $data['title'] = __('seed.foundItem');
        $data['seeds'] = Seed::query()
                            ->where('name', 'LIKE', "%{$searchTerm}%")
                            ->orWhere('seller', 'LIKE', "%{$searchTerm}%")
                            ->orWhere('price', 'LIKE', "%{$searchTerm}%")
                            ->orWhere('categories', 'LIKE', "%{$searchTerm}%")
                            ->orWhere('keywords', 'LIKE', "%{$searchTerm}%")->get();
        $data['fromSearch'] = 'True';

        return view('seed.list')->with('data', $data);
    }
}
