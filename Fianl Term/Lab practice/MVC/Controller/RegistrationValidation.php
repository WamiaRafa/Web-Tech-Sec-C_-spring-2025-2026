<?php
$name="";
$password="";
$mail="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['fname'];
    $password=$_POST['password'];
    $mail=$_POST['email'];
    if(!empty($name)&&strlen($name)>=5){
        echo " User Name : ".$name."<br>";
}
    
else {
    echo"<b>Try to follow our instructions !<b>";
}
if(strlen($password>=2)){
$validpass=$password;
}
else{
    $validpass="password must be contain minimum 2 chars";
}
if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
    $mailerr="Only letters and white space allowed";
    echo "<b>$mailerr<b><BR>";
}
else{
    $validmail=$mail;
    echo "Your mail: ".$mail; 
}
}

?>