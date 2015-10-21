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
        //
        $productList = Product::all();
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
        $productList = Product::where('start_investment_amount','>',$start_investment_amount_value)->get();
        $rate = $request->input('rate');
        $investment_period = $request->input('investment_period');
        $platform_grade = $request->input('platform_grade');
        
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
