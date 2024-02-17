<?php
include 'koneksi.php';

// Tangkap parameter id pegawai dari URL
$kd_jabatan = $_GET['id'];

// Query untuk menghapus pegawai dari database
$query = "DELETE FROM jabatan WHERE kd_jabatan = '$kd_jabatan'";
if ($conn->query($query) === TRUE) {
    header("Location: jabatan.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
