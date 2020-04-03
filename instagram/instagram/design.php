<?php

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
//user
$q="select * from user where email='$email'";
$user=mysqli_query($con,$q) or die(mysqli_error($con));


$post=" select * from posts where postemail='$email' ";
$postresult=mysqli_query($con,$post) or die(mysqli_error($con));
$userpost=mysqli_num_rows($postresult);


$value=0;


?>



<!DOCTYPE html>
<html>
<head>
  <title>fetching</title>
   
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1f4b63a1b8.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
  <style>
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
</style>
  </style>
  <style>
        .container1{
       	height: 30%;
         width:80%;
       	align-content: center;
          
        
       }
       
 
  </style>


  <style type="text/css">
  body
  {
    background-color: #f0f0f0;
  }
</style>
<script>
  $(document).ready(function(){

    $('.p1').click(function(){
      var a=$(this).val();
      document.getElementById("postval").setAttribute('value',a);
      document.getElementById("openpostval").setAttribute('value',a);
    
 });


  });
 
</script>

 
  <!--nav-->
   <!--Navbar -->
<nav class="navbar navbar-dark default-color sticky-top justify-content-between" style="background-color:white;">
  <a class="navbar-brand" href="#">Navbar</a>
  <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
    <a class="nav-link" href="front.php"><i class="fab fa-instagram" style="color:black;"> <h3  class="insta" style="display:inline;">|Instagram </h3></i> </a>
</div>
<div  style="padding-top:2%;"class="col-lg-5  col-md-5 col-sm-4 col-4">
      <form >
    
      <input class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="Search"
        aria-label="Search" >
  
    
  </form>
</div>
<div style="padding-top:2%;" class="col-lg-1 col-md-1 col-sm-1 col-1">
<a href="design.php" style="color: black;"><i  style="cursor:pointer;"class="far fa-user"></i></a>
</div>

  </div>
</div>
  
</nav>
  <br><br> 
  <div class="container1"  >
  <div class="d-flex justify-content-center h-10" style="padding-left:15%;">
			<div class="image_outer_container">
				<div class="green_icon"></div>
				<div class="image_inner_container"> 
          
           <?php 
            
           $row=mysqli_fetch_array($user);
          
           $imge='<img class="rounded-circle img-flu " src="data:image/jpeg;base64,'.base64_encode($row['user_img']).'" height="55" width="60"/>';
           
           if(empty($imge))
           {
             echo"<img src='alt.jpg'>";
           }
           else
           {
            echo $imge;
           }
           
           ?>
         
        </div>
        
      </div>
      <script>
      $(document).ready(function()
      {
        $('.fa-cog').click(function()
        {
          document.getElementById('lg').innerHTML="<a href='logout.php'><span class='badge badge-pill badge-primary'>Logout</span</a> ";
        });
      });
      
      </script>
    
      <div style="padding-top:0%;padding-left:5%; "><br><br>
        <h2  class="size" >@<?php echo$row['name'];?></h2>
        <small  class="size" style="display: inline;"><strong><?php echo$userpost;?></strong> posts</small>
        <small  class="size" style="display: inline;">&nbsp&nbsp <strong>100M</strong> Followers</small>
        <small class="size"  style="display: inline;">&nbsp <strong>10</strong>Following&nbsp</small>
        <br><br>
        <p><span class="badge badge-pill badge-primary"><a style="color:white;" href="edit.php" style="text-decoration: none">Edit Profile</a></span> &nbsp<i class="fas fa-cog"></i> <span id="lg" style="display:inline;">
        
    </span></p>
        
        
      </div>

      <style>
        .size
        {
          font-size:130%;

        }
        @media only screen and (max-width: 500px) 
     {
   
      .size
        {
          font-size:50%;

        }

 
     }
      </style>
    </div>
    <style>
      
    </style>
    <style>
      .responsive
      {
        height:280px;
    width:260px;
      }

  @media only screen and (max-width: 500px) 
  {
  .responsive
  {
    height:130px;
    width:110px;
  }
 
}
    </style>
    <style>
      html,body{
			height: 95%;
		}



       .image_outer_container{
       	margin-top: auto;
       	margin-bottom: auto;
       	border-radius: 40%;
       	position: relative;
        
         
       }

       .image_inner_container{
       	border-radius: 50%;
       	padding: 3px;
        background: #833ab4; 
        background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4); 
        background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
       }
       .image_inner_container img{
       	height: 150px;
       	width: 150px;
       	border-radius: 50%;
       	border: 5px solid white;
       }
       
  @media only screen and (max-width: 500px) 
  {
    .image_inner_container img{
       	height: 90px;
       	width: 90px;
       	border-radius: 50%;
       	border: 5px solid white;
       }
       
 


 
}




       .image_outer_container .green_icon{
         background-color: #4cd137;
         position: absolute;
         right: 30px;
         bottom: 10px;
         height: 30px;
         width: 30px;
         border:5px solid white;
         border-radius: 50%;
       }
       @media only screen and (max-width: 500px) 
  {
    .image_outer_container .green_icon{
         background-color: #4cd137;
         position: absolute;
         right: 10px;
         bottom: 0px;
         height: 10px;
         width: 10px;
         border:1px solid white;
         border-radius: 50%;
       }
       
 


 
}


    </style>
   <div>
    
   </div>
  </div>
  <!--body area-->
  <div class="container-fluid">
    <div class="row">
       
      <div class="col-lg-3 col-md-0 col-sm-0 col-0 "></div>
      <div class="col-lg-8 col-md-12 col-sm-12 col-12 border-top" >
 
        <div class="shadow-md "><br><br>
        <?php

while($row=mysqli_fetch_array($postresult))
{  
     ?>  
         
          <div  style="display:inline; padding:0%;">
           <button    style="border:0px;display:inline;" class="p1 responsive" value="<?php echo $row['postid'];?>">
         <a   href="#" data-toggle="modal" data-target="#exampleModal1"><?php  
         echo $img='<img style="padding-bottom:10px;" class="responsive"  src="data:image/jpeg;base64,'.base64_encode($row['postimg']).'" />';?></a></button>
</div>
          
     <?php
     
}
?> </div>
      </div>
  </div>
 
  </div>

  <!--modeltop-->
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div>
       <?php for($i=0;$i<35;$i++)
       {
         echo "&nbsp";
       }
       
       ?>

       </form>
        <form method="POST" action="open.php" style="display: inline;">
        <input style="display: inline;" id="openpostval" type="hidden" value="" name="openpost">
        <button type="submit" style="display: inline;" class="btn btn-primary">View</button>
        </form>
        
       
       <form method="POST" action="delete.php" style="display: inline;">
        <input style="display: inline;" id="postval" type="hidden" value="" name="deletepost">
        <button style="display: inline;" type="submit" class="btn btn-primary">Delete</button>
        </form>
        
      </div><br>
    </div>
  </div>
</div>
    <!--modeltop-->

<div class="border-tops" >
 <i data-toggle="modal" data-target="#exampleModalCenter" herf ="" style="padding-left:50%;font-size:300%; " class="fas fa-plus-square"></i>
</div>

 

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="postupload.php">
          <input type="file" name="image" id="image"><br><br>
          <div>Description:</div> <br>
          <input type="text" name="post" style="font-size:18pt;height:140px;width:400px;">
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Post</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

</body>
 
</html>

<?php
}
else
{
echo"<h3>Unauthorize access.....Please Login</h3>";
header('refresh:2;url=login.php');
}
?>
