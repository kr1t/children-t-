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
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('img_url');
            $table->float('from_age', 10, 2);
            $table->float('to_age', 10, 2);
            $table->integer('deposit');
            $table->string('youtube_url');

            $table->bigInteger('category_id')->unsigned()->default(1);
            $table->foreign('category_id', 'pd_category_id_foreign')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->bigInteger('brand_id')->unsigned()->default(1);
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onDelete('cascade');
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