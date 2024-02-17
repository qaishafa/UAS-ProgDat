<?php
session_start();

include 'koneksi.php';

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Melakukan query untuk memeriksa apakah kredensial cocok dengan yang ada dalam database
    $query = "INSERT INTO user (nama, username, password)
                VALUES ('$nama','$username','$password')";
    $result = mysqli_query($conn, $query);

    if (mysqli_query($conn,$query)) {
            header("Location: index.php?success=registration_successful");
            exit;
        } else {
            header("Location: index.php?error=invalid_nama_or_username_or_password");
    }
?>