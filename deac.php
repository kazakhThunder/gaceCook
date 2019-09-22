<?php
session_start();
include('setConnection.php');
$username = $_SESSION['username'];
$pass=$_SESSION["pass"];
$ePass=$_POST["ePass"]; 
if(password_verify($ePass, $pass)) {
    $query="DELETE FROM users WHERE username='$username'";
    $result=mysqli_query($conn, $query);
    if ($result) {
        $_SESSION["print"]="Deactivated successfully";
    }
} else {
    $_SESSION["print"]="Incorrect password";
}
include("forgotDone.php");
mysqli_close($conn);
?>