<?php

$conn=mysqli_connect("localhost","root","","register");
if(mysqli_error($conn))
{
    echo " Error !";
}
else
{
     echo " successful !";
}
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$sql= "INSERT INTO sign_up(name,email,password,cpassword) values ('$name','$email','$password','$cpassword')";
if($conn->query($sql)==true)
{
     echo " <br>successful inserted !";
}
else
{
     echo " Error !";
}


?>