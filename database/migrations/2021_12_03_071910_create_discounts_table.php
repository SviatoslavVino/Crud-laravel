<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id('discount_id');
            $table->integer('discount_size');
            $table->set('discount_size_type',['%','currency']);
            $table->dateTimeTz('discount_date_start');
            $table->dateTimeTz('discount_date_end');
            $table->unsignedBigInteger('discount_product_id');
            $table->foreign('discount_product_id')->references('products_id')->on('products');
            $table->unsignedBigInteger('discount_categories_id');
            $table->foreign('discount_categories_id')->references('categories_id')->on('categories');
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
        Schema::dropIfExists('discounts');
    }
}
