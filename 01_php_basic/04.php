<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<form method="post">
	<h1>Please Input your name:</h1>
	<input type="text" name="name">
	<input type="submit" value="Submit Name">
</form>
<?php
$name = $_POST['name'];
echo "<h3>Hello $name</h3>";
?>
</body>
</html>