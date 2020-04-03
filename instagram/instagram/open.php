<?php
$post=$_POST['openpost'];
$con=mysqli_connect("localhost","root","","instagram") or die(mysqli_error($con));
error_reporting(0);
$q="select * from posts where postid ='$post'";
$user=mysqli_query($con,$q) or die(mysqli_error($con));
$row=mysqli_fetch_array($user);
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
         
     .center
      {
        height:580px;
        width:560; 
        padding-left:35%;
      }

  @media only screen and (max-width: 500px) 
  {
  .center
  {
    height:500px;
    width:470; 
    padding-left:0%;
  }
 
}
     
    </style>
     
    <br><br><br><br>
     <div style="width: 100%;">
         <?php
         echo $img='<img class="center" src="data:image/jpeg;base64,'.base64_encode($row['postimg']).'"  />';
         ?>
      <br><br><br>
     </div>

    
</body>
</html>