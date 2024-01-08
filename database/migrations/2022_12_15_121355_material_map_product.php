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
        Schema::create('MaterialMapProduct', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('material_id');
            $table->string('material_purity_id');
            $table->string('material_wt');
            $table->string('material_type_id');
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
        //
    }
};
