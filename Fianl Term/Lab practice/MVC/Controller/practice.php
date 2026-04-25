<?php
session_start();
//variable declaration
//$color= "red";
//echo "my car is $color";
$name = "";
$password = "";
$datafile="../data.json";
$validpassword="";
//$name = $_POST["name"];
 //echo "User name :".$name; 

$email = test_input($_POST["email"]);
 
if (!preg_match("/^[\w._%+-]+@[\w.-]+\.[a-zA-Z]{2,}$/",$email)) {
  $emailErr = "Invalid email format";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
        $name = $_POST["name"];
        $password =$_POST["password"];

        $name = $_REQUEST["name"];
        $password =$_REQUEST["password"];

        if(!empty($name) && strlen($name)>=5&&strlen($password)>=4)
            {       echo"user name".$name;
                    $_SESSION["name"]=$name;
                    setcookie('name',$name,time()+3600,"/");
                    echo "log in Successful!";
                    $formdata=array("name"=>$name,"password"=>$password);
                    if(file_exists($datafile)){
                        $existdata=file_get_contents($datafile);
                        $tempdata=json_decode($existdata, true);
                    }

                    else{ tempdata=array();

                    }
                    if(!is_array($tempdata))
                        {
                            $tempdata=array();
                        }
                    $tempdata[]=$formdata;
                    $jsondata=json_encode($tempdata,JSON_PRETTY_PRINT);

                if(file_put_contents($datafile,$jsondata))
                    {echo "Data Saved";}
                else{
                    echo "Please Try Again";
                }
                $data=file_get_contents($datafile);
                $mydata=json_decode($data, true);

            }

            else{
                echo "please ensure the session cookies";
            }

            if(isset($_SESSION['name'])||isset($_COOKIE['name']))
                {echo "Welcome Back";}
            else{
                echo"log in Again";
            }
}

            ?>