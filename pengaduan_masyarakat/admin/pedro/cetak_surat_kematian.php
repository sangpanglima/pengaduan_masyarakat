<?php
// Fungsi untuk mengambil data POST dengan aman dan mencegah XSS
function get_post_data($key, $default = '') {
    // Menghapus spasi di awal/akhir, cek jika kosong, lalu sanitasi
    return isset($_POST[$key]) && !empty(trim($_POST[$key])) ? htmlspecialchars(trim($_POST[$key]), ENT_QUOTES, 'UTF-8') : $default;
}

// Set locale ke Bahasa Indonesia untuk format tanggal yang benar
setlocale(LC_TIME, 'id_ID.UTF-8', 'Indonesian_indonesia.1252');

// --- Data Almarhum/Almarhumah ---
$nama_jenazah = get_post_data('nama_jenazah', '[Nama Jenazah]');
$nik_jenazah = get_post_data('nik_jenazah', '[NIK Jenazah]');
$tempat_lahir_jenazah = get_post_data('tempat_lahir_jenazah', '[Tempat Lahir]');
$tanggal_lahir_jenazah_raw = get_post_data('tanggal_lahir_jenazah');
$tanggal_lahir_jenazah = !empty($tanggal_lahir_jenazah_raw) ? strftime('%d %B %Y', strtotime($tanggal_lahir_jenazah_raw)) : '-';
$ttl_jenazah = $tempat_lahir_jenazah . ', ' . $tanggal_lahir_jenazah;
$jk_jenazah = get_post_data('jk_jenazah', '[Jenis Kelamin]');
$agama_jenazah = get_post_data('agama_jenazah', '[Agama]');
$kwn_jenazah = get_post_data('kwn_jenazah', '[Kewarganegaraan]');
$pekerjaan_terakhir_jenazah = get_post_data('pekerjaan_terakhir_jenazah', '[Pekerjaan]');
$alamat_jenazah = get_post_data('alamat_jenazah', '[Alamat]');

// --- Detail Kematian ---
$tanggal_kematian_raw = get_post_data('tanggal_kematian');
$tanggal_kematian = !empty($tanggal_kematian_raw) ? strftime('%d %B %Y', strtotime($tanggal_kematian_raw)) : '-';
$hari_kematian = get_post_data('hari_kematian', '[Hari]');
$tempat_kematian = get_post_data('tempat_kematian', '[Tempat Kematian]');
$penyebab_kematian = get_post_data('penyebab_kematian', '[Penyebab]');

// --- Informasi Surat ---
$nomor_surat = "474.4 / " . rand(100, 999) . " / NGR-Pkl/ " . date('Y');
$tanggal_surat = strftime('%e %B %Y');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Surat Keterangan Kematian - <?php echo $nama_jenazah; ?></title>
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
            line-height: 1.6;
            background-color: #e5e7eb; /* gray-200 */
        }
        .container {
            width: 21cm;
            min-height: 29.7cm;
            padding: 2.5cm;
            margin: 1rem auto;
            background: white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        .kop-surat {
            text-align: center;
            border-bottom: 5px solid #000;
            padding-bottom: 15px;
            margin-bottom: 2rem;
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
        .kop-surat h1 { font-size: 15pt; } /* Ukuran font diperkecil */
        .kop-surat h2 { font-size: 18pt; }
        .kop-surat h3 { font-size: 20pt; }
        .kop-surat p { font-size: 11pt; text-transform: none; margin-top: 4px; }

        .title-section { text-align: center; margin-bottom: 2rem; }
        .title-section h4 { font-family: 'Merriweather', serif; font-size: 14pt; text-decoration: underline; font-weight: 700; margin: 0; }
        .title-section span { font-size: 12pt; }
        
        .content p { margin-bottom: 1rem; text-align: justify; }
        
        .data-table { border-collapse: collapse; width: 100%; margin-left: 20px; }
        .data-table td { padding: 3px 0; vertical-align: top; }
        .data-table .label { width: 5%; }
        .data-table .field { width: 30%; }
        .data-table .separator { width: 5%; text-align: center; }

        .signature-section { margin-top: 3rem; }
        .signature-box { width: 45%; float: right; text-align: center; }
        .signature-box .jabatan, .signature-box .tanggal { margin: 0; }
        .signature-box .nama-pejabat {
            margin-top: 70px;
            font-weight: bold;
            text-decoration: underline;
            text-transform: uppercase;
        }

        @media print {
            body { background: none; }
            .container { margin: 0; padding: 2.5cm; box-shadow: none; border: none; }
            .no-print { display: none; }
        }
        .print-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #b91c1c; /* red-700 */
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
                <h3>NAGARI PANGKALAN</h3>
                <p>Jl. Lintas Sumbar-Riau Pasar Baru Pangkalan, Kode Pos 26272</p>
            </div>
        </header>

        <main>
            <div class="title-section">
                <h4>SURAT KETERANGAN KEMATIAN</h4>
                <span>Nomor: <?php echo $nomor_surat; ?></span>
            </div>
            
            <p style="text-indent: 50px;">Yang bertanda tangan di bawah ini, Wali Nagari Pangkalan, Kecamatan Pangkalan Koto Baru, Kabupaten Lima Puluh Kota, dengan ini menerangkan bahwa:</p>

            <table class="data-table">
                <tr><td class="label">a.</td><td class="field">Nama Lengkap</td><td class="separator">:</td><td><b><?php echo strtoupper($nama_jenazah); ?></b></td></tr>
                <tr><td class="label">b.</td><td class="field">Jenis Kelamin</td><td class="separator">:</td><td><?php echo $jk_jenazah; ?></td></tr>
                <tr><td class="label">c.</td><td class="field">Tempat, Tgl Lahir</td><td class="separator">:</td><td><?php echo $ttl_jenazah; ?></td></tr>
                <tr><td class="label">d.</td><td class="field">Kewarganegaraan</td><td class="separator">:</td><td><?php echo $kwn_jenazah; ?></td></tr>
                <tr><td class="label">e.</td><td class="field">Agama</td><td class="separator">:</td><td><?php echo $agama_jenazah; ?></td></tr>
                <tr><td class="label">f.</td><td class="field">Pekerjaan Terakhir</td><td class="separator">:</td><td><?php echo $pekerjaan_terakhir_jenazah; ?></td></tr>
                <tr><td class="label">g.</td><td class="field">Alamat</td><td class="separator">:</td><td><?php echo $alamat_jenazah; ?></td></tr>
            </table>
            
            <p>Yang bertempat tinggal di <?php echo $alamat_jenazah; ?>, Kecamatan Pangkalan Koto Baru, Kabupaten Lima Puluh Kota, Provinsi Sumatera Barat.</p>
                
            <p>Menurut sepengetahuan kami bahwa nama tersebut di atas telah Meninggal Dunia pada:</p>
                
            <table class="data-table">
                <tr><td class="label"></td><td class="field">Hari</td><td class="separator">:</td><td><?php echo $hari_kematian; ?></td></tr>
                <tr><td class="label"></td><td class="field">Tanggal</td><td class="separator">:</td><td><?php echo $tanggal_kematian; ?></td></tr>
                <tr><td class="label"></td><td class="field">Disebabkan oleh</td><td class="separator">:</td><td><?php echo $penyebab_kematian; ?></td></tr>
                <tr><td class="label"></td><td class="field">Di</td><td class="separator">:</td><td><?php echo $tempat_kematian; ?></td></tr>
            </table>

            <p style="text-indent: 50px;">Demikian Surat Keterangan Kematian ini kami perbuat dengan sebenarnya untuk dapat dipergunakan sebagaimana perlunya.</p>
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
