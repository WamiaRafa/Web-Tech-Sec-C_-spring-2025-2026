<?php
class db{

function connection(){
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="info";
$connection=new mysqli($db_host, $db_user,$db_pass,$db_name );
 if($connection->connect_error){

 die("please ensure your connection ".$connection->connect_error);
 }

return $connection;
}


 function signUp($connection , $tablename, $username, $password){
   $sql=" INSERT INTO ".$tablename." (username, password)VALUES('".$username."', '".$password."')";
   $result=$connection->query($sql);
   return $result;

 }
function signIn($connection , $tablename, $username, $password){
   $sql="SELECT *FROM ".$tablename." WHERE username='".$username."' AND password='".$password."' ";
   $result= $connection->query($sql);
   return $result;

 }




}








?>