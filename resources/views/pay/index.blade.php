@extends ('layout')
@section('title')
    付款测试页面
@stop

@section('jslink')
	 <script src='{{URL::asset('assets/lib/pingpp-pc.js')}}'></script>
	 <script>
	 	function startPay(){
	 		 $.post('/pay',{name:"Donald Duck",city:"Duckburg"},function(data,status){
		 		 	pingppPc.createPayment(data, function(result, err){
						  // 处理错误信息
						  console.log(err);
						  console.log(result);
					});
		 			
	 		 });
	 	}
	 </script>
@stop

@section('content')
	<div class="btn btn-primary" id='testBtn' onclick="startPay()">测试付款</div>
@stop