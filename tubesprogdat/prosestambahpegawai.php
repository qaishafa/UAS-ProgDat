<?php
// Sertakan file koneksi.php
include 'koneksi.php';

// Tangkap data yang dikirimkan dari form
$nama_pegawai = $_POST['nama_pegawai'];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$kd_jabatan = $_POST['kd_jabatan'];

// Query untuk menyimpan data pegawai baru ke dalam database
$query = "INSERT INTO pegawai (nama_pegawai, ttl, Jenis_kelamin, Alamat, no_telp, kd_jabatan) VALUES ('$nama_pegawai', '$ttl', '$jenis_kelamin', '$alamat', '$no_telp', '$kd_jabatan')";

if ($conn->query($query) === TRUE) {
    header("Location: profil.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>