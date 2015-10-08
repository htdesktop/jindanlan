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
		    ['platform_name' => '人人贷']
		]);

		DB::table('category_profiles')->insert([
		    ['category_name' => 'U计划-A', 'platform_id' => 1]
		]);

		DB::table('crawler_profiles')->insert([
		    ['category_id' => 1, 'field_name' => 'product_name', 'field_url' => 'http://www.renrendai.com/financeplan/listPlan!detailPlan.action?financePlanId=642', 'url_type' => 'Normal', 'field_type' => 'DomValue', 'field_value' => 'div#plan-basic-panel>div.ui-box-white-bg>div.ui-box-title>h3&text'],
		    ['category_id' => 1, 'field_name' => 'rate', 'field_url' => 'http://www.renrendai.com/financeplan/listPlan!detailPlan.action?financePlanId=642', 'url_type' => 'Normal', 'field_type' => 'DomValue', 'field_value' => 'em.text-xxxl&text'],
		    ['category_id' => 1, 'field_name' => 'investment_period', 'field_url' => 'http://www.renrendai.com/financeplan/listPlan!detailPlan.action?financePlanId=642', 'url_type' => 'Normal', 'field_type' => 'Fixed', 'field_value' => '30'],
		    ['category_id' => 1, 'field_name' => 'progress', 'field_url' => 'http://www.renrendai.com/financeplan/listPlan!detailPlan.action?financePlanId=642', 'url_type' => 'Normal', 'field_type' => 'DomValue', 'field_value' => 'span.basic-progress-value>em&text'],
		    ['category_id' => 1, 'field_name' => 'start_investment_amount', 'field_url' => 'http://www.renrendai.com/financeplan/listPlan!detailPlan.action?financePlanId=642', 'url_type' => 'Normal', 'field_type' => 'DomValue', 'field_value' => 'span.basic-value>em&text'],
		    ['category_id' => 1, 'field_name' => 'available_investment_amount', 'field_url' => 'http://www.renrendai.com/financeplan/listPlan!detailPlan.action?financePlanId=642', 'url_type' => 'Normal', 'field_type' => 'DomValue', 'field_value' => 'div#investment-terminal>dl>dd.mt6>em&text'],
		    ['category_id' => 1, 'field_name' => 'safeguard_mode', 'field_url' => 'http://www.renrendai.com/financeplan/listPlan!detailPlan.action?financePlanId=642', 'url_type' => 'Normal', 'field_type' => 'DomValue', 'field_value' => 'span.basic-value&text'],
		    ['category_id' => 1, 'field_name' => 'income_mode', 'field_url' => 'http://www.renrendai.com/financeplan/listPlan!detailPlan.action?financePlanId=642', 'url_type' => 'Normal', 'field_type' => 'Fixed', 'field_value' => '1.收益再投资.\n2.提取至账户']

		]);
    }
}
