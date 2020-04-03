
  <?php
 session_start(); 
 $user=$_SESSION['username'];
  
 ?>
 <?php
 session_destroy();
 header('refresh:2; url=login.php');

?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="loader.css">
        <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Kaushan+Script&display=swap" rel="stylesheet">
	<title>home</title>
</head>
<body>
	 
        <br>
        <br>
        <br>
        <br>

	<h3 align="center"><p >Logging you out</p> <p><?php echo $user;?></p></h3>
	 
	 

</body>
</html>