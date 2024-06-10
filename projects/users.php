<?php
if(isset($_POST['submit']));
{
$email=$_POST['ma'];
$pass=$_POST['pa'];

$conn=mysqli_connect("localhost","root","","food");
$sql="INSERT INTO users(Email,Passwords) VALUES('$email','$pass')";
$r=mysqli_query($conn,$sql);
}

include("home.php");
?>