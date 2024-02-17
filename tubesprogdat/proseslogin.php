<?php
session_start();

include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Melakukan query untuk memeriksa apakah kredensial cocok dengan yang ada dalam database
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0 ) {
            header("Location: dashboard.php");
            exit;
        } else {
            header("Location: index.php?error=invalid_username_or_password");
    }
?>
