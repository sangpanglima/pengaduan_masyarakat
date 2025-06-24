<?php
// Function to safely get POST data and prevent XSS attacks
function get_post_data($key, $default = '') {
    // Trim whitespace and check if empty, then sanitize
    return isset($_POST[$key]) && !empty(trim($_POST[$key])) ? htmlspecialchars(trim($_POST[$key]), ENT_QUOTES, 'UTF-8') : $default;
}

// Set locale to Indonesian for date formatting
setlocale(LC_TIME, 'id_ID.UTF-8', 'Indonesian_indonesia.1252');

// --- Applicant Data ---
$nama = get_post_data('nama', '[Nama Pemohon]');
$nik = get_post_data('nik', '[NIK Pemohon]');
$jk = get_post_data('jk', '[Jenis Kelamin]');
$umur = get_post_data('umur', '[Umur]');
$agama = get_post_data('agama', '[Agama]');
$pekerjaan = get_post_data('pekerjaan', '[Pekerjaan]');
$alamat = get_post_data('alamat', '[Alamat]');

// --- Parents' Data ---
$nama_ayah = get_post_data('nama_ayah', '[Nama Ayah]');
$pekerjaan_ayah = get_post_data('pekerjaan_ayah', '[Pekerjaan Ayah]');
$penghasilan_ayah_raw = get_post_data('penghasilan_ayah');
$penghasilan_ayah = is_numeric($penghasilan_ayah_raw) ? 'Rp. ' . number_format((int)$penghasilan_ayah_raw, 0, ',', '.') . ',-' : 'Rp. 0,-';

$nama_ibu = get_post_data('nama_ibu', '[Nama Ibu]');
$pekerjaan_ibu = get_post_data('pekerjaan_ibu', '[Pekerjaan Ibu]');
$penghasilan_ibu_raw = get_post_data('penghasilan_ibu');
$penghasilan_ibu = is_numeric($penghasilan_ibu_raw) ? 'Rp. ' . number_format((int)$penghasilan_ibu_raw, 0, ',', '.') . ',-' : 'Rp. 0,-';

// --- Other Information ---
$keperluan = get_post_data('keperluan', '[Keperluan]');

