<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyPlatformIdOnCrawlerProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crawler_profiles', function (Blueprint $table) {
            //
            $table->dropForeign('crawler_profiles_platform_id_foreign');
            $table->dropIndex('crawler_profiles_platform_id_index');
            $table->dropColumn('platform_id');
            $table->integer('category_id')->unsigned()->index()->after('id');
            $table->foreign('category_id')->references('id')->on('category_profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crawler_profiles', function (Blueprint $table) {
            //
             $table->dropForeign('crawler_profiles_category_id_foreign');
             $table->dropIndex('crawler_profiles_category_id_index');
             $table->dropColumn('category_id');
        });
    }
}
