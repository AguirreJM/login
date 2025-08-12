<?php

$conn = mysqli_connect("localhost", "root", "", "psits");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM Students WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "SUCCESS";
        exit();      
    } else {
        echo "MALA GID YA";
    }
    
    mysqli_close($conn);
} else {
    header("Location: index.html");
    exit();
}
?>