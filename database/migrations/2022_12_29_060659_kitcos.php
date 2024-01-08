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
        Schema::create('kitcos', function (Blueprint $table) {
            $table->id();
            $table->string('metal_type');
            $table->integer('gram');
            $table->decimal('rate',8,2);
            $table->decimal('kt10',10,0);
            $table->decimal('kt14',10,0);
            $table->decimal('kt18',10,0);
            $table->decimal('kt22',10,0);
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
