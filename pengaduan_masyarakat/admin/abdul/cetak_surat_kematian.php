<?php
// Ambil data dari formulir dan bersihkan untuk keamanan dasar
// Data Almarhum/Almarhumah
$nama_jenazah = isset($_POST['nama_jenazah']) ? htmlspecialchars($_POST['nama_jenazah']) : '[Data tidak diisi]';
$nik_jenazah = isset($_POST['nik_jenazah']) ? htmlspecialchars($_POST['nik_jenazah']) : '[Data tidak diisi]';
$jk_jenazah = isset($_POST['jk_jenazah']) ? htmlspecialchars($_POST['jk_jenazah']) : '[Data tidak diisi]';
$umur_jenazah = isset($_POST['umur_jenazah']) ? htmlspecialchars($_POST['umur_jenazah']) : '[Data tidak diisi]';
$alamat_jenazah = isset($_POST['alamat_jenazah']) ? htmlspecialchars($_POST['alamat_jenazah']) : '[Data tidak diisi]';

// Detail Kematian
$tanggal_kematian_raw = isset($_POST['tanggal_kematian']) ? $_POST['tanggal_kematian'] : date('Y-m-d');
$waktu_kematian = isset($_POST['waktu_kematian']) ? htmlspecialchars($_POST['waktu_kematian']) : '[Data tidak diisi]';
$tempat_kematian = isset($_POST['tempat_kematian']) ? htmlspecialchars($_POST['tempat_kematian']) : '[Data tidak diisi]';
$penyebab_kematian = isset($_POST['penyebab_kematian']) ? htmlspecialchars($_POST['penyebab_kematian']) : '[Data tidak diisi]';

// Data Pelapor
$nama_pelapor = isset($_POST['nama_pelapor']) ? htmlspecialchars($_POST['nama_pelapor']) : '[Data tidak diisi]';
$hubungan_pelapor = isset($_POST['hubungan_pelapor']) ? htmlspecialchars($_POST['hubungan_pelapor']) : '[Data tidak diisi]';

// Format tanggal ke dalam Bahasa Indonesia
setlocale(LC_TIME, 'id_ID.UTF-8', 'Indonesian');
$tanggal_surat = strftime('%e %B %Y');
$hari_kematian = strftime('%A', strtotime($tanggal_kematian_raw));
$tanggal_kematian_formatted = strftime('%e %B %Y', strtotime($tanggal_kematian_raw));

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Surat Keterangan Kematian  - <?php echo $nama_jenazah; ?></title>
    <style>
        @page {
            size: 215mm 330mm; /* Ukuran kertas F4 */
            margin: 0;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            line-height: 1.5;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        .container {
            background: white;
            width: 21.5cm;
            min-height: 33cm;
            padding: 2cm;
            border: 1px #D3D3D3 solid;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        .kop-surat {
            display: flex; align-items: center; gap: 20px;
            text-align: center; border-bottom: 4px double #000;
            padding-bottom: 15px; margin-bottom: 25px;
        }
        .kop-surat .logo { width: 85px; height: 85px; }
        .kop-surat .text-container { flex-grow: 1; }
        .kop-surat h2, .kop-surat h3, .kop-surat p { margin: 0; }
        .judul-surat { text-align: center; margin-bottom: 15px; }
        .judul-surat h4 { margin: 0; font-weight: bold; text-decoration: underline; }
        .nomor-surat { text-align: center; margin-bottom: 25px; }
        .isi-surat { text-align: justify; margin-bottom: 15px; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        table td { padding: 4px 0; vertical-align: top; }
        table.data-table td:first-child { width: 30%; }
        table.data-table td:nth-child(2) { width: 5%; text-align: center; }
        .penutup { margin-top: 25px; }
        .ttd-section { margin-top: 50px; text-align: right; }
        .ttd-section .nama-pejabat { margin-top: 80px; font-weight: bold; text-decoration: underline; }
        .print-button { display: block; width: 100%; max-width: 21.5cm; padding: 12px; margin: 20px auto 0; background-color: #007bff; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; text-align: center; }

        @media print {
            body { background: none; padding: 0; }
            .container { box-shadow: none; border: none; margin: 0; padding: 2cm; border-radius: 0; }
            .print-button { display: none; }
        }
    </style>
</head>
<body>
    <div>
        <div class="container">
            <div class="kop-surat">
                <img src="../../img/kampar.png" alt="Logo Kabupaten" class="logo">
                <div class="text-container">
                    <h2>PEMERINTAH KABUPATEN KAMPAR</h2>
                    <h3>KECAMATAN TAPUNG</h3>
                    <p>Jalan Pembangunan No. 1, Kode Pos: 12345, Telp: (021) 123-4567</p>
                </div>
            </div>

            <div class="judul-surat">
                <h4>SURAT KETERANGAN KEMATIAN</h4>
            </div>
            <div class="nomor-surat">
                <span>Nomor: 474.3 / ... / ... / <?php echo date('Y'); ?></span>
            </div>

            <div class="isi-surat">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini, Kepala Desa Sumber Makmur, Kecamatan Tapung, Kabupaten Kampar, dengan ini menerangkan dengan sebenarnya bahwa:</p>
            </div>

            <table class="data-table">
                <tr><td>Nama Lengkap</td><td>:</td><td><strong><?php echo $nama_jenazah; ?></strong></td></tr>
                <tr><td>NIK</td><td>:</td><td><?php echo $nik_jenazah; ?></td></tr>
                <tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $jk_jenazah; ?></td></tr>
                <tr><td>Umur</td><td>:</td><td><?php echo $umur_jenazah; ?> Tahun</td></tr>
                <tr><td>Alamat Terakhir</td><td>:</td><td><?php echo $alamat_jenazah; ?></td></tr>
            </table>
            
            <div class="isi-surat">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telah meninggal dunia pada:</p>
            </div>
            
            <table class="data-table">
                <tr><td>Hari / Tanggal</td><td>:</td><td><?php echo $hari_kematian . ', ' . $tanggal_kematian_formatted; ?></td></tr>
                <tr><td>Waktu</td><td>:</td><td>Pukul <?php echo $waktu_kematian; ?> WIB</td></tr>
                <tr><td>Bertempat di</td><td>:</td><td><?php echo $tempat_kematian; ?></td></tr>
                <tr><td>Penyebab Kematian</td><td>:</td><td><?php echo $penyebab_kematian; ?></td></tr>
            </table>

            <div class="isi-surat">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat keterangan ini dibuat berdasarkan laporan dari:</p>
            </div>

            <table class="data-table">
                <tr><td>Nama Pelapor</td><td>:</td><td><?php echo $nama_pelapor; ?></td></tr>
                <tr><td>Hubungan</td><td>:</td><td><?php echo $hubungan_pelapor; ?></td></tr>
            </table>

            <div class="isi-surat penutup">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat untuk dapat dipergunakan sebagaimana mestinya.</p>
            </div>

            <div class="ttd-section">
                <span>Kabupaten Kampar, <?php echo $tanggal_surat; ?></span><br>
                <span>Kepala Desa Sumber Makmur</span>
                <div class="nama-pejabat">H . Basroni   
                </div>
            </div>
        </div>
        <button onclick="window.print()" class="print-button">Cetak Halaman Ini</button>
    </div>
</body>
</html>
