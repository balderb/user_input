<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>The order form</h2>

<form action="index.php" method ="get">
	Name: <input  type="text" name="name">
    <input type="submit">
    <br>
    age: <input  type="number" name="age">
	<input type="submit">
</form>
<br>

<?php
 echo $_GET["name"]
echo $_GET["age"]
?>

</body>
</html>

