<?php 
$conn = mysqli_connect('localhost', 'root', '');
if (mysqli_select_db($conn, 'GaceCook')) {
} else {
    $query = "CREATE DATABASE GaceCook";
    if ($result = $conn->query($query)) {
    } else {
        die("Could not establish connection");
    }
    mysqli_select_db($conn, 'GaceCook');
}
if(mysqli_query($conn,"DESCRIBE `users`")) {
    // Exists
}else{
    $query = "CREATE table users(name varchar(255),dob int,username varchar(255) PRIMARY KEY,password varchar(255))";
    mysqli_query($conn, $query);
}
echo mysqli_error($conn);
mysqli_close($conn);
?>