<?php 
error_reporting(0);
session_start();
 $email=$_SESSION['username'];
 $con=mysqli_connect("localhost","root","","instagram") or die(mysqli_error($con));
error_reporting(0);
if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
{
    
    $q="select * from user where email='$email' ";
    $result=mysqli_query($con,$q) or die(mysqli_error($con));
    $row=mysqli_fetch_array($result);
    if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['city'])&&isset($_POST['state']))
    {
        $newname=$_POST['name'];
        $newemail=$_POST['email'];
        $newpassword= $_POST['password'];
        $newcity=$_POST['city'];
        $newstate=$_POST['state'];
        $query="update  user set name ='$newname', email='$newemail',password='$newpassword',city='$newcity',state='$newstate' where email='$email' ";
        $registration=mysqli_query($con,$query) or die(mysqli_error($connection));
        echo"update successful";
        header('refresh:2;url=design.php');

    }
    else
    {

    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head><link href="https://fonts.googleapis.com/css2?family=Antic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1f4b63a1b8.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body><br><br><br><br>
        <div class="container shadow p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-lg-12">
                   <?php  echo $imge='<img class="rounded-circle img-flu " src="data:image/jpeg;base64,'.base64_encode($row['user_img']).'" height="135" width="140"/>';?> 
                   <br><br> 
                   <form  method="POST" action="<?php echo $SERVER['PHP_SELF'];?>">
                       Name: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="name" value="<?php echo $row['name'];?>">
                       <br> <br> 
                       Email:  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp <input type="text" name="email" value="<?php echo $row['email'];?>">
                       <br><br>
                       Password: &nbsp &nbsp &nbsp &nbsp<input type="text" name="password" value="<?php echo $row['password'];?>">
                       <br> <br> 
                       City: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="city" value="<?php echo $row['city'];?>">
                       <br><br>
                       State:  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp <input type="text" name="state" value="<?php echo $row['state'];?>">
                       <br>
                       <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
         
     

        </div>
    </body>
    </html>
    <?php
    }
 
}
else{
    echo "unauthorized";
    header('refresh:2;url="login.php"');
}
?>
 