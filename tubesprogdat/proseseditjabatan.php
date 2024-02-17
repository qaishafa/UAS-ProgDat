<?php
include 'koneksi.php';

// Tangkap data yang dikirimkan dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang diubah dari formulir
    $kd_jabatan = $_POST['kd_jabatan'];
    $nama_jabatan = $_POST['nama_jabatan'];
    $gaji = $_POST['gaji'];
    $tunjangan = $_POST['tunjangan'];

    // Query untuk mengubah data pegawai dalam database
    $query_update = "UPDATE jabatan SET 
                    nama_jabatan = '$nama_jabatan',
                    gaji = '$gaji',
                    tunjangan = '$tunjangan'
                    WHERE kd_jabatan = '$kd_jabatan'";
    // Eksekusi query untuk mengubah data
    if ($conn->query($query_update) === TRUE) {
        // Redirect ke halaman profil pegawai setelah perubahan berhasil
        header("Location: jabatan.php");
        exit;
    } else {
        echo "Error: " . $query_update . "<br>" . $conn->error;
    }
}
?>
