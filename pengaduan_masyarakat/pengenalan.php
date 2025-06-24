<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengenalan Sistem Pengaduan</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #e3f2fd, #f1f8e9);
      overflow-x: hidden;
    }

    /* Header */
    .header {
      background: #2196F3;
      color: white;
      padding: 30px 20px;
      text-align: center;
      position: relative;
    }

    .header img.logo {
      position: absolute;
      left: 20px;
      top: 20px;
      width: 60px;
    }

    /* Konten Utama */
    .content {
      padding: 40px 30px;
      max-width: 900px;
      margin: 40px auto;
      background: white;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }

    .content h2 {
      margin-top: 0;
      color: #2e7d32;
    }

    .content ul {
      margin-left: 20px;
    }

    .content img.illustration {
      width: 100%;
      margin-top: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    /* Tombol Login */
    .btn {
      background: #4CD964;
      color: white;
      padding: 14px 35px;
      border: none;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
      display: inline-block;
      transition: 0.3s ease-in-out;
    }

    .btn:hover {
      background: #43c156;
      transform: scale(1.05);
    }

    .btn-container {
      text-align: center;
      margin-top: 30px;
    }

    /* Footer */
    .footer {
      text-align: center;
      padding: 20px;
      font-size: 13px;
      color: #666;
    }

    /* Responsif */
    @media screen and (max-width: 600px) {
      .header img.logo {
        width: 45px;
        top: 15px;
        left: 15px;
      }
      .content {
        margin: 20px;
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="header" data-aos="fade-down">
    <img src="pku.png" alt="Logo UIN Suska Riau" class="logo">
    <h1>Sistem Pengaduan Masyarakat</h1>
    <p>Berbasis Lokasi - UIN Suska Riau</p>
  </div>

  <div class="content" data-aos="fade-up">
    <h2>👋 Selamat Datang!</h2>
    <p>
      Sistem ini dirancang untuk memudahkan masyarakat dalam menyampaikan pengaduan secara online,
      dengan keamanan tambahan berupa <b>deteksi lokasi otomatis</b>. Hanya pengguna yang berada di sekitar
      <b>UIN Suska Riau</b> (radius 10 km) yang dapat login terima kasih.
    </p>

    <p>Fitur-fitur utama:</p>
    <ul>
      <li>✅ Login berbasis lokasi (radius 10 km)</li>
      <li>✅ Akses berdasarkan peran: Masyarakat, Petugas, Admin</li>
      <li>✅ Tampilan modern dan mobile-friendly</li>
      <li>✅ Layanan pengaduan online real-time</li>
    </ul>

    <img src="/mnt/data/A_screenshot_of_a_webpage_introduces_a_location-ba.png" alt="Ilustrasi Sistem Pengaduan" class="illustration">

    <div class="btn-container">
      <a href="login.php" class="btn">🔐 Masuk ke Sistem</a>
    </div>
  </div>

  <div class="footer">
    &copy; <?= date('Y') ?> - Sistem Pengaduan UIN Suska Riau
  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
