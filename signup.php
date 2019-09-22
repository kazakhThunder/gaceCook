<?php
include('setConnection.php');
session_start();
$username = $_POST['username'];
$password = $_POST['pass'];
$name = $_POST['name'];
$age = $_POST['age'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO users VALUES ('$name',$age,'$username','$hashed_password')";
if ($result = mysqli_query($conn, $query)) {
    $_SESSION["print"]="Account created";
} else {
    $_SESSION["print"]="Username not available. Please try again.";
}
include("forgotDone.php");
mysqli_close($conn);
?>


