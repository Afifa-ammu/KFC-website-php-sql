<?php
if(isset($_POST['submit']));
{
$na=$_POST['name'];
$n=$_POST['num'];
$f=$_POST['food'];
$q=$_POST['quan'];
$a=$_POST['add'];
$am=$_POST['amount'];
$conn=mysqli_connect("localhost","root","","food");
$sql="INSERT INTO customer(names, mobilen,foodname,quantity,addresss,amount) VALUES('$na','$n','$f','$q','$a','$am')";
$r=mysqli_query($conn,$sql);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Page</title>
<style>
    body{
        background:green;
    }
    .container{
        text-align:center;
        margin: 150px;
    }
    @media(max-width:500px){
        img{
            width: 200px;
            margin-left:50px ;
        }
        h1,h2{
            margin-left:100px ;
        }
    }


</style>

</head>
<body>
    <div class="container">
        <img src="image/14.jpg" width="300px">
        <h1> Your Order Confirmed</h1>
        <h2>Thank you</h2>
    </div>
</body>
</html>