<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Seed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (Auth::user()->getRole() == 'client') {
                return redirect()->route('home.index');
            }

            return $next($request);
        });
    }

    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        $data = [];
        $data['title'] = __('admin.create');

        return view('admin.create')->with('data', $data);
    }

    public function save(Request $request)
    {
        Seed::validateForm($request);

        $image = $request->file('image');
        if ($request->hasFile('image')) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path().'/img/', $imageName);
        }

        $seed = new Seed();
        $seed->setName($request->input('name'));
        $seed->setSeller($request->input('seller'));
        $seed->setPrice($request->input('price'));
        $seed->setKeywords($request->input('keywords'));
        $seed->setCategories($request->input('categories'));
        $seed->setStock($request->input('stock'));
        $seed->setImage($imageName);
        $seed->save();

        return back()->with('success', 'Successfuly created!');
    }

    public function delete($id)
    {
        Seed::findOrFail($id)->delete();

        return redirect()->route('admin.list');
    }

    public function listAll()
    {
        $data = [];
        $data['title'] = __('admin.create');
        $data['seeds'] = Seed::all()->sortBy('id');

        return view('admin.list')->with('data', $data);
    }

    public function show($id)
    {
        $data = []; //What will be sent to the view
        $seed = Seed::findOrFail($id);
        $data['seed'] = $seed;
        $data['title'] = __('admin.list');

        return view('admin.show')->with('data', $data);
    }

    public function download()
    {
        $data = [];
        $data['title'] = __('admin.listProviders');
        $products = Seed::all();
        $data['products'] = $products;

        return view('admin.download')->with('data', $data);
    }

    public function order()
    {
        $data = [];
        $data['title'] = __('admin.orderList');
        $orders = Order::all();
        $data['orders'] = $orders;

        return view('admin.order')->with('data', $data);
    }
}
