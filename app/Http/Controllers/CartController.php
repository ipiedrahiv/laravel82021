<?php

namespace App\Http\Controllers;

use App\Models\Seed;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Http\Request;


class CartController extends Controller{
    
    public function shop(Request $request){
        $data = []; //to be sent to the view
        $data["title"] = "Store seeds";

        $listProductsInCart = array();
        $total = 0;
        $ids = $request->session()->get("seeds"); 

        if($ids){
            $listProductsInCart = Seed::findMany(array_keys($ids));
            foreach ($listProductsInCart as $product) {
                $total = $total + $product->getPrice() * $ids[$product->getId()];
                $product->quantity = $ids[$product->getId()];

            }

        }

        $data["total"] = $total;
        $data["seeds"] = $listProductsInCart;

        return view('cart.shop')->with("data",$data);

    }

    public function add($id, Request $request){
        $quantity = $request->get('quantity');
        $seeds = $request->session()->get("seeds");
        $seeds[$id] = $quantity;
        $request->session()->put('seeds', $seeds);

        return back();

    }

    public function removeAll(Request $request){
        $request->session()->forget('seeds');

        return back();

    }

    public function buy(Request $request){
        $data = []; //to be sent to the view
        $data["title"] = "Buy";

        $order = new Order();
        $order->setTotal(0);
        $order->save();
        
        $total = 0;
        $ids = $request->session()->get("seeds"); 
        
        if($ids){
            $listProductsInCart = Seed::findMany(array_keys($ids));
            foreach ($listProductsInCart as $product) {
                $item = new Item();
                $item->setQuantity($ids[$product->getId()]);
                $item->setSubTotal($product->getPrice());
                $item->setProductId($product->getId());
                $item->setOrderId($order->getId());
                $item->save();
                $total = $total + $product->getPrice();
                
            }
        }

        $order->setTotal($total);
        $order->save();

        return view('cart.buy')->with("data",$data);

    }
}
