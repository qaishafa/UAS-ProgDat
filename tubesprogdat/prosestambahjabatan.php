<?php
// Sertakan file koneksi.php
include 'koneksi.php';

// Tangkap data yang dikirimkan dari form
$kd_jabatan = $_POST['kd_jabatan'];
$nama_jabatan = $_POST['nama_jabatan'];
$gaji = $_POST['gaji'];
$tunjangan = $_POST['tunjangan'];

// Query untuk menyimpan data pegawai baru ke dalam database
$query = "INSERT INTO jabatan (kd_jabatan, nama_jabatan, gaji, tunjangan) VALUES ('$kd_jabatan', '$nama_jabatan', '$gaji', '$tunjangan')";

if ($conn->query($query) === TRUE) {
    header("Location: jabatan.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>