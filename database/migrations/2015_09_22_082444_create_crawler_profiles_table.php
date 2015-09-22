<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrawlerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crawler_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('platform_id')->unsigned()->index();
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade');
            $table->string('field_name', 20);
            $table->string('field_url');
            $table->enum('url_type', array('nomarl', 'domvalue'));
            $table->enum('field_type', array('dom', 'fixed', 'computed'));
            $table->text('field_value');
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
        Schema::drop('crawler_profiles');
    }
}
