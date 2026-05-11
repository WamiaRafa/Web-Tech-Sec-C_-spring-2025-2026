<?php

session_start();
include" ../View/Login.php";
$hasnameError=true;
$haspasswordError=true;
$name=$_POST['fname'];
$pass=$_POST['password'];
if(!$name){
    $hasnameError=true;
    $_SESSION['usernameError']="name is required";

}
else{

$hasnameError=false;
unset($_SESSION['usernameError']);
}

if(!$pass){
    $haspasswordError=true;
      $_SESSION['passError']="password is required";

}
else{
    $hasnameError=false;
    unset($_SESSION["passError"]);

}
if($hasnameError||$haspasswordError){

$_SESSION['username']=$name;
Header("Location:../View/login.php ");
}

 else{ $isloggedIn=false;

$database= new db();
$connection=$database->connection();
$result=$database->signIn($connection, "info",$name, $pass);
  if($result->num_rows==1){ 
  while($row= $result->fetch_assoc()){
   $isloggedIn=true;
   $_SESSION['isLoggedIn']=true;
   $_SESSION["loggedName"]=$row["username"];
   Header("Location:../View/dashboard.php ");
  exit();
  }
  }
 
if(!isloggedIn){
    Header("Location:../View/login.php ");
    exit();
}
}
?>