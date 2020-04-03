<?php
session_start();
$con=mysqli_connect("localhost","root","","instagram") or 
die(mysqli_error($con));
error_reporting(0);
$email=$_SESSION['username'];
$name=$_POST['name'];
 
$q= "select * from user where name='$name' ";
$result =mysqli_query($con,$q) or die(mysqli_error($con));
$i=mysqli_num_rows($result);
if(isset($_SESSION['username']))
{
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://fonts.googleapis.com/css2?family=Antic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1f4b63a1b8.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
 <body><br><br><br><br><br>
     <?php
    if($i!=0)
    {
           while($row=mysqli_fetch_array($result))
           {
          
       
            ?>
            <div style="width:30%;" class="container   shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $imge='<img class="rounded-circle img-flu " src="data:image/jpeg;base64,'.base64_encode($row['user_img']).'" height="55" width="60"/>'."&nbsp &nbsp".$row['name'];
                    ?>
                     
                </div>
            </div>
   
   
            </div> 
            <br>
            <?php
           }
    }

    else
    {
            ?>
            <div style="width:30%;" class="container shadow ">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    No user found 
                    <br>
                </div>
            </div>
   
   
            </div> <br>
            <?php
    }
    
     
     
     
     ?>
 </body>
 </html>
 
 
 <?php
}
else{
    echo"unauthorized access";
}
?>
 