<?php

namespace jindanlan\Http\Controllers;

use Illuminate\Http\Request;
use jindanlan\Http\Requests;
use jindanlan\Http\Controllers\Controller;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view("pay/index");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay()
    {
        \Pingpp\Pingpp::setApiKey('sk_test_urT4i5iPOCiHPmj5K0uLO0GK');
        $res = \Pingpp\Charge::create(array(
            'order_no'  => '0123456789',
            'amount'    => '100',
            'app'       => array('id' => 'app_9iLSeP8Oi5SGznbj'),
            'channel'   => 'upacp_pc',
            'currency'  => 'cny',
            'client_ip' => '127.0.0.1',
            'subject'   => 'Your Subject',
            'body'      => 'Your Body',
            'extra' => array('success_url' => 'http://www.jindanlan.com/')
        ));

        \Debugbar::info($res);
        $content = $res;
        $status = 200;
        $value = "text/json";
        return response($content, $status)
              ->header('Content-Type', $value);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function payHooks(Request  $request)
    {
        $content = "finshed";
        $status = 200;
        $value = "text/html";
        $hookType = $request->input('type');
        \Log::warning($hookType);
        
        return response($content, $status)
              ->header('Content-Type', $value);
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
