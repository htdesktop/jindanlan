<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert([
		    ['platform_name' => '人人贷'],
            ['platform_name' => '爱钱进']
		]);

		DB::table('category_profiles')->insert([
		    ['category_name' => 'U计划-A', 'platform_id' => 1],
		    ['category_name' => 'U计划-B', 'platform_id' => 1],
		    ['category_name' => 'U计划-C', 'platform_id' => 1],
		    ['category_name' => '散标', 'platform_id' => 1],
            ['category_name' => '爱月投', 'platform_id' => 2],
            ['category_name' => '整存宝', 'platform_id' => 2],
            ['category_name' => '零钱通', 'platform_id' => 2]
		]);
    }
}
