<?php

namespace jindanlan\Http\Controllers;

use Illuminate\Http\Request;
use jindanlan\Http\Requests;
use jindanlan\Http\Controllers\Controller;
use jindanlan\Models\Product;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productList = Product::all();
        return view('productions/index')->with('productList', $productList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $productList = Product::all();
        $start_investment_amount = $request->input('start_investment_amount');
        $start_investment_amount_value = 0;
        switch ($start_investment_amount) {
            case '不限':
                # code...
                break;
            case '100以上':
                $start_investment_amount_value = 100;
                break;
            case '500以上':
               $start_investment_amount_value = 500;
                break;
            case '1000以上':
               $start_investment_amount_value = 1000;
                break;
            case '5000以上':
                $start_investment_amount_value = 5000;
                break;
            
            default:
                # code...
                break;
        }
        $rate = $request->input('rate');
        $rate_start_value = 0;
        $rate_end_value = 100;
        switch ($rate) {
            case '不限':
             # code...
                break;
            case '5%以下':
            {
                $rate_start_value = 0.0;
                $rate_end_value = 0.05;
            }
               
                break;
            case '5%-10%':
            {
                $rate_start_value = 0.05;
                $rate_end_value = 0.10;
            }
                break;
            case '10%以上':
            {
                $rate_start_value = 0.10;
                $rate_end_value = 100;
            }
                break;
            
            default:
                # code...
                break;
        }
        $investment_period = $request->input('investment_period');
        $investment_period_start_value = 0;
        $investment_period_end_value = 1000000000;
        switch ($investment_period) {
            case '不限':
             # code...
                break;
            case '1周以内':
            {
                $investment_period_start_value = 0;
                $investment_period_end_value = 7;
            }
               
                break;
           case '1个月以内':
            {
                $investment_period_start_value = 0;
                $investment_period_end_value = 31;
            }
                break;
            case '1-3个月':
            {
                $investment_period_start_value = 30;
                $investment_period_end_value = 91;
            }
                break;
            case '3-6个月':
            {
                $investment_period_start_value = 90;
                $investment_period_end_value = 181;
            }
                break;
            case '6-12个月':
            {
                $investment_period_start_value = 180;
                $investment_period_end_value = 365;
            }
                break;
            case '1年以上':
            {
                $investment_period_start_value = 360;
                $investment_period_end_value = 1000000000;
            }
                break;
            
            default:
                # code...
                break;
        }
        $platform_grade = $request->input('platform_grade');

         $productList = \DB::table('products')->where('start_investment_amount','>=',$start_investment_amount_value)
        ->where('rate','>=',$rate_start_value)->where('rate','<',$rate_end_value)
        ->where('investment_period','>=',$investment_period_start_value)->where('investment_period','<=',$investment_period_end_value)->get();
        
        return view('productions/index')->with('productList', $productList);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
