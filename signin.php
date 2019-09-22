<?php
include('setConnection.php');
$username=$_POST['username'];
$password=$_POST['pass'];
$query="SELECT * FROM users WHERE username='$username'";
$result=mysqli_query($conn, $query);
if (mysqli_num_rows($result)) {
    session_start();
    $res=mysqli_fetch_assoc($result);
    if (password_verify($password, $res["password"])) {
        $_SESSION["username"]=$username;
        $_SESSION["pass"]=$res["password"];
        $_SESSION["name"]=$res["name"];
        $_SESSION["age"]=$res["dob"];
        $_SESSION["loggedin"]=true;
        include("loggedin.php");
    } else {
        $_SESSION["print"]="Incorrect credentials. Please try again."; 
        include("forgotDone.php");
    }
} else {
    session_start();
    $_SESSION["print"]="Incorrect credentials. Please try again.";
    include("forgotDone.php");
}
mysqli_close($conn);
?>

