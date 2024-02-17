<?php
include 'koneksi.php';

// Tangkap parameter id pegawai dari URL
$id = $_GET['id'];

// Query untuk menghapus pegawai dari database
$query = "DELETE FROM user WHERE id = '$id'";
if ($conn->query($query) === TRUE) {
    header("Location: user.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
