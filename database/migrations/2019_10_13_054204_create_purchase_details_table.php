<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            //fk
            $table->bigInteger('purchase_id')->unsigned()->default(1);
            $table->foreign('purchase_id')
                ->references('id')
                ->on('purchases')
                ->onDelete('cascade');
            //fk
            $table->bigInteger('product_id')->unsigned()->default(1);
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
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
            $table->integer('price_all');
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
        Schema::dropIfExists('purchase_details');
    }
}