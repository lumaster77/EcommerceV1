<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ProductDetail', function (Blueprint $table) {
          
            $table->bigInteger('productId');
            $table->Integer('numberOfPieces');
            $table->string('measurements', 100);
            $table->string('weigth', 100);
            $table->string('material', 100);
            $table->string('colour', 100);
            $table->string('surfaceFinish', 100);
            $table->string('description', 100);
            $table->timestamps();
            //$table->foreignId('productId')->references('id')->on('Product');
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
        Schema::dropIfExists('ProductDetail');
    }
}
