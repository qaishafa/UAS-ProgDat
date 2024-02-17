<?php
include 'koneksi.php';

// Tangkap parameter id pegawai dari URL
$id_pegawai = $_GET['id'];

// Query untuk menghapus pegawai dari database
$query = "DELETE FROM pegawai WHERE id_pegawai = '$id_pegawai'";
if ($conn->query($query) === TRUE) {
    header("Location: profil.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
