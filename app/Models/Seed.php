<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Seed extends Model{

    use HasFactory;

    //Attributes: name, seller, price, keywords, categories, createdAt, updatedAt
    protected $fillable = ['name', 'seller', 'price', 'keywords', 'categories'];

    public static function validateForm(Request $request){
        $request->validate([
            "name"=>"required",
            "seller"=>"required",
            "price"=>"required|numeric|gt:0",
            "categories"=>"required",
            "keywords"=>"required",
        ]);
    }

    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function getName(){
        return $this->attributes['name'];
    }

    public function setName($name){
        $this->attributes['name'] = $name;
    }

    public function getSeller(){
        return $this->attributes['seller'];
    }

    public function setSeller($seller){
        $this->attributes['seller'] = $seller;
    }

    public function getPrice(){
        return $this->attributes['price'];
    }

    public function setPrice($price){
        $this->attributes['price'] = $price;
    }

    public function getKeywords(){
        return $this->attributes['keywords'];
    }

    public function setKeywords($keywords){
        $this->attributes['keywords'] = $keywords;
    }

    public function getCategories(){
        return $this->attributes['categories'];
    }

    public function setCategories($categories){
        $this->attributes['categories'] = $categories;
    }
    
    public function items(){
        return $this->hasMany(Item::class);
    }

}

?>
