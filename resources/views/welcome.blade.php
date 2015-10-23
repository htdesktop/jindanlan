@extends ('layout')
@section('title')
    金蛋篮科技有限公司
@stop
@section('csslink')
	 <link rel="stylesheet" href='{{URL::asset('assets/css/production/index.css')}}'>
@stop
@section('jslink')
	 <script src='{{URL::asset('assets/lib/index.js')}}'></script>
@stop

@section('content')
<div class="logoDiv">
	<img src="{{URL::asset('assets/img/logo.png')}}" class="logoimg" alt="金蛋篮科技有限公司">
</div>
@stop