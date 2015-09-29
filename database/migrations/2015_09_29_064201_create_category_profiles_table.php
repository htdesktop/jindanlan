<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('platform_id')->unsigned()->index();
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade');
            $table->string('category_name')->nullable;
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
        Schema::drop('category_profiles');
    }
}
