<?php
$conn=mysqli_connect("localhost","root","","join")or die(mysqli_error($conn));
error_reporting(0);
$q="select * from user inner join verify on user.email=verify.eid";
$res= mysqli_query($conn,$q) or die(mysqli_error($conn));
while($row=mysqli_fetch_array($res))
{
    echo $row['email'];
    echo $row['des'];
    echo $row['city'];
     
}

?>
