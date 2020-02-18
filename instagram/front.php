<?php
$con=mysqli_connect("localhost","root","","instagram") or die(mysqli_error($con));
error_reporting(0);
$q="select * from packages";
$result=mysqli_query($con,$q) or die(mysqli_error($con));
//for random
$ra="select * from packages order by RAND() limit 5";
$res=mysqli_query($con,$ra) or die(mysqli_error($con));
//profile
$rad="select * from  user";
$resd=mysqli_query($con,$rad) or die(mysqli_error($con));
 






?>



<!DOCTYPE html>
<html>
<head>
	<title>fetching</title>
  <script src="https://kit.fontawesome.com/1f4b63a1b8.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
</head>
<body>
  <nav class="navbar sticky-top navbar-expand-lg " style="background-color:white; ">
    <div class="container">
  <a class="navbar-brand" href="#"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fab fa-instagram" style="color:black;">&nbsp <h3 style="display:inline;">|&nbspInstagram</h3></i> </a>
      </li>
       <li style="padding-left:130%;" class="nav-item active">
        <a class="nav-link" href="#"><i style="color: black;" class="far fa-user"></i></a>
      </li>
       
      
    </ul>
   
  </div>
  </div>
</nav>
        
 

  </div>

</main>
<!--Main layout-->
  <!---->
  
 
<div class="container-fluid">
  <div class="row">
  <div class="col-lg-2 col-sm-0 col-0" ></div>
  <div class="col-lg-6 col-sm-12 " ><br><br><br>
     <?php

while($row=mysqli_fetch_array($res))
{
     ?>  
         
          <div class="shadow-md border rounded" >
           <div class="border-bottom rounded" style="background-color: white;"><br>
 <div  style="margin-left: 3%;">

<?php 
while($row1=mysqli_fetch_array($resd))
{
 echo $imge='<img class="rounded-circle img-flu " src="data:image/jpeg;base64,'.base64_encode($row1['photo']).'" height="55" width="60"/>';
 echo"&nbsp ";
 echo $name=$row1['name'];
}

 ?>

 </div>
             <br></div> 
            
         <div  class="img-fluid"><?php  echo $img='<img style="width:100%;" src="data:image/jpeg;base64,'.base64_encode($row['img']).'"  />';?> </div>
         <div style="background-color: white;" class="rounded">hello<br><br><br><br></div>
         </div>  <br><br><br><br> 
     <?php
}
?> 
  </div>
  <!-- side profile section-->
  <div class="col-lg-2  ">
     <br><br><br><br><br>

    <div class="row" > 
   <div style="position:fixed;">&nbsp<?php echo$imge; ?>&nbsp<?php echo$name; ?><br><br><br>
   <div class="ex1" style="margin-left: 5%;">
     <!--inside scroll-->
     <header style="position:absolute ;top: 100px">Other Stories</header>
     <br> 
      <div class="row">
        
        <div style="padding-bottom:5%; padding-left:10%;" class="col-lg-12"><?php echo$imge; echo$name; ?> </div>
        <div style="padding-bottom:5%; padding-left:10%;" class="col-lg-12"><?php echo$imge; echo$name; ?> </div>
        <div style="padding-bottom:5%; padding-left:10%;" class="col-lg-12"><?php echo$imge; echo$name; ?> </div>
        <div style="padding-bottom:5%; padding-left:10%;" class="col-lg-12"><?php echo$imge; echo$name; ?> </div>
        <div style="padding-bottom:5%; padding-left:10%;" class="col-lg-12"><?php echo$imge; echo$name; ?> </div>
        <div style="padding-bottom:5%; padding-left:10%;" class="col-lg-12"><?php echo$imge; echo$name; ?> </div>
        <div style="padding-bottom:5%; padding-left:10%;" class="col-lg-12"><?php echo$imge; echo$name; ?> </div>
        <div style="padding-bottom:5%; padding-left:10%;" class="col-lg-12"><?php echo$imge; echo$name; ?> </div>
         

         

      </div>
     <!---->
   </div></div>  
   
     </div>










  </div>
  </div>
  
</div>
 


 

</html>

