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
        Schema::create('table', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('platform_id')->unsigned()->index();
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade');
            $table->string('product_name')->nullable;
            $table->string('rate', 10)->nullable();
            $table->string('investment_period', 10)->nullable();
            $table->string('progress', 10)->nullable();
            $table->integer('start_investment_amount')->unsigned()->nullable();
            $table->integer('available_investment_amount')->unsigned()->nullable();
            $table->string('safeguard_mode', 20)->nullable();
            $table->string('income_mode', 20)->nullable();
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
        Schema::drop('table');
    }
}
