<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/login" method="post">
		
		手机号: <input type="text" name="phone">
		code : <input type="text" name="code">
		{{ csrf_field() }}
		<input type="submit" value="提交">
	</form>
</body>
</html>
