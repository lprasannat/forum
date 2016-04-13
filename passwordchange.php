<?php
include("connection.php");
if(isset($_POST["submit"])){
session_start();
$Id=$_SESSION['id'];
$Query="select Password from UserTable where Id='$Id'";
$Result=mysqli_query($link,$Query);
if(!$Result){
    $Error="Could not get your details re-enter";
}
else{
$Row=mysqli_fetch_row($Result);
$OldPassword=$_POST["OldPassword"];
$NewPassword=$_POST["NewPassword"];
if($OldPassword==$Row[0]){
    $QueryInsert="update UserTable set Password='$NewPassword' where Id='$Id'";
    $ResultInsert=mysqli_query($link,$QueryInsert);
    if($ResultInsert){
        $Message="Password changed successfully";
    }
}
 else {
     $Error="Invalid password Please check password and re-enter";
}
}
}
?>
