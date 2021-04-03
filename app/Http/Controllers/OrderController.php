<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Item;
use App\Models\Seed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PDF;


class OrderController extends Controller{

    public function show($id){
        $data = []; //What will be sent to the view
        $order = Order::with('items')->find($id);
        $data["order"] = $order;
        $data["title"] = "Lista";
        
        return view('order.show')->with("data",$data);

    }

    public function listAll(){
        $id = Auth::user()->getId();
        $data = [];
        $data['title'] = "Created orders";
        $data['orders'] = Order::where('user_id',$id)->get();

        return view('order.index')->with("data",$data);

    }

    public function download($id){
        $data = [];
        $data['title'] = 'Factura';
        $order = Order::with('items')->find($id);
        $data['order'] = $order;
        
        return view('order.download')->with("data",$data);
    
    }

    public function excel(){
        $id = Auth::user()->getId();
        $data = [];
        $data['title'] = 'Factura';
        $orders = Order::where('user_id',$id)->with('items')->get();
        $products = Seed::All();
        $data['orders'] = $orders;
        $data["products"] = $products;

        return view('order.excel')->with("data",$data);
        
    }


}

?>