<?php
session_start();
$name="";
$password="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST['fname'];
$password=$_POST['password'];


if(!empty($name)&&strlen($password)>=5){
    $_SESSION["fname"]=$name;
    setcookie('fname',$name,time()+3600,"/");
    echo"log in Successfull";
}
else{
     echo "please ensure session cookies";
}
}
if(isset($_SESSION['fname'])||isset($_COOKIE['fname']))
{
    echo "welcome back";
}
else{
    echo "login again";
}


?>