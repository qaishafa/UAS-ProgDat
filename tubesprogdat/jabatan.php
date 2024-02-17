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

.container tr {
    padding: 15px 15px;
}

.container th {
    padding: 10px 10px 10px 10px;
}

.container td {
    padding: 15px 15px;
}

.container table {
    width: 100%;
    text-align: center;
}

.search {
    margin-top: 20px;
    margin-bottom: 20px; /* Memberikan jarak bawah antara formulir pencarian dan konten di atasnya */
    text-align: center; /* Mengatur agar elemen dalam div search menjadi pusat */

}

.search input[type="text"] {
    font-family: 'comic sans ms' ;
    padding: 10px; /* Menambahkan ruang bantalan di dalam input teks */
    border: 2px solid #ccc; /* Menambahkan garis tepi pada input teks */
    border-radius: 5px; /* Memberikan sudut bulat pada input teks */
    width: 300px; /* Menetapkan lebar input teks */
    font-size: 16px; /* Menetapkan ukuran font teks */
}

.search button {
    font-family: 'comic sans ms' ;
    padding: 10px 20px; /* Menambahkan ruang bantalan di dalam tombol */
    background-color: #C3E2C2;
    color: black; /* Menetapkan warna teks pada tombol */
    border: none; /* Menghilangkan border tombol */
    border-radius: 5px; /* Memberikan sudut bulat pada tombol */
    cursor: pointer; /* Mengubah kursor saat mengarah ke tombol */
    transition: background-color 0.3s; /* Efek transisi saat mengubah warna latar belakang tombol */
}

.search button:hover {
    background-color: #CD8D7A; /* Mengubah warna latar belakang tombol saat dihover */
}

.tambah {
    text-align: right;
}

.ubah-btn {
    background-color: red; /* Warna latar belakang */
    color: white; /* Warna teks */
    padding: 10px 10px; /* Padding tombol */
    text-align: center; /* Teks berada di tengah tombol */
    text-decoration: none; /* Hapus garis bawah */
    display: inline-block; /* Teks berada dalam satu baris */
    border-radius: 5px; /* Sudut bulat */
    transition: background-color 0.3s; /* Efek transisi hover */
    font-size: 12px;
}

.ubah-btn1 {
    background-color: orange; /* Warna latar belakang */
    color: white; /* Warna teks */
    padding: 10px 10px; /* Padding tombol */
    text-align: center; /* Teks berada di tengah tombol */
    text-decoration: none; /* Hapus garis bawah */
    display: inline-block; /* Teks berada dalam satu baris */
    border-radius: 5px; /* Sudut bulat */
    transition: background-color 0.3s; /* Efek transisi hover */
    font-size: 12px;
}

.ubah-btn:hover {
    background-color: #CD8D7A; /* Warna latar belakang saat dihover */
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
<body>
    <!-- Navigation -->
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="jabatan.php">Jabatan Kepegawaian</a></div>
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
        <h1>Jabatan Pegawai</h1>
        <div class="search">
                <form method="post" action="jabatan.php">
                <input type="text" name="keyword" placeholder="Cari Jabatan">
                <button type="submit">Cari</button>
                </form>
            <div class="tambah">
                <form method="post" action="tambahjabatan.php">
                    <button type="submit">Tambah Jabatan</button>
                </form>
            </div>
        </div>
        <?php if(isset($_POST['keyword'])): ?>
        <?php
include 'koneksi.php';

if(isset($_POST['keyword'])) {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM jabatan WHERE nama LIKE '%$keyword%'";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Kode Jabatan</th>";
        echo "<th>Nama jabatan</th>";
        echo "<th>Gaji</th>";
        echo "<th>Tunjangan</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["kd_jabatan"] . "</td>";
            echo "<td>" . $row["nama_jabatan"] . "</td>";
            echo "<td>" . $row["gaji"] . "</td>";
            echo "<td>" . $row["tunjangan"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Tidak ada hasil yang ditemukan.";
    }
    
    $conn->close();
}
?>
<?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Kode Jabatan</th>
                    <th>Nama Jabatan</th>
                    <th>Gaji</th>
                    <th>Tunjangan</th>
                    <th>Aksi</th>
                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                <?php
                // Sertakan file koneksi.php
                include 'koneksi.php';

                // Query untuk mengambil data pegawai
                $query = "SELECT * FROM jabatan";
                $result = $conn->query($query);

                // Periksa apakah ada hasil yang dikembalikan oleh query
                if ($result->num_rows > 0) {
                    // Tampilkan setiap baris data dalam bentuk tabel
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["kd_jabatan"] . "</td>";
                        echo "<td>" . $row["nama_jabatan"] . "</td>";
                        echo "<td>" . $row["gaji"] . "</td>";
                        echo "<td>" . $row["tunjangan"] . "</td>";
                        echo "<td><a href='editjabatan.php?id=" . $row["kd_jabatan"] . "' class='ubah-btn1'>Ubah</a></td>";
                        echo "<td><a href='hapusjabatan.php?id=" . $row["kd_jabatan"] . "' class='ubah-btn'>Hapus</a></td>";
                        // Tambahkan baris ini untuk setiap kolom yang ingin ditampilkan
                        echo "</tr>";
                    }
                } else {
                    // Tampilkan pesan jika tidak ada data
                    echo "<tr><td colspan='4'>Tidak ada data jabatan.</td></tr>";
                }

                // Tutup koneksi database
                $conn->close();
                ?>
            </tbody>
        </table>
        <?php endif; ?>
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