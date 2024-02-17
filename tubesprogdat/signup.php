<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #C3E2C2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signup-container {
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            background-color: #EAECCC;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .signup-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
        .form-group input {
            width: calc(100% - 16px);
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        .form-group input:focus {
            border-color: #007bff;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #DBCC95;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-group button:hover {
            background-color: #CD8D7A;
        }
        .form-group .login-link {
            text-align: center;
            margin-top: 10px;
        }
        .form-group .login-link a {
            color: #007bff;
            text-decoration: none;
        }
        .form-group .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="prosessignup.php" method="POST">
            <div class="form-group">
                <label for="new_nama">Nama:</label>
                <input type="text" placeholder="nama" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="new_username">Username:</label>
                <input type="text" placeholder="username" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="new_password">Password:</label>
                <input type="password" placeholder="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Sign Up</button>
            </div>
            <div class="form-group login-link">
                Sudah punya akun? <a href="index.php">Login di sini</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
include 'koneksi.php';
?>
