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
        Schema::create('products_tb', function (Blueprint $table) {
            $table->id()->startingValue(100);
            $table->foreign('id')->references('id')->on('testing_tb');
            $table->string('product_name', 50);
            $table->string('category',50);
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
        Schema::dropIfExists('products_tb');
    }
};
