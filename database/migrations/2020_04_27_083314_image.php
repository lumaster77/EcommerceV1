<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Image extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Image', function (Blueprint $table) {
          
            $table->id();
            $table->string('img');
            $table->bigInteger('productId');
            $table->boolean('prioridad');
            $table->timestamps();
           // $table->foreignId('productId')->references('id')->on('Product');
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
        Schema::dropIfExists('image');
    }
}
