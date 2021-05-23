<?php

// Isabel Piedrahita

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeedsTable extends Migration
{
    public function up()
    {
        Schema::create('seeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('seller');
            $table->text('price');
            $table->text('stock')->default('0');
            $table->text('keywords');
            $table->text('categories');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seeds');
    }
}
