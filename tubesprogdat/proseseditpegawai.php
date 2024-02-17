<?php
include 'koneksi.php';

// Tangkap data yang dikirimkan dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang diubah dari formulir
    $id_pegawai = $_POST['id_pegawai']; // Anda perlu mendapatkan id pegawai terlebih dahulu
    $nama_pegawai = $_POST['nama_pegawai'];
    $ttl = $_POST['ttl'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $kd_jabatan = $_POST['kd_jabatan'];

    // Query untuk mengubah data pegawai dalam database
    $query_update = "UPDATE pegawai SET
                    nama_pegawai = '$nama_pegawai',
                    ttl = '$ttl',
                    Jenis_kelamin = '$jenis_kelamin',
                    Alamat = '$alamat',
                    no_telp = '$no_telp',
                    kd_jabatan = '$kd_jabatan'
                    WHERE id_pegawai = '$id_pegawai'";

    // Eksekusi query untuk mengubah data
    if ($conn->query($query_update) === TRUE) {
        // Redirect ke halaman profil pegawai setelah perubahan berhasil
        header("Location: profil.php");
        exit;
    } else {
        echo "Error: " . $query_update . "<br>" . $conn->error;
    }
}
?>
