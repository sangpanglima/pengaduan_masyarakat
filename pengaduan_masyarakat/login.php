<?php 
include 'conn/koneksi.php';

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($koneksi,$_POST['username']);
    $password = mysqli_real_escape_string($koneksi,md5($_POST['password']));

    $sql = mysqli_query($koneksi,"SELECT * FROM masyarakat WHERE username='$username' AND password='$password' ");
    $cek = mysqli_num_rows($sql);
    $data = mysqli_fetch_assoc($sql);

    $sql2 = mysqli_query($koneksi,"SELECT * FROM petugas WHERE username='$username' AND password='$password' ");
    $cek2 = mysqli_num_rows($sql2);
    $data2 = mysqli_fetch_assoc($sql2);

    if($cek>0){
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['data']=$data;
        $_SESSION['level']='masyarakat';
        header('location:masyarakat/');
    }
    elseif($cek2>0){
        if($data2['level']=="admin"){
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['data']=$data2;
            header('location:admin/');
        }
        elseif($data2['level']=="petugas"){
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['data']=$data2;
            header('location:petugas/');
        }
    }
    else{
        echo "<script>alert('Gagal Login Sob')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Pengaduan</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f4f4f9;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-card {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease;
        }
        .login-card h3 {
            text-align: center;
            color: #ff6f00;
            font-weight: 500;
        }
        .input-field input:focus + label {
            color: #ff6f00;
        }
        .input-field input:focus {
            border-bottom: 2px solid #ff6f00;
            box-shadow: none;
        }
        .btn-login {
            background-color: #ff6f00;
            width: 100%;
            padding: 10px;
            border-radius: 4px;
        }
        .btn-login:hover {
            background-color: #ff8c1a;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-card">
            <h3>Login Sistem Pengaduan</h3>
            <form method="POST">
                <div class="input-field">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" name="login" class="btn btn-login waves-effect waves-light">Login</button>
            </form>
            <div class="center-align" style="margin-top: 15px;">
                <a href="register.php" style="color: #ff6f00;">Belum punya akun? Registrasi disini</a>
            </div>
        </div>
    </div>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
