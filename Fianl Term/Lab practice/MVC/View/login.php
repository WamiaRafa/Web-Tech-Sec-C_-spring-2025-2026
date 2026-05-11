<?php

session_start();

$usernameError=$_SESSION["usernameError"]??"";
  $passwordError=$_SESSION["passwordError"]??"";
$username=$_SESSION["username"]??"";

$loggingError = $_SESSION["loggingError"]??"";
$isLoggedIn = $_SESSION["isLoggedIn"]??"";


if($isLoggedIn){
    Header("Location: dashboard.php");
    exit();
}

unset($_SESSION["usernameError"]);
unset($_SESSION["passwordError"]);
unset($_SESSION["username"]);
unset($_SESSION["loggingError"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <div >
    
    <form  method="post" action="../Controller/loginValidation.php">
    
      <table>

      <tr><td><h3>Sign In</h3></td></tr>
            <tr>
            <td><label for=fname><b>Name:</b>
            <input type="text" name="fname" value="<?php  echo"$username" ;?>">
            </td>     


            
            <td><?php echo "$usernameError"; ?>

           </td> 


            </tr> 
             <br>
            
            <br>
            <tr>
            <td><label for=password><b>Password:</b>
            <input type="password" name="password">
            </td> 
            <td style="color:red"><?php echo "$passwordError";?> 
            <td style="color:red"><?php echo "$loggingError";?></td>
  
            </tr> 
            
            <tr>

            <td><label for=submit><b>Submit:</b>
            <input type="Submit" name="submit" value="login">
            </td>   
            </tr> 







</table>


</form>
</div>

</body>
</html>