<?php 
error_reporting(0);
session_start();
 
if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
{
?>
<?php
 

  $email=$_SESSION['username'];

$con=mysqli_connect("localhost","root","","instagram") or die(mysqli_error($con));
error_reporting(0);
$q="select * from packages";
$result=mysqli_query($con,$q) or die(mysqli_error($con));
//for random
$ra="select * from packages order by RAND() limit 5";
$res=mysqli_query($con,$ra) or die(mysqli_error($con));
//profile
$rad  ="select * from  user where email='$email'";
$resd =mysqli_query($con,$rad) or die(mysqli_error($con));
$side=mysqli_fetch_array($resd);

//suggestion
$rad2 ="select * from  user where email !='$email' order by RAND() LIMIT 8" ;
$resq =mysqli_query($con,$rad2) or die(mysqli_error($con));


//publichomepage
$post=" select * from user inner join(select * from posts
 order by RAND()) as posts on user.email=posts.postemail 
 order by RAND() limit 20 ";
$postresult=mysqli_query($con,$post) or die(mysqli_error($con));


 
?>
<!DOCTYPE html>
<html>
<head>
  <title>fetching</title>
  <link href="https://fonts.googleapis.com/css2?family=Antic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1f4b63a1b8.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
       .insta
        {
          font-size:130%;

        }
        @media only screen and (max-width: 380px) 
     {
   
      .insta
        {
          font-size:120%;

        }

 
     }
     .cc
        {
           padding-left:100%;

        }
        @media only screen and (max-width: 380px) 
     {
   
      .cc
        {
          padding-left:100%;

        }

 
     }
</style>
<style type="text/css">
  body
  {
    background-color: #f0f0f0;
  }
</style>
 <style>
div.ex1 {
  background-color:white;
  width: 250px;
  height: 220px;
  overflow-y: scroll;
  overflow-x: hidden;
  margin:10%;
}


</style>
  <!--likemethod-->
  <style>
         .fa-heart-o {
  color: red;
  cursor: pointer;
}

.fa-heart {
  color: red;
  cursor: pointer;
}
  </style>
  <script>
    $(document).ready(function(){
  $("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
  $("#heart").addClass("liked");
     
  });
}); 
  </script>
  <!--likemethod-->
</head>
<body> 
   <style>
     .a 
     {
       color:black;
     }
   </style>
<!--Navbar -->
 
<nav class="navbar navbar-dark default-color sticky-top justify-content-between" style="background-color:white;">
  <a class="navbar-brand" href="#">Navbar</a>
  <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
    <a class="nav-link" href="front.php"><i class="fab fa-instagram" style="color:black;"> <h4 class="insta" style="display:inline;">|Instagram </h4></i> </a>
</div>
<div  style="padding-top:2%;"class="col-lg-5  col-md-5 col-sm-4 col-4">
      <form action="search.php" method="POST" >
     <div class="cc"style="vposition:fixed;"> <button type="submit" style="border:0px;;background-color:white;position:fixed;"> <i  style="position:relative;" class="fas fa-search a " aria-hidden="true"></i></button></div>
      <input style="position:relative;"class="form-control form-control-sm mr-sm-2 mb-0" type="text" name="name" placeholder="Search"
        aria-label="Search" > 
        
  
    
  </form>
</div>
<div style="padding-top:2%;" class="col-lg-1 col-md-1 col-sm-1 col-1">
<a href="design.php" style="color:black;"><i  style="cursor:pointer;"class="far fa-user"></i></a>
</div>

  </div>
</div>
  
</nav>
<!--/.Navbar -->

 
<!--Main layout-->
  <!---->
  
 
<div class="container-fluid">
  <div class="row">
  <div class="col-lg-2 col-sm-0 col-0" ></div>
  <div class="col-lg-1 col-sm-12 " ></div>
  <div class="col-lg-5 col-sm-12 " ><br><br><br>
     <?php

while($row=mysqli_fetch_array($postresult))
{
     ?>  
         
          <div class="shadow-md border rounded" >
           <div class="border-bottom rounded" style="background-color: white;"><br>
 <div  style="margin-left: 3%;">

<?php 
 
 echo $imge='<img class="rounded-circle img-flu " src="data:image/jpeg;base64,'.base64_encode($row['user_img']).'" height="55" width="60"/>';
 echo"&nbsp ";
 echo $name=$row['name'];

 

?>

 </div>
        <br>
        </div> 

        <div  class="img-fluid" > <?php  echo $img='<img style="width:100%;" src="data:image/jpeg;base64,'.base64_encode($row['postimg']).'"  />';?> </div>
        <div style="background-color: white;" class="rounded">
        <input  type="hidden"  class="p1" value="<?php echo $row['postid'];?>"><!--postid-->
       
        <?php $postid=$row['postid'];?>
        

        <!--postlike-->
        <div class="container">
         
        &nbsp&nbsp <div  ><span id = heart> <button type="submit" style="height:1px;width:0px;border:0px;background-color:white;"><i class="fa fa-heart-o " aria-hidden="true" ></i></button>  </span>&nbsp&nbsp</div>
         
        <p style="font-family: 'Rajdhani', sans-serif;" class="border-bottom"> <?php echo  $row['name'];?><br><br></p>
        <p style="font-family: 'Antic', sans-serif;"> <?php echo  $row['postdesc'];?></p>
        </div>
         </a>

        <br>
        <br>
        <br>
        <br>
        </div>
        </div>  
        <br><br><br><br> 
     <?php
}
?> 
  </div>
  
  <!-- side profile section-->
  <div class="col-lg-2  ">
     <br><br><br>
     

    <div class="row" > 
   <div style="position:fixed;">&nbsp<?php echo $imge='<img class="rounded-circle img-flu " src="data:image/jpeg;base64,'.base64_encode($side['user_img']).'" height="55" width="60"/>'; ?>&nbsp<?php echo$side['name']; ?><br><br><br></i>
   <div class="ex1" style="margin-left: 5%;">
     <!--inside scroll-->
     <header style="position:absolute; top: 100px; ">Other Stories</header>
     <br> 
      <div class="row">
        
        <div style="padding-bottom:5%; padding-left:10%;" class="col-lg-12"><?php 
        
        while($sidesql=mysqli_fetch_array($resq))
        {
          ?><p>
          <?php
          echo $imge='<img class="rounded-circle img-flu " src="data:image/jpeg;base64,'.base64_encode($sidesql['user_img']).'" height="55" width="60"/>'."&nbsp &nbsp".$sidesql['name'];
          ?>
          </p>
          <?php
        }
        
        ?> </div>
        
         

         

      </div>
     <!---->
   </div></div>  
   
     </div>










  </div>
  </div>
  
</div>
 


 

</html>


<?php






}
else
{
echo"Unauthorised acccess....Please Login";
header('refresh:4;url=login.php');


}






?>



 