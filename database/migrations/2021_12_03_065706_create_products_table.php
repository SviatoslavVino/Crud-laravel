<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('products_id');
            $table->string('product_title')->index('index_product_title');
            $table->text('product_description');
            $table->float('product_price')->index('index_product_price');
            $table->integer('product_amount');
            $table->unsignedBigInteger('product_categories_id');
            $table->foreign('product_categories_id')->references('categories_id')->on('categories');
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
}