// --- Document Information ---
// This can be replaced with a more robust numbering system
$nomor_surat = "474 / " . rand(100, 999) . " / PEM-NGR/ " . date('Y');
$tanggal_surat = strftime('%e %B %Y');

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Surat Keterangan Tidak Mampu - <?php echo $nama; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        @page {
            size: 21cm 29.7cm; /* A4 Paper Size */
            margin: 0;
        }
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 12pt;
            line-height: 1.5; /* Line height lebih rapat */
            background-color: #e5e7eb; /* gray-200 */
        }
        .container {
            width: 21cm;
            min-height: 29.7cm; /* A4 Height */
            padding: 2cm; /* Padding dikurangi */
            margin: 1rem auto;
            background: white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        .kop-surat {
            text-align: center;
            border-bottom: 5px solid #000;
            padding-bottom: 10px; /* Padding dikurangi */
            margin-bottom: 1.5rem; /* Margin dikurangi */
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .kop-surat img { width: 90px; height: auto; }
        .kop-surat .text-kop { flex-grow: 1; }
        .kop-surat h1, .kop-surat h2, .kop-surat h3, .kop-surat p {
            font-family: 'Merriweather', serif;
            font-weight: 700;
            margin: 0;
            text-transform: uppercase;
        }
        .kop-surat h1 { font-size: 16pt; }
        .kop-surat h2 { font-size: 18pt; }
        .kop-surat h3 { font-size: 20pt; }
        .kop-surat p { font-size: 11pt; text-transform: none; margin-top: 4px; }

        .title-section { text-align: center; margin-top: 1.5rem; margin-bottom: 1.5rem; } /* Margin dikurangi */
        .title-section h4 { font-family: 'Merriweather', serif; font-size: 14pt; text-decoration: underline; font-weight: 700; margin: 0; }
        .title-section span { font-size: 12pt; }
        
        .content p { margin-bottom: 0.9rem; text-align: justify; }
        
        .data-table { border-collapse: collapse; width: 100%; margin-left: 40px; } /* Indentasi dikurangi */
        .data-table td { padding: 2px 0; vertical-align: top; } /* Padding dikurangi */
        .data-table .field { width: 30%; }
        .data-table .separator { width: 5%; text-align: center; }

        .tabel-orangtua-wrapper {
            display: flex;
            gap: 20px;
            margin: 15px 0; /* Margin dikurangi */
            width: 100%;
        }
        .tabel-orangtua {
            flex: 1;
            border: 1px solid #ccc;
        }
        .tabel-orangtua .header-group {
            background-color: #f3f4f6;
            font-weight: bold;
            padding: 6px 8px; /* Padding dikurangi */
            text-align: center;
            border-bottom: 1px solid #ccc;
        }
        .tabel-orangtua td {
            padding: 4px 8px; /* Padding dikurangi */
        }
        .tabel-orangtua tr td:first-child { width: 35%; }
        .tabel-orangtua tr td:nth-child(2) { width: 5%; text-align: center;}

        .signature-section { margin-top: 2rem; } /* Margin dikurangi */
        .signature-box { width: 45%; float: right; text-align: center; }
        .signature-box .jabatan, .signature-box .tanggal { margin: 0; }
        .signature-box .nama-pejabat {
            margin-top: 60px; /* Spasi tanda tangan dikurangi */
            font-weight: bold;
            text-decoration: underline;
            text-transform: uppercase;
        }

        @media print {
            body { background: none; }
            .container { margin: 0; padding: 2cm; box-shadow: none; border: none; }
            .no-print { display: none; }
        }
        .print-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #1e3a8a; /* blue-900 */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 9999px;
            cursor: pointer;
            font-family: sans-serif;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body onload="window.print()">

    <button class="no-print print-button" onclick="window.print()">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/><path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1h10V9a2 2 0 0 0-2-2H5zm-2 4v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1v4zm11 0v-4h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1z"/></svg>
        Cetak
    </button>

    <div class="container">
        <header class="kop-surat">
            <img src="../../img/50kota.png" alt="Logo Kabupaten">
            <div class="text-kop">
                <h1>PEMERINTAH KABUPATEN LIMA PULUH KOTA</h1>
                <h2>KECAMATAN PANGKALAN KOTO BARU</h2>
                <h3>KENAGARIAN PANGKALAN</h3>
                <p>Jl. Lintas Sumbar-Riau Pasar Baru Pangkalan, Kode Pos 26272</p>
            </div>
        </header>

        <main>
            <div class="title-section">
                <h4>SURAT KETERANGAN TIDAK MAMPU</h4>
                <span>Nomor: <?php echo $nomor_surat; ?></span>
            </div>
            
            <p style="text-indent: 50px;">Yang bertanda tangan di bawah ini, Wali Nagari Pangkalan, Kecamatan Pangkalan Koto Baru, Kabupaten Lima Puluh Kota, dengan ini menerangkan bahwa:</p>

            <table class="data-table">
                <tr><td class="field">Nama Lengkap</td><td class="separator">:</td><td><b><?php echo strtoupper($nama); ?></b></td></tr>
                <tr><td class="field">NIK</td><td class="separator">:</td><td><?php echo $nik; ?></td></tr>
                <tr><td class="field">Jenis Kelamin</td><td class="separator">:</td><td><?php echo $jk; ?></td></tr>
                <tr><td class="field">Umur</td><td class="separator">:</td><td><?php echo $umur; ?> Tahun</td></tr>
                <tr><td class="field">Agama</td><td class="separator">:</td><td><?php echo $agama; ?></td></tr>
                <tr><td class="field">Pekerjaan</td><td class="separator">:</td><td><?php echo $pekerjaan; ?></td></tr>
                <tr><td class="field">Alamat</td><td class="separator">:</td><td><?php echo $alamat; ?></td></tr>
            </table>

            <p style="text-indent: 50px;">Nama tersebut di atas adalah benar penduduk Nagari Pangkalan yang berdomisili di alamat tersebut dan merupakan anak dari orang tua/wali dengan data sebagai berikut:</p>
            
            <div class="tabel-orangtua-wrapper">
                <table class="tabel-orangtua">
                    <tbody>
                        <tr><td colspan="3" class="header-group">DATA AYAH</td></tr>
                        <tr><td>Nama</td><td>:</td><td><?php echo $nama_ayah; ?></td></tr>
                        <tr><td>Pekerjaan</td><td>:</td><td><?php echo $pekerjaan_ayah; ?></td></tr>
                        <tr><td>Penghasilan</td><td>:</td><td><?php echo $penghasilan_ayah; ?></td></tr>
                    </tbody>
                </table>
                <table class="tabel-orangtua">
                    <tbody>
                        <tr><td colspan="3" class="header-group">DATA IBU</td></tr>
                        <tr><td>Nama</td><td>:</td><td><?php echo $nama_ibu; ?></td></tr>
                        <tr><td>Pekerjaan</td><td>:</td><td><?php echo $pekerjaan_ibu; ?></td></tr>
                        <tr><td>Penghasilan</td><td>:</td><td><?php echo $penghasilan_ibu; ?></td></tr>
                    </tbody>
                </table>
            </div>

            <p style="text-indent: 50px;">Berdasarkan data yang ada pada kami dan sepengetahuan kami, yang bersangkutan adalah benar berasal dari keluarga yang tergolong **tidak mampu / miskin.**</p>

            <p style="text-indent: 50px;">Surat keterangan ini dibuat untuk keperluan: **<?php echo $keperluan; ?>**.</p>
            
            <p style="text-indent: 50px;">Demikian Surat Keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
        </main>

        <footer class="signature-section">
            <div class="signature-box">
                <p class="tanggal">Pangkalan, <?php echo $tanggal_surat; ?></p>
                <p class="jabatan">Wali Nagari Pangkalan,</p>
                <div class="nama-pejabat">RIFDAL LAKSAMANO</div>
            </div>
            <div style="clear: both;"></div>
        </footer>
    </div>

</body>
</html>
