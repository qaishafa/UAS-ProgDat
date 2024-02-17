<?php
include 'koneksi.php';

// Tangkap data yang dikirimkan dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang diubah dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mengubah data pegawai dalam database
    $query_update = "UPDATE user SET 
                    nama = '$nama',
                    username = '$username',
                    password = '$password'
                    WHERE id = '$id'";
    // Eksekusi query untuk mengubah data
    if ($conn->query($query_update) === TRUE) {
        // Redirect ke halaman profil pegawai setelah perubahan berhasil
        header("Location: user.php");
        exit;
    } else {
        echo "Error: " . $query_update . "<br>" . $conn->error;
    }
}
?>
