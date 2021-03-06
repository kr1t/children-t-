<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageListRentProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_list_rent_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            //fk
            $table->bigInteger('package_list_id')->unsigned()->default(1);
            $table->foreign('package_list_id')
                ->references('id')
                ->on('package_lists')
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
                
            $table->integer('amount');
            $table->timestamp('swapped_at')->nullable();
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
        Schema::dropIfExists('package_list_rent_products');
    }
}