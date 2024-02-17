<?php
// Sertakan file koneksi.php
include 'koneksi.php';

// Tangkap data yang dikirimkan dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk menyimpan data pegawai baru ke dalam database
$query = "INSERT INTO user (nama, username, password) VALUES ('$nama', '$username', '$password')";

if ($conn->query($query) === TRUE) {
    header("Location: user.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>