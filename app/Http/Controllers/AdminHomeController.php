<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Seed;

class AdminHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if(Auth::user()->getRole()=="client"){
                return redirect()->route('home.index');
            }

            return $next($request);
        });
    }

    public function index()
    {
        return view('admin.index');
    }

    public function create(){
        $data = [];
        $data['title'] = "Create seed";

        return view('admin.create')->with("data",$data);

    }

    public function save(Request $request){
        Seed::validateForm($request);

        Seed::create($request->all());

        return back()->with('success','Successfuly created!');

    }

    public function delete($id){
        Seed::findOrFail($id)->delete();

        return redirect()->route('admin.list');

    }

    public function listAll(){
        $data = [];
        $data['title'] = "Created seeds";
        $data['seeds'] = Seed::all()->sortBy("id");

        return view('admin.list')->with("data",$data);

    }

    public function show($id){
        $data = []; //What will be sent to the view
        $seed = Seed::findOrFail($id);
        $data["seed"] = $seed;
        $data["title"] = "Lista";

        return view('admin.show')->with("data",$data);

    }

}
