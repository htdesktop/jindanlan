@extends('layout')

@section('title')
	金蛋篮理财
@stop

@section('product_active')
   class='active'
@stop

@section('content')  
   <div class="jumbotron">
      <h3 style="color:#00f;">筛选条件选择：</h3>
      <div class="row" style="margin-top:20px">
         <form class="form-search" method="post" url='/production'>
            <div class="col-md-2">
               起投金额：
                   <select class="form-control" name="start_investment_amount">
                    <option>不限</option>
                    <option>100以上</option>
                    <option>500以上</option>
                    <option>1000以上</option>
                    <option>5000以上</option>
                  </select>
            </div>
            <div class="col-md-2">
               预期收益：
               <select class="form-control" name="rate">
                 <option>不限</option>
                 <option>5%以下</option>
                 <option>5%-10%</option>
                 <option>10%以上</option>
               </select>
            </div>
            <div class="col-md-2">
               锁定期限：
                <select class="form-control" name="investment_period">
                 <option>不限</option>
                 <option>1周以内</option>
                 <option>1个月以内</option>
                 <option>1-3个月</option>
                 <option>3-6个月</option>
                 <option>6-12个月</option>
                 <option>1年以上</option>
               </select>
            </div>
            <div class="col-md-2">
              平台安全等级：
                <select class="form-control" name="platform_grade">
                 <option>不限</option>
                 <option>A++</option>
                 <option>A+</option>
                 <option>A</option>
                 <option>B++</option>
                 <option>B+</option>
                 <option>B</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" style="margin-top:20px;" class="btn">筛选</button>
            </div>
         </form>
      </div>
   </div> 
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