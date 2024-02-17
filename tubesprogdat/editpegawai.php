<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kepegawaian</title>
</head>
<style>
 * {
    text-decoration: none;
    margin: 0px;
    padding: 0px;
}

body {
    background-color: #C3E2C2;
    margin: 0px;
    padding: 0px;
    font-family: 'Open Sans',sans-serif;
}

.container {
    font-family: 'comic sans ms' ;
    color: #876445;
    max-width: 900px;
    margin: 50px auto;
    background-color: #DBCC95;
    border-radius: 10px;
    padding: 20px 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container td {
    padding: 15px 15px;
}

.container th {
    padding: 10px 10px 10px 10px;
}

.container table {
    width: 100%;
    text-align: center;
}

.pegawai input[type="text"] {
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 5px;
    width: 50%;
    display: flex;
    margin-bottom: 10px;
}

.pegawai button {
    padding: 10px 20px;
    background-color: #f4dfba;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
}

.pegawai button:hover {
    background-color: #eec373;
}

.logout {
    background-color: #C3E2C2; /* Warna latar belakang */
    padding: 10px 10px;
    border-radius: 10px; /* Sudut bulat */
}

h1 {
    text-align: center;
}
.card {
    background-color: #EAECCC;
    border-radius: 5px;
    padding: 20px;
    text-align: center;
    margin-bottom: 20px;
}
.card h2 {
    margin-top: 0;
}

.wrapper {
    width: 1100px;
    margin: auto;
    position: relative;
}

.logo a {
    font-family: 'comic sans ms' ;
    font-weight: 800;
    font-size: 50px;
    float: left;
    color: #876445;
}

.menu {
    float: right;
}

nav {
    width: 100%;
    margin: auto;
    line-height: 80px;
    display: flex;
    position: sticky;
    position: -webkit-sticky;
    top: 0px;
    background-color: #EAECCC;
    z-index: 1;
    border-bottom: 1px solid #876445;
}

nav ul {
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    overflow: hidden;
}

nav ul li {
    float: left;
}

nav ul li a {
    color: #ca965c;
    font-weight: bold;
    text-align: center;
    border-radius: 20px;
    padding: 0px 16px 0px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: none;
    background-color: #eec373;
}

section {
    margin: auto;
    display: flex;
    margin-bottom: 50px;
}

.kolom {
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: 50px;
    margin-right: 50px;
}

.kolom .deskripsi {
    font-size: 20px;
    font-weight: bold;
    font-family: 'comic sans ms';
    color: #ca965c;
}

h2 {
    font-family: 'comic sans ms';
    font-weight: bold;
    font-size: 45px;
    color: #ca965c;
    margin-bottom: 20px;
    width: 100%;
    line-height: 50px;
}

a.tbl-tbl {
    background-color: #f4dfba;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px 20px 15px 20px;
    color: #ffffff;
    cursor: pointer;
    font-weight: bold;
}

a.tbl-tbl:hover {
    text-decoration: none;
    background-color: #eec373;
}

p {
    margin: 15px 0px 15px 0px;
    padding: 15px 0px 15px 0px;
}


@media screen and (max-width:991.98px) {
    .wrapper {
        width: 90%;
    }

    .logo a {
        width: 100%;
        display: block;
        text-align: center;
    }

    nav .menu {
        margin: 0px;
        width: 100%;
    }

    nav .menu ul {
        text-align: center;
        margin: auto;
        line-height: 60%;
    }

    nav .menu ul li {
        display: inline-block;
        float: none;
    }

    section {
        display: block;
    }

    section img {
        display: block;
    }
    /* Gaya CSS untuk tabel */
    table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 100px; /* Atur jarak antara sel-sel di dalam tabel */
        }
        td {
            padding:20px 20px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        tr {
            padding : 20px 20px;
        }
        th {
            padding: 20px 20px;
            background-color: #f2f2f2;
            font-weight: bold;
            text-transform: uppercase;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        /* Gaya CSS untuk judul */
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        /* Gaya CSS untuk container */
        .contain {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }
}
</style>
<?php
include 'koneksi.php';
// Tangkap parameter id pegawai dari URL
$id_pegawai = $_GET['id'];

// Query untuk mengambil data pegawai berdasarkan id
$query = "SELECT * FROM pegawai WHERE id_pegawai = '$id_pegawai'";
$result = $conn->query($query);

// Periksa apakah data pegawai ditemukan
if ($result->num_rows > 0) {
    $pegawai = $result->fetch_assoc();
} else {
    echo "Data pegawai tidak ditemukan.";
    exit; // Keluar dari skrip jika data tidak ditemukan
}

// Tutup koneksi database
$conn->close();
?>
<body>
    <!-- Navigation -->
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="profil.php">Profil Kepegawaian</a></div>
            <div class="menu">
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="jabatan.php">Jabatan</a></li>
                    <li><a href="user.php">User</a></li>
                    <li><a onclick="confirmLogout()" class="logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
    <div class="container">
        <h1>Edit Pegawai</h1>
            <div class="pegawai">
                <form method="post" action="proseseditpegawai.php?id=<?php echo $pegawai['id_pegawai']; ?>">
                <div>
                    <input type="hidden" id="id_pegawai" name="id_pegawai" value="<?php echo $pegawai['id_pegawai']; ?>" required>
                </div>
                <div>
                    <label for="nama_pegawai">Nama Pegawai:</label>
                    <input type="text" id="nama_pegawai" name="nama_pegawai" value="<?php echo $pegawai['nama_pegawai']; ?>" required>
                </div>
                <div>
                    <label for="ttl">Tanggal Lahir:</label>
                    <input type="text" id="ttl" name="ttl" value="<?php echo $pegawai['ttl']; ?>" required>
                </div>
                <div>
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $pegawai['Jenis_kelamin']; ?>" required>
                </div>
                <div>
                    <label for="alamat">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" value="<?php echo $pegawai['Alamat']; ?>" required>
                </div>
                <div>
                    <label for="no_telp">Nomor Telepon:</label>
                    <input type="text" id="no_telp" name="no_telp" value="<?php echo $pegawai['no_telp']; ?>" required>
                </div>
                <div>
                    <label for="kd_jabatan">Kode Jabatan:</label>
                    <input type="text" id="kd_jabatan" name="kd_jabatan" value="<?php echo $pegawai['kd_jabatan']; ?>" required>
                </div>
                <button type="submit">Simpan Perubahan</button>
                </form>
            </div>
        </div>
</html>

<script>
    function confirmLogout() {
        var result = confirm("Apakah Anda yakin ingin logout?");
        if (result) {
            // Redirect ke halaman logout.php jika pengguna mengonfirmasi logout
            window.location.href = "logout.php";
        }
    }
</script>