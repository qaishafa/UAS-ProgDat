<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .judul {
            font-size: 36px;
            font-family: 'comic sans ms' ;
            font-weight: bold;
            margin-bottom: 36px;
        }   
        body {
            font-family: Arial, sans-serif;
            background-color: #C3E2C2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .login-container {
            font-family: 'comic sans ms' ;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            background-color: #EAECCC;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
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
            font-family: 'comic sans ms' ;
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
        .form-group .signup-link {
            font-family: 'comic sans ms' ;
            text-align: center;
            margin-top: 10px;
            background-color: #C3E2C2
        }
        .form-group .signup-link a {
            font-family: 'comic sans ms' ;
            color: #007bff;
            text-decoration: none;
        }
        .form-group .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="judul">
        Web Kepegawaian
    </div>
    <div class="login-container">
        <h2>Login</h2>
        <form action="proseslogin.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" placeholder="username" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" placeholder="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="form-group signup-link">
                Belum punya akun? <a href="signup.php">Daftar di sini</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
include 'koneksi.php';
?>