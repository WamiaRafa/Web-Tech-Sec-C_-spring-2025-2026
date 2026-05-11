<?php
session_start();
include "../Model/db.php";
$name="";
$password="";
$mail="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST['fname'];
$password=$_POST['password'];
    if(!empty($name)&&strlen($name)>=5&&strlen($password)>=5){
        $_SESSION['name']=$name;
        setcookie("Username",$name,time()+3600,"/" ); 
        $database=new db();
        $connection=$database->connection();
        $result=$database->signUp($connection,"info",$name, $password);
    
        if($result){
            Header("Location:../View/login.php");
            exit();
        }
        else{
            echo"database error";
        }
    }
    else{
    echo"not successfully";
    }
}

?>