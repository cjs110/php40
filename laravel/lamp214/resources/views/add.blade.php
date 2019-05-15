<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="/saa">
		名字:<input type="text" name="name">
		{{csrf_field()}}
		<button>提交</button>

	</form>
	<a href="{{route('hahaa')}}">修改</a>
</body>
</html>