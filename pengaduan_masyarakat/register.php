<?php 
include 'conn/koneksi.php';

if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($koneksi,$_POST['username']);
    $password = mysqli_real_escape_string($koneksi,md5($_POST['password']));
    $nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
    $nik = mysqli_real_escape_string($koneksi,$_POST['nik']);
    $telp = mysqli_real_escape_string($koneksi,$_POST['telp']); // Ganti no_hp menjadi telp

    // Cek apakah username sudah terdaftar
    $cekUsername = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE username='$username'");
    if(mysqli_num_rows($cekUsername) > 0){
        echo "<script>alert('Username sudah terdaftar!')</script>";
    } else {
        // Proses registrasi
        $query = "INSERT INTO masyarakat (username, password, nama, nik, telp) 
                  VALUES ('$username', '$password', '$nama', '$nik', '$telp')";
        if(mysqli_query($koneksi, $query)){
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href = 'login.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal!')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Sistem Pengaduan</title>
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
        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .register-card {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease;
        }
        .register-card h3 {
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
        .btn-register {
            background-color: #ff6f00;
            width: 100%;
            padding: 10px;
            border-radius: 4px;
        }
        .btn-register:hover {
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

    <div class="register-container">
        <div class="register-card">
            <h3>Registrasi Akun</h3>
            <form method="POST">
                <div class="input-field">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-field">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="input-field">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" name="nik" required>
                </div>
                <div class="input-field">
                    <label for="telp">Nomor Telepon</label>
                    <input type="text" id="telp" name="telp" required>
                </div>
                <button type="submit" name="register" class="btn btn-register waves-effect waves-light">Registrasi</button>
            </form>
            <div class="center-align" style="margin-top: 15px;">
                <a href="login.php" style="color: #ff6f00;">Sudah punya akun? Login disini</a>
            </div>
        </div>
    </div>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
