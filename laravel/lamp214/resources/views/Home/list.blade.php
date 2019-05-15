<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
	<link rel="stylesheet" type="text/css" href="/bs/css/bootstrap.min.css">
	<script type="text/javascript" src="/bs/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/bs/js/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>{{$title}}</h1>
		</div>
		<div class="row" col-md-offset-3>
			<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>用户名</th>
				<th>权限</th>
				<th>是否禁用</th>
				<th>添加时间</th>
				<th>头像</th>
				<th>操作</th>
			</tr>
			@foreach($arr as $k=>$v)
			<tr>
				<td>{{$v->id}}</td>
				<td class="um">{{$v->username}}</td>
				<td>{{$v->level}}</td>
				<td>{{$v->status}}</td>
				<td>{{$v->addtime}}</td>
				<td><img src="{{$v->profile}}" style="width:120px"></td>
				<td>
					<a href="/Home/user/del/{{$v->id}}" class="btn btn-danger">删除</a>
					<a href="/Home/user/edit/{{$v->id}}" class="btn btn-warning">修改</a>
				</td>
			</tr>
			@endforeach
			
			</table>
			{{$arr->render()}}	
		</div>
	</div>
</body>
<script type="text/javascript">
		//给用户名添加双击事件
		$('.um').dblclick(function(){
			//获取中间的文本
			var $tx = $(this).text().trim();
			//创建input
			var inp = $('<input type="text" />');

			//清空
			$(this).empty();

			$(this).append(inp);

			inp.val($tx);

			inp.select();

			var $td = $(this);
			//失去焦点
			inp.blur(function(){
				//获取新输入的用户名
				var $ux = $(this).val().trim();
				//获取用户的id
				var $uid = $(this).parents('tr').find('td').eq(0).text().trim();
				//alert($uid);
				//发送ajax
				$.get('/Home/ajaxup',{username:$ux,uid:$uid},function(data){
					//console.log(data);
					if(data == 1){
						//alert(data.success);
						$td.text($ux);
					}else{
						$td.text($tx);
					}
				})
			})
		})
</script>
</html>