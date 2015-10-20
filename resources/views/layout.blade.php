<!doctype html>
<html lang="en">
	<head>
		  <meta charset="UTF-8">
		  <title>
		  	@yield('title')
		  </title>
		  <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
		  <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
   		<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
				      <a class="navbar-brand" href="/">成都金蛋篮科技有限公司</a>
				   </div>
				   <div>
				      <ul class="nav navbar-nav">
				         <li @yield('platform_active')><a href="/platform">平台等级</a></li>
				         <li @yield('product_active')><a href="/production">产品列表</a></li>
				      </ul>
				   </div>
				</div>
			</nav>

		 <div class="container">
		    @yield('content')
		 </div>
	</body>
</html>