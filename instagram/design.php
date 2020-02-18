<?php
$con=mysqli_connect("localhost","root","","instagram") or die(mysqli_error($con));
error_reporting(0);
$q="select * from packages";
$result=mysqli_query($con,$q) or die(mysqli_error($con));
//for random
$ra="select * from packages order by RAND() limit 5";
$res=mysqli_query($con,$ra) or die(mysqli_error($con));





?>



<!DOCTYPE html>
<html>
<head>
	<title>fetching</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
  <script type="text/javascript">
    function func()
    {
      var a = document.getElementById("p");
      a.style.height="50px";

    }
  </script>
  <br><br> 
  <!--body area-->
  <div class="container-fluid">
    <div class="row ">
      <div style="padding:8%;"></div>
      <div class="col-lg-2 col-md-0 col-sm-0 col-0  border-right " style="position:fixed;padding:6%">
         <?php

while($rowp=mysqli_fetch_array($res))
{ 
     ?>  
         
         <p><?php echo $rowp['des'];?> <span class="badge badge-pill badge-primary">Follow</span></p>
     <?php
}
?> <br><br><br><br><br><br>
      </div>
      <div class="col-lg-8 " >
        <br><br> <br><br> <br><br> <br>
        <div class="shadow-md "><br><br>
        <?php

while($row=mysqli_fetch_array($result))
{
     ?>  
         
          <p class="img-responsive " style="display: inline-block; padding:.5%;"   >
  <a href="#" onclick="func();" id="p" >
         <?php  echo $img='<img src="data:image/jpeg;base64,'.base64_encode($row['img']).'" height="230" width="310"/>';?></a>
         </p>   
     <?php
}
?> </div>
      </div>
  </div>
  </div>

 
  
 
</body>
</html>

