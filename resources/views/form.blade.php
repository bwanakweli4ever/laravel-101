<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Basic form</title>
</head>
<body>
<form action="/calculator" method="post">
	 @csrf
	<h1>calculating 2 numbers</h1>
	Number1:<input type="text" name="num1">
	Number2:<input type="text" name="num2">
	<input type="submit" name="calculate">
</form>
</body>
</html>