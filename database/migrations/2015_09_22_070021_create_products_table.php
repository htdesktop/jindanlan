<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('platform_id')->unsigned()->index();
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade');
            $table->string('product_name')->nullable;
            $table->float('rate')->nullable();
            $table->integer('investment_period')->nullable();
            $table->float('progress')->nullable();
            $table->integer('start_investment_amount')->unsigned()->nullable();
            $table->integer('available_investment_amount')->unsigned()->nullable();
            $table->string('safeguard_mode')->nullable();
            $table->string('income_mode')->nullable();
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
        Schema::drop('products');
    }
}
