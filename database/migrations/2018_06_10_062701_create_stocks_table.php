<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('product_given_id');
            $table->integer('buy_quantity')->default(0);
            $table->integer('sale')->default(0);
            $table->integer('stock')->default(0);
            $table->integer('lowest_sale_price')->default(0);
            $table->integer('highest_sale_price');
            $table->integer('total_sale_price')->default(0);

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
        Schema::dropIfExists('stocks');
    }
}
