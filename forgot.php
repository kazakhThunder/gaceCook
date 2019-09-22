<?php
session_start();
include('setConnection.php');
$username = $_POST['username'];
$npass = $_POST['pass'];
$hashed_password = password_hash($npass, PASSWORD_DEFAULT);
$name = $_POST['name'];
$age = $_POST['age'];
$query="SELECT * FROM users WHERE username='$username' AND dob=$age AND name='$name'";
$result=mysqli_query($conn, $query);
if (mysqli_num_rows($result)) {
    $query="UPDATE users SET password='$hashed_password' WHERE username='$username' AND name='$name' AND dob=$age";
    $result=mysqli_query($conn, $query);
    if ($result) {
        $_SESSION["print"]="Password changed successfully";
    }
} else {
    $_SESSION["print"]="Incorrect credentials. Please try again.";
}
include("forgotDone.php");
mysqli_close($conn);
?>
