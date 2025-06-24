<?php
// Mengambil dan membersihkan data dari form
// Data Calon Suami
$nama_suami = isset($_POST['nama_suami']) ? htmlspecialchars($_POST['nama_suami']) : '[Data tidak diisi]';
$bin_suami = isset($_POST['bin_suami']) ? htmlspecialchars($_POST['bin_suami']) : '[Data tidak diisi]';
$nik_suami = isset($_POST['nik_suami']) ? htmlspecialchars($_POST['nik_suami']) : '[Data tidak diisi]';
$tempat_lahir_suami = isset($_POST['tempat_lahir_suami']) ? htmlspecialchars($_POST['tempat_lahir_suami']) : '[Data tidak diisi]';
$tanggal_lahir_suami_raw = isset($_POST['tanggal_lahir_suami']) ? $_POST['tanggal_lahir_suami'] : date('Y-m-d');
$agama_suami = isset($_POST['agama_suami']) ? htmlspecialchars($_POST['agama_suami']) : '[Data tidak diisi]';
$pekerjaan_suami = isset($_POST['pekerjaan_suami']) ? htmlspecialchars($_POST['pekerjaan_suami']) : '[Data tidak diisi]';
$status_suami = isset($_POST['status_suami']) ? htmlspecialchars($_POST['status_suami']) : '[Data tidak diisi]';
$alamat_suami = isset($_POST['alamat_suami']) ? htmlspecialchars($_POST['alamat_suami']) : '[Data tidak diisi]';

// Data Calon Istri
$nama_istri = isset($_POST['nama_istri']) ? htmlspecialchars($_POST['nama_istri']) : '[Data tidak diisi]';
$binti_istri = isset($_POST['binti_istri']) ? htmlspecialchars($_POST['binti_istri']) : '[Data tidak diisi]';
$nik_istri = isset($_POST['nik_istri']) ? htmlspecialchars($_POST['nik_istri']) : '[Data tidak diisi]';
$tempat_lahir_istri = isset($_POST['tempat_lahir_istri']) ? htmlspecialchars($_POST['tempat_lahir_istri']) : '[Data tidak diisi]';
$tanggal_lahir_istri_raw = isset($_POST['tanggal_lahir_istri']) ? $_POST['tanggal_lahir_istri'] : date('Y-m-d');
$agama_istri = isset($_POST['agama_istri']) ? htmlspecialchars($_POST['agama_istri']) : '[Data tidak diisi]';
$pekerjaan_istri = isset($_POST['pekerjaan_istri']) ? htmlspecialchars($_POST['pekerjaan_istri']) : '[Data tidak diisi]';
$status_istri = isset($_POST['status_istri']) ? htmlspecialchars($_POST['status_istri']) : '[Data tidak diisi]';
$alamat_istri = isset($_POST['alamat_istri']) ? htmlspecialchars($_POST['alamat_istri']) : '[Data tidak diisi]';

// Format tanggal ke dalam Bahasa Indonesia
setlocale(LC_TIME, 'id_ID.UTF-8', 'Indonesian');
$tanggal_surat = strftime('%e %B %Y');
$tanggal_lahir_suami = strftime('%e %B %Y', strtotime($tanggal_lahir_suami_raw));
$tanggal_lahir_istri = strftime('%e %B %Y', strtotime($tanggal_lahir_istri_raw));

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Surat Pengantar Nikah - N1</title>
    <style>
        @page { size: 215mm 330mm; margin: 0; }
        body { font-family: 'Times New Roman', Times, serif; font-size: 12pt; line-height: 1.5; background-color: #f4f4f4; margin: 0; padding: 20px; display: flex; justify-content: center; }
        .container { background: white; width: 21.5cm; min-height: 33cm; padding: 2cm; border: 1px #D3D3D3 solid; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); box-sizing: border-box; }
        .kop-surat { display: flex; align-items: center; gap: 20px; text-align: center; border-bottom: 4px double #000; padding-bottom: 15px; margin-bottom: 25px; }
        .kop-surat .logo { width: 85px; height: 85px; }
        .kop-surat .text-container { flex-grow: 1; }
        .kop-surat h2, .kop-surat h3, .kop-surat p { margin: 0; }
        .judul-surat { text-align: center; margin-bottom: 15px; }
        .judul-surat h4 { margin: 0; font-weight: bold; text-decoration: underline; }
        .nomor-surat { text-align: center; margin-bottom: 25px; }
        .isi-surat { text-align: justify; margin-bottom: 15px; }
        table.data-table { width: 100%; border-collapse: collapse; }
        table.data-table td { padding: 3px 0; vertical-align: top; }
        table.data-table td.label { width: 35%; }
        table.data-table td.separator { width: 5%; text-align: center; }
        .ttd-section { margin-top: 50px; }
        .ttd-section .posisi { width: 50%; float: left; text-align: center; }
        .ttd-section .nama-pejabat { margin-top: 80px; font-weight: bold; text-decoration: underline; }
        .clear { clear: both; }
        .print-button { display: block; width: 100%; max-width: 21.5cm; padding: 12px; margin: 20px auto 0; background-color: #007bff; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; text-align: center; }
        @media print { body { background: none; padding: 0; } .container { box-shadow: none; border: none; margin: 0; padding: 2cm; border-radius: 0; } .print-button { display: none; } }
    </style>
</head>
<body>
    <div>
        <div class="container">
            <div class="kop-surat">
                <img src="../../img/rohil.png" alt="Logo Kabupaten" class="logo">
                <div class="text-container">
                    <h2>PEMERINTAH KABUPATEN ROKAN HILIR</h2>
                    <h3>LURAH BAGAN BATU KOTA</h3>
                    <p>Jalan Pembangunan No. 1, Kode Pos: 12345, Telp: (021) 123-4567</p>
                </div>
            </div>

            <div class="judul-surat">
                <h4>SURAT PENGANTAR PERKAWINAN</h4>
            </div>
            <div class="nomor-surat">
                <span>Nomor: 474.2 / ... / ... / <?php echo date('Y'); ?></span>
            </div>

            <div class="isi-surat">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa:</p>
            </div>
            
            <h4 style="margin-bottom: 10px; font-weight: bold;">I. Calon Suami</h4>
            <table class="data-table">
                <tr><td class="label">1. Nama Lengkap</td><td class="separator">:</td><td><?php echo $nama_suami; ?></td></tr>
                <tr><td class="label">2. Bin</td><td class="separator">:</td><td><?php echo $bin_suami; ?></td></tr>
                <tr><td class="label">3. NIK</td><td class="separator">:</td><td><?php echo $nik_suami; ?></td></tr>
                <tr><td class="label">4. Tempat dan Tgl. Lahir</td><td class="separator">:</td><td><?php echo $tempat_lahir_suami . ', ' . $tanggal_lahir_suami; ?></td></tr>
                <tr><td class="label">5. Agama</td><td class="separator">:</td><td><?php echo $agama_suami; ?></td></tr>
                <tr><td class="label">6. Pekerjaan</td><td class="separator">:</td><td><?php echo $pekerjaan_suami; ?></td></tr>
                <tr><td class="label">7. Status Perkawinan</td><td class="separator">:</td><td><?php echo $status_suami; ?></td></tr>
                <tr><td class="label">8. Alamat</td><td class="separator">:</td><td><?php echo $alamat_suami; ?></td></tr>
            </table>

            <h4 style="margin-top: 20px; margin-bottom: 10px; font-weight: bold;">II. Calon Istri</h4>
            <table class="data-table">
                <tr><td class="label">1. Nama Lengkap</td><td class="separator">:</td><td><?php echo $nama_istri; ?></td></tr>
                <tr><td class="label">2. Binti</td><td class="separator">:</td><td><?php echo $binti_istri; ?></td></tr>
                <tr><td class="label">3. NIK</td><td class="separator">:</td><td><?php echo $nik_istri; ?></td></tr>
                <tr><td class="label">4. Tempat dan Tgl. Lahir</td><td class="separator">:</td><td><?php echo $tempat_lahir_istri . ', ' . $tanggal_lahir_istri; ?></td></tr>
                <tr><td class="label">5. Agama</td><td class="separator">:</td><td><?php echo $agama_istri; ?></td></tr>
                <tr><td class="label">6. Pekerjaan</td><td class="separator">:</td><td><?php echo $pekerjaan_istri; ?></td></tr>
                <tr><td class="label">7. Status Perkawinan</td><td class="separator">:</td><td><?php echo $status_istri; ?></td></tr>
                <tr><td class="label">8. Alamat</td><td class="separator">:</td><td><?php echo $alamat_istri; ?></td></tr>
            </table>

            <div class="isi-surat" style="margin-top: 20px;">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat pengantar ini dibuat untuk digunakan sebagai salah satu syarat dalam proses pencatatan perkawinan di Kantor Urusan Agama (KUA).</p>
            </div>

            <div class="ttd-section">
                <div class="posisi">
                    <p>Calon Suami,</p>
                    <div style="margin-top: 80px; font-weight: bold; text-decoration: underline;">
                        ( <?php echo $nama_suami; ?> )
                    </div>
                </div>
                <div class="posisi">
                    <p>Lurah Bagan Batu Kota,</p>
                    <div class="nama-pejabat">
                        Bambang Sudarman,S.Pd
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <button onclick="window.print()" class="print-button">Cetak Halaman Ini</button>
    </div>
</body>
</html>
