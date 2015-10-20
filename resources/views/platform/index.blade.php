@extends('layout')

@section('title')
	金蛋篮理财
@stop

@section('platform_active')
   class='active'
@stop
	
@section('content')
	<h1>平台安全等级</h1>
	<table class="table table-striped table-hover">
   <thead>
      <tr>
         <th>平台名称</th>
         <th>平台等级</th>
         <th>评级单位</th>、
      </tr>
   </thead>
   <tbody>
	   @foreach ($PlatformArray as $platform)
	   		@foreach ($PlatformLevelArray as $platform_level)
		   		@if ($platform_level->platform_id == $platform->id)
				    <tr class="success">
		         <td>{{ $platform->platform_name }}</td>
		         <td>{{ $platform_level->grade_value }}</td>
		         <td>{{ $platform_level->grade_company }}</td>
		      	</tr>
		      @endif
      	@endforeach
		@endforeach
      
   </tbody>
</table>
@stop