<?php


$connection=mysqli_connect("localhost","root","","instagram") or 
die(mysqli_error($connection));
error_reporting(0);
$nameerr=$emailerr=$passworderr=$cityerr=$stateerr="";
$hashmap=0;
$message="";
$namemessage="";
$namenode=0;
$point=0;
if(empty($_POST['name']))
{
	$nameerr="This field is required";
	$hashmap=1;
	$message="";
	

}
else
{
	$name=$_POST['name'];
}
if(empty($_POST['email']))
{
	$emailerr="This field is required";
	$hashmap=1;
}
else
{
	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
	$email=$_POST['email'];
    }
     else
    {
	$emailerr="Invalid email";
	$hashmap=1;

    }
}

if(empty($_POST['password']))
{
	$passworderr="This field is required";
	$hashmap=1;
}
else
{
	$password=$_POST['password'];
}
if(empty($_POST['city']))
{
	$cityerr="This field is required";
	$hashmap=1;
}
else
{
	$city=$_POST['city'];
}
if(empty($_POST['state']))
{
	$stateerr="This field is required";
	$hashmap=1;
}
else
{
	$state=$_POST['state'];
}
if((empty($email))&&(empty($password))&&(empty($name))&&(empty($city))&&(empty($state)))
{
	$nameerr=$emailerr=$passworderr=$cityerr=$stateerr="";
	$bignode="Enter the details";
}
else
{
$bignode="";
}


$q="select * from user where email='$email'";
$result=mysqli_query($connection,$q) or die(mysqli_error($connection));
$emailnode=mysqli_num_rows($result);
$r="select * from user where name='$name'";
$result1=mysqli_query($connection,$r) or die(mysqli_error($connection));
$namenode=mysqli_num_rows($result1);
 

$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
 $file=$_FILES['image'];
 $name=$file['name'];
 $extension=explode('.',$name);
 $x = end($extension);
 $y=strtolower($x);
 if($y=="jpg"||$y=="jpeg")
 {
	 $imgerr="";
 }
 
 else{
	 $hashmap=1;
	 $imgerr="Enter correct format";
 }
if(empty($file))
{
	$file="";
}
if($hashmap==0)
{

if(($namenode==0)&&($emailnode==0))
{
	$query="insert into user(name,user_img,email,password,city,state) values('$name','$file','$email','$password','$city','$state')";
	$registration=mysqli_query($connection,$query) or die(mysqli_error($connection));
	 
	header('refresh:0;url=loader.php');
	$point++;

}
else
{
	if($emailnode!=0)
	{    
		$message="this email is already registered";
	}
	if($namenode!=0)
	{
		$namemessage="This name is already registered";
	}
}

	
	 
}
if($point==0)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Rancho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br><br><br>
<div style="padding-left:44%;"><img src="i.png"  style="width:15%;"> </div>


<div class="container">
<div class="container">
<br>  
<br>
 
 

<p style="font-family:'Times New Roman', Times, serif;text-align:center;"><?php echo$bignode;?></p>
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="login.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
	<h4 class="card-title mt-2" style="font-family: 'Rancho', cursive;padding-left :20%;font-size:210%;">Instagram</h4>
</header>
<article class="card-body">
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data" >
	<div class="form-row">
		
		<div class="col form-group">
			<label> Name </label>   
			  <input type="text" class="form-control"  name="name"><p style="font-family:'Times New Roman', Times, serif"><?php echo$nameerr.$namemessage;$namemessage="";?></p>
		</div>  
		 
	</div> 
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control"  name="email"><p style="font-family:'Times New Roman', Times, serif"><?php echo$emailerr.$message;$message="";?></p>

		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> 
	 
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>City</label>
		  <input type="text" class="form-control" name="city"><p style="font-family:'Times New Roman', Times, serif"><?php echo$cityerr;?></p>
		</div> 
		<div class="form-group col-md-6">
		  <label>State</label>
		  <select id="inputState" class="form-control" name="state"> <p style="font-family:'Times New Roman', Times, serif"><?php echo$stateerr;?></p>
		  <option value="">_ _ _ _ _ _ _ _ _</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
		       
		  </select>
		</div>  
	</div>  
	<div class="form-group">
		<label>Create password</label>
	    <input class="form-control" type="password" name="password"><p style="font-family:'Times New Roman', Times, serif"><?php echo$passworderr;?></p>
	</div>  
	<div class="form-group">
		<label>Profile Photo</label>
	    <input  type="file" name="image" ><p style="font-size:82%;">Only JPG/JPEG(Size< 65kb) <?php echo$imgerr;?></p>
	</div>  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div>     
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article>  
<div class="border-top card-body text-center">Have an account? <a href="login.php">Log In</a></div>
</div>  
</div>  

</div>  
</div> 

</div> 
<!--container end.//-->

 
</article>
	<?php 
	$nameerr=$emailerr=$passworderr=$cityerr=$stateerr="";
	$hashmap=0;
	$message="";
	?>
</body>
</html>
















 






<?php
}


?>



