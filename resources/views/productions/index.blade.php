@extends('layout')

@section('title')
	金蛋篮理财
@stop

@section('content')
   
<h1>产品信息</h1>

<table class="table table-striped table-hover">
   <thead>
      <tr>
         <th>产品名称</th>
         <th>预期收益率</th>、
         <th>投资期限</th>
         <th>起投金额</th>
         <th>可投金额</th>
         <th>产品进度</th>
         <th>保障方式</th>
         <th>收益方式</th>
      </tr>
   </thead>
   <tbody>
      @foreach($productList as $product)
         <tr class="success">
            <td> <a href="{{$product->url}}">{{ $product->product_name }}</a></td>
            <td>{{ $product->rate*100.0 }} <span>%</span></td>
            <td>{{ $product->investment_period }} <span>天</span> </td>
            <td>{{ $product->start_investment_amount }} <span>元</span> </td>
            <td>{{ $product->available_investment_amount }} <span>元</span> </td>
            <td>{{ $product->progress*100.0 }} <span>%</span> </td>
            <td>{{ $product->safeguard_mode }}</td>
            <td><div style="width:200px;height:auto;">{{ $product->income_mode }}</div></td>
         </tr>
        
      @endforeach
     
   </tbody>
</table> 
 
@stop