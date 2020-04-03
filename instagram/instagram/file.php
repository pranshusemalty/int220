
<?php
$name=$_POST['name'];
if(file_exists($name))
{ 
echo"present";
}
else
{
	echo"does not exists";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="file.php">
		<input type="text" name="name">
		<button type="submit">search</button>
	</form>

</body>
</html>