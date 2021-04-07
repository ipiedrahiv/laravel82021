<?php
// Santiago Santacruz

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration{
    
    public function up(){
        Schema::create('items', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('seeds');
            $table->bigInteger('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('items');
    }
}
