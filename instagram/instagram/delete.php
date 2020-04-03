<?php
$deletepost="";
$deletepost=$_POST['deletepost'];
$con=mysqli_connect("localhost","root","","instagram") or die(mysqli_error($con));
error_reporting(0);
$post=" delete from posts where postid='$deletepost'";
$postresult=mysqli_query($con,$post) or die(mysqli_error($con));
header('refresh:0,url=design.php');
?>