<?php

namespace App\Http\Controllers;
use App\Models\Seed;
use Illuminate\Http\Request;

class SeedController extends Controller{

    public function show($id){
        $data = []; //What will be sent to the view
        $seed = Seed::findOrFail($id);
        $data["seed"] = $seed;
        $data["title"] = "Lista";
        $data["quantity"] = 0;
        
        return view('seed.show')->with("data",$data);

    }

    public function listAll(){
        $data = [];
        $data['title'] = "Created seeds";
        $data['seeds'] = Seed::all()->sortBy("id");

        return view('seed.list')->with("data",$data);

    }

}

?>
