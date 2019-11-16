<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->default(1);
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


            $table->bigInteger('product_amount_id')->unsigned()->default(1);
            $table->foreign('product_amount_id')
                ->references('id')
                ->on('product_amounts')
                ->onDelete('cascade');

            $table->bigInteger('product_price_id')->unsigned()->default(1);
            $table->foreign('product_price_id')
                ->references('id')
                ->on('product_prices')
                ->onDelete('cascade');

            $table->integer('amount');
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
        Schema::dropIfExists('carts');
    }
}