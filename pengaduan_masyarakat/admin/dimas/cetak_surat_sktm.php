<?php
// Ambil data dari formulir dan lakukan sanitasi dasar untuk keamanan
$nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '[Nama tidak diisi]';
$nik = isset($_POST['nik']) ? htmlspecialchars($_POST['nik']) : '[NIK tidak diisi]';
$jk = isset($_POST['jk']) ? htmlspecialchars($_POST['jk']) : '[Jenis kelamin tidak diisi]';
$umur = isset($_POST['umur']) ? htmlspecialchars($_POST['umur']) : '[Umur tidak diisi]';
$agama = isset($_POST['agama']) ? htmlspecialchars($_POST['agama']) : '[Agama tidak diisi]';
$status = isset($_POST['status']) ? htmlspecialchars($_POST['status']) : '[Status tidak diisi]';
$pekerjaan = isset($_POST['pekerjaan']) ? htmlspecialchars($_POST['pekerjaan']) : '[Pekerjaan tidak diisi]';
$kwn = isset($_POST['kwn']) ? htmlspecialchars($_POST['kwn']) : '[Kewarganegaraan tidak diisi]';
$alamat = isset($_POST['alamat']) ? htmlspecialchars($_POST['alamat']) : '[Alamat tidak diisi]';
$nama_ayah = isset($_POST['nama_ayah']) ? htmlspecialchars($_POST['nama_ayah']) : '[Nama ayah tidak diisi]';
$pekerjaan_ayah = isset($_POST['pekerjaan_ayah']) ? htmlspecialchars($_POST['pekerjaan_ayah']) : '[Pekerjaan ayah tidak diisi]';
$penghasilan = isset($_POST['penghasilan']) ? number_format((float)$_POST['penghasilan'], 0, ',', '.') : '[Penghasilan tidak diisi]';
$keperluan = isset($_POST['keperluan']) ? htmlspecialchars($_POST['keperluan']) : '[Keperluan tidak diisi]';

// Mengatur zona waktu dan format tanggal dalam Bahasa Indonesia
date_default_timezone_set('Asia/Jakarta');
setlocale(LC_TIME, 'id_ID.UTF-8', 'id_ID', 'Indonesian');
$tanggal_surat = strftime('%e %B %Y');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Surat Keterangan Tidak Mampu - <?php echo $nama; ?></title>
    <style>
        @page {
            size: 215mm 330mm; /* Ukuran kertas F4 */
            margin: 2cm;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            line-height: 1.5;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            padding: 20px;
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
            display: flex;
            align-items: center;
            gap: 20px;
            text-align: center;
            border-bottom: 4px double #000;
            padding-bottom: 15px;
            margin-bottom: 25px;
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
        table td:first-child { width: 35%; }
        table td:nth-child(2) { width: 5%; text-align: center; }
        .penutup { margin-top: 25px; }
        .ttd-section { margin-top: 50px; text-align: right; }
        .ttd-section .nama-pejabat { margin-top: 80px; font-weight: bold; text-decoration: underline; }
        .print-button { display: block; width: 100%; padding: 12px; margin: 30px auto 0; background-color: #007bff; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; text-align: center; }
        @media print {
            body { background: none; padding: 0; }
            .container { box-shadow: none; border: none; margin: 0; padding: 0; border-radius: 0; }
            .print-button { display: none; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="kop-surat">
            <img src="../../img/rohil.png" alt="Logo Kabupaten" class="logo">
            <div class="text-container">
                <h2>PEMERINTAH KABUPATEN ROKAN HILIR</h2>
                <h3>KECAMATAN BAGAN SINEMBAH</h3>
                <p>Jalan Pembangunan No. 1, Kode Pos: 12345, Telp: (021) 123-4567</p>
            </div>
        </div>

        <div class="judul-surat">
            <h4>SURAT KETERANGAN TIDAK MAMPU</h4>
        </div>
        <div class="nomor-surat">
            <span>Nomor: 470 / ... / ... / ....</span>
        </div>

        <div class="isi-surat">
            <p>Yang bertanda tangan di bawah ini Lurah Bagan Batu Kota Kecamatan Bagan Sinembah, Kabupaten Rokan Hilir, dengan ini menerangkan bahwa:</p>
        </div>

        <table>
            <tr><td>Nama Lengkap</td><td>:</td><td><?php echo $nama; ?></td></tr>
            <tr><td>NIK</td><td>:</td><td><?php echo $nik; ?></td></tr>
            <tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $jk; ?></td></tr>
            <tr><td>Umur</td><td>:</td><td><?php echo $umur; ?> Tahun</td></tr>
            <tr><td>Agama</td><td>:</td><td><?php echo $agama; ?></td></tr>
            <tr><td>Status Perkawinan</td><td>:</td><td><?php echo $status; ?></td></tr>
            <tr><td>Pekerjaan</td><td>:</td><td><?php echo $pekerjaan; ?></td></tr>
            <tr><td>Alamat</td><td>:</td><td><?php echo $alamat; ?></td></tr>
        </table>
        
        <div class="isi-surat">
            <p>Bahwa nama tersebut di atas adalah benar penduduk desa kami yang bertempat tinggal di alamat tersebut dan berdasarkan data yang ada pada kami serta sepengetahuan kami, yang bersangkutan adalah benar berasal dari keluarga yang tergolong <strong>tidak mampu</strong>.</p>
            <p>Data orang tua/wali yang bersangkutan adalah sebagai berikut:</p>
        </div>
        
        <table>
            <tr><td>Nama Ayah</td><td>:</td><td><?php echo $nama_ayah; ?></td></tr>
            <tr><td>Pekerjaan Ayah</td><td>:</td><td><?php echo $pekerjaan_ayah; ?></td></tr>
            <tr><td>Penghasilan</td><td>:</td><td>Rp. <?php echo $penghasilan; ?>,-</td></tr>
        </table>

        <div class="isi-surat penutup">
            <p>Surat keterangan ini dibuat untuk keperluan: <strong><?php echo $keperluan; ?></strong>.</p>
            <p>Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
        </div>

        <div class="ttd-section">
            <span>Kabupaten Rokan Hilir, <?php echo $tanggal_surat; ?></span><br>
            <span>Lurah Bagan Sinembah</span>
            <div class="nama-pejabat">Bambang Sudarman,S.Pd</div>
        </div>
        
        <button onclick="window.print()" class="print-button">Cetak Halaman Ini</button>
    </div>
</body>
</html>
