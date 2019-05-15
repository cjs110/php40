<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="csrf-token" content="{{csrf_token()}}"> 
	<title>Document</title>
	<script type="text/javascript" src="/js/jquery.js"></script>
</head>
<body>
	<!-- <form action="/ckk" method="post">
		用户名:<input type="text" name="name">
		电话:<input type="text" name="phone">
		住址:<input type="text" name="adress">
		{{csrf_field()}}
		<button>提交</button>
		
	</form> -->

	@include('h')
	<form action="/old" method="post">
		姓名:<input type="text" name="name" value="{{old('name')}}"><br>
		性别:<input type="text" name="sex" value="{{old('sex')}}"><br>
		年龄:<input type="text" name="age" value="{{old('age')}}"><br>

		电话1:<input type="text" name="tel" value="{{old('tel')}}"><br>
		<!-- 电话2:<input type="text" name="tel" value="{{old('tel')}}"><br> -->
		{{csrf_field()}}
		@section('content')
		<button>提交</button>
		@show
	</form>
	<!-- <button>提交</button> -->
	<!-- <a href="/ckk">ccc</a>
 -->
</body>
<script type="text/javascript">

	$.get('/jsons',{},function(data){
		console.log(data);
	});

	// $('button').click(function(){

	// 	$.ajaxSetup({
	// 	    headers: {
	// 	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    
	// 	    }    
	// 	}); 

	// 	$.get('/ccc',{},function(res){
	// 		console.log(res);
	// 	})

	// });
	//alert($);

</script>
</html>