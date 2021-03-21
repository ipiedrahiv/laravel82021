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

        return view('seed.show')->with("data",$data);

    }

    public function listAll(){
        $data = [];
        $data['title'] = "Created seeds";
        $data['seeds'] = Seed::all()->sortBy("id");

        return view('seed.list')->with("data",$data);

    }

    public function create(){
        $data = [];
        $data['title'] = "Create seed";

        return view('seed.create')->with("data",$data);
        
    }

    public function save(Request $request){
        Seed::validateForm($request);

        Seed::create($request->all());

        return back()->with('success','Successfuly created!');

    }

    public function delete($id){
        Seed::findOrFail($id)->delete();

        return redirect()->route('seed.list');

    }

}

?>
