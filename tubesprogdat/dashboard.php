<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kepegawaian</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
include 'koneksi.php';
// Query untuk mengambil jumlah karyawan
$query = "SELECT COUNT(*) AS id_pegawai FROM pegawai";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalpegawai = $row["id_pegawai"];
} else {
    $totalpegawai = 0;
}

$conn->close();
?>
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
    max-width: 800px;
    margin: 50px auto;
    background-color: #DBCC95;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

.logout {
    background-color: #C3E2C2; /* Warna latar belakang */
    padding: 10px 10px;
    border-radius: 10px; /* Sudut bulat */
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
}
</style>
<body>
    <!-- Navigation -->
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="dashboard.php">Dashboard Kepegawaian</a></div>
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
    <div class="container">
        <h1>Selamat datang di Dashboard Utama</h1>
        <div class="card">
            <h2>Jumlah total karyawan</h2>
            <p><?php echo $totalpegawai; ?> Karyawan</p>
        </div>
    </div>
 
</body>
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