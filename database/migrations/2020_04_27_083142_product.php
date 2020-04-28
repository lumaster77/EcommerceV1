<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Product', function (Blueprint $table) {
          
            $table->id();
            $table->string('code', 50);
            $table->string('name', 100);
            $table->double('cost', 8, 2);
            $table->integer('categoryId');
            $table->integer('stock');
            $table->timestamps();
            //$table->foreign('categoryId')->references('id')->on('Category');
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
        Schema::dropIfExists('Product');
    }
}
