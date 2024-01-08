<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('product_name');
            $table->string('ring_size')->nullable();
            $table->string('gender')->nullable();
            $table->string('metal')->nullable();
    
      
            $table->string('d_quality')->nullable();
            $table->string('col_stone_shape')->nullable();
            $table->string('col_stone_quality')->nullable();
            $table->string('col_stone_shape')->nullable();
            $table->string('sh_description')->nullable();
            $table->string('lo_description')->nullable();
            $table->string('status')->nullable();
            $table->string('price');
            $table->string('image');
            $table->string('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
