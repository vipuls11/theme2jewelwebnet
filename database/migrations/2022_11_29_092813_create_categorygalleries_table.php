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
        Schema::create('categorygalleries', function (Blueprint $table) {
            $table->id();
            $table->string('left_image');
            $table->string('right_image');
            $table->string('bottom_right_image');
            $table->string('bottom_left_image');
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
        Schema::dropIfExists('categorygalleries');
    }
};
