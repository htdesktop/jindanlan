@extends('layouts.demo')

@section('title','发现项目')

@section('header')
	<div data-role='header'>
		<a href="#" data-role='button'  data-icon='arrow-down' data-iconpos='right' class="ui-btn-left">热门项目</a>
		<h1></h1>
		<a href="#" data-role='button'  data-icon='arrow-down' data-iconpos='right' class="ui-btn-right">全国</a>
	</div>
@stop

@section('content')
	<div data-role="content">
   <div class="ui-grid-a" style="text-align:center">
     <div class="ui-block-a">
        <p>18</p>
        <p>第一列</p>
     </div>
     <div class="ui-block-b">
       <p>18</p>
       <p>第二列</p>
     </div>
   </div>
  </div>
@stop

@section('footer')
	<div data-role="footer" data-position="fixed">
	  <div data-role="navbar" data-iconpos='right'>
	    <ul>
	      <li><a href="#anylink" data-icon='home'  data-iconshadow='false'>首页</a></li>
	      <li><a href="#anylink" data-icon='search' data-iconshadow='false'>搜索</a></li>
	    </ul>
	  </div>
	</div>
@stop