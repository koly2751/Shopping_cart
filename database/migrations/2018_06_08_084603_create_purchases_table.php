<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('product_given_id')->unique();
            $table->string('product_description')->nullable();
            $table->string('unit')->nullable();
            $table->integer('buy_quantity');
            $table->string('account_id');
            $table->integer('buy_price');
            $table->integer('total_buy_price');
            $table->integer('highest_sale_price');
            $table->integer('lowest_sale_price');
            $table->string('date');
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
        Schema::dropIfExists('purchases');
    }
}
