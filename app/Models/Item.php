<?php
// Santiago Santacruz

// Santiago Santacruz

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //attributes id, subtotal, quantity, created_at, updated_at, product_id, order_id,
    protected $fillable = ['subtotal', 'quantity', 'product_id', 'order_id'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }

    public function getSubTotal()
    {
        return $this->attributes['subtotal'];
    }

    public function setSubTotal($subtotal)
    {
        $this->attributes['subtotal'] = $subtotal;
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getOrderId()
    {
        return $this->attributes['order_id'];
    }

    public function setOrderId($order_id)
    {
        $this->attributes['order_id'] = $order_id;
    }

    public function product()
    {
        return $this->belongsTo(Seed::class);
    }

    public function getProductId()
    {
        return $this->attributes['product_id'];
    }

    public function setProductId($product_id)
    {
        $this->attributes['product_id'] = $product_id;
    }
}
