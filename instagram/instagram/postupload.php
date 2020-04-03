<?php
session_start();
{
    $email=$_SESSION['username'];
}
$con=mysqli_connect("localhost","root","","instagram") or die(mysqli_error($con));
error_reporting(0);
$desc=$_POST['post'];
$imge=$email;

 
$file=$_FILES['image'];
$size=$file['size']/1000000;
 
if($size<1.6&& $size>0)
{
    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $q="insert into posts(postimg,postdesc,postemail) values('$file','$desc','$imge')";
    $user=mysqli_query($con,$q) or die(mysqli_error($con));
    header('refresh:0;url=design.php');
}
else
{
    echo"the file size is larger than 1.5 mb.Please resize it before upload";
  header('refresh:3;url="design.php"');
   
}

 




?>