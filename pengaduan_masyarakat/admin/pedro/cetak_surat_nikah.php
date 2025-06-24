<?php
// Mengambil dan membersihkan data dari form
function get_post_data($key, $default = '[Data tidak diisi]') {
    return isset($_POST[$key]) && !empty(trim($_POST[$key])) ? htmlspecialchars(trim($_POST[$key]), ENT_QUOTES, 'UTF-8') : $default;
}

// Data Calon Suami
$nama_suami = get_post_data('nama_suami');
$bin_suami = get_post_data('bin_suami');
$nik_suami = get_post_data('nik_suami');
$tempat_lahir_suami = get_post_data('tempat_lahir_suami');
$tanggal_lahir_suami_raw = get_post_data('tanggal_lahir_suami', date('Y-m-d'));
$agama_suami = get_post_data('agama_suami');
$pekerjaan_suami = get_post_data('pekerjaan_suami');
$status_suami = get_post_data('status_suami');
$alamat_suami = get_post_data('alamat_suami');

// Data Calon Istri
$nama_istri = get_post_data('nama_istri');
$binti_istri = get_post_data('binti_istri');
$nik_istri = get_post_data('nik_istri');
$tempat_lahir_istri = get_post_data('tempat_lahir_istri');
$tanggal_lahir_istri_raw = get_post_data('tanggal_lahir_istri', date('Y-m-d'));
$agama_istri = get_post_data('agama_istri');
$pekerjaan_istri = get_post_data('pekerjaan_istri');
$status_istri = get_post_data('status_istri');
$alamat_istri = get_post_data('alamat_istri');

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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        @page {
            size: 21.5cm 33cm; /* Ukuran F4 */
            margin: 0;
        }
        body {
            font-family: 'Lato', sans-serif;
            font-size: 12pt;
            line-height: 1.5; /* Line height lebih rapat */
            background-color: #f3f4f6;
        }
        .paper-container {
            width: 21.5cm;
            min-height: 33cm; /* Ukuran tinggi F4 */
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
        }
        .kop-surat .line-1 { font-family: 'Merriweather', serif; font-size: 16pt; font-weight: 700; }
        .kop-surat .line-2 { font-family: 'Merriweather', serif; font-size: 18pt; font-weight: 700; }
        .kop-surat .line-3 { font-size: 11pt; margin-top: 4px; }
        
        .title-section { text-align: center; margin-top: 1.5rem; margin-bottom: 1.5rem; } /* Margin dikurangi */
        .title-section h1 { font-family: 'Merriweather', serif; font-size: 14pt; font-weight: 700; text-decoration: underline; margin: 0; }
        .title-section p { margin: 4px 0 0; }
        
        .content p { margin-bottom: 0.8rem; text-align: justify; }
        
        .data-section { margin-top: 1rem; margin-bottom: 1rem; }
        .data-section h2 { font-family: 'Merriweather', serif; font-size: 13pt; font-weight: 700; margin-bottom: 0.5rem; }
        .data-table { border-collapse: collapse; width: 100%; }
        .data-table td { padding: 2px 0; vertical-align: top; } /* Padding dikurangi */
        .data-table .label { width: 3%; }
        .data-table .field { width: 32%; }
        .data-table .separator { width: 3%; text-align: center; }

        .signature-section { margin-top: 2.5rem; } /* Margin dikurangi */
        .signature-box { width: 48%; text-align: center; }

        @media print {
            body { background: none; }
            .paper-container { margin: 0; padding: 2cm 1.5cm; box-shadow: none; border: none; }
            .no-print { display: none !important; }
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="paper-container">
        <header class="kop-surat">
            <div class="flex items-center justify-center gap-4">
                <img src="../../img/50kota.png" alt="Logo Kabupaten" class="h-20 w-20">
                <div class="text-center">
                    <h2 class="line-1">PEMERINTAH KABUPATEN LIMA PULUH KOTA</h2>
                    <h3 class="line-2">KANTOR KENAGARIAN PANGKALAN</h3>
                    <p class="line-3">Jl. Lintas Sumbar-Riau Pasar Baru Pangkalan, Kode Pos 26272</p>
                </div>
            </div>
        </header>

        <section class="title-section">
            <h1>SURAT PENGANTAR PERKAWINAN</h1>
            <p>Nomor: 474.2 / <?php echo rand(100, 200); ?> / DS / <?php echo date('Y'); ?></p>
        </section>

        <section class="content">
            <p style="text-indent: 2em;">Yang bertanda tangan di bawah ini, Wali Nagari Pangkalan, Kecamatan Pangkalan Koto Baru, Kabupaten Lima Puluh Kota, dengan ini menerangkan dengan sesungguhnya bahwa:</p>

            <div class="data-section">
                <h2>I. Calon Suami</h2>
                <table class="data-table">
                    <tr>
                        <td class="label">1.</td><td class="field">Nama Lengkap</td><td class="separator">:</td><td><?php echo strtoupper($nama_suami); ?></td>
                    </tr>
                    <tr>
                        <td class="label">2.</td><td class="field">Bin</td><td class="separator">:</td><td><?php echo $bin_suami; ?></td>
                    </tr>
                    <tr>
                        <td class="label">3.</td><td class="field">NIK</td><td class="separator">:</td><td><?php echo $nik_suami; ?></td>
                    </tr>
                    <tr>
                        <td class="label">4.</td><td class="field">Tempat dan Tgl. Lahir</td><td class="separator">:</td><td><?php echo $tempat_lahir_suami . ', ' . $tanggal_lahir_suami; ?></td>
                    </tr>
                     <tr>
                        <td class="label">5.</td><td class="field">Agama</td><td class="separator">:</td><td><?php echo $agama_suami; ?></td>
                    </tr>
                    <tr>
                        <td class="label">6.</td><td class="field">Pekerjaan</td><td class="separator">:</td><td><?php echo $pekerjaan_suami; ?></td>
                    </tr>
                    <tr>
                        <td class="label">7.</td><td class="field">Status Perkawinan</td><td class="separator">:</td><td><?php echo $status_suami; ?></td>
                    </tr>
                    <tr>
                        <td class="label">8.</td><td class="field">Alamat</td><td class="separator">:</td><td><?php echo $alamat_suami; ?></td>
                    </tr>
                </table>
            </div>

            <div class="data-section">
                <h2>II. Calon Istri</h2>
                <table class="data-table">
                     <tr>
                        <td class="label">1.</td><td class="field">Nama Lengkap</td><td class="separator">:</td><td><?php echo strtoupper($nama_istri); ?></td>
                    </tr>
                    <tr>
                        <td class="label">2.</td><td class="field">Binti</td><td class="separator">:</td><td><?php echo $binti_istri; ?></td>
                    </tr>
                    <tr>
                        <td class="label">3.</td><td class="field">NIK</td><td class="separator">:</td><td><?php echo $nik_istri; ?></td>
                    </tr>
                    <tr>
                        <td class="label">4.</td><td class="field">Tempat dan Tgl. Lahir</td><td class="separator">:</td><td><?php echo $tempat_lahir_istri . ', ' . $tanggal_lahir_istri; ?></td>
                    </tr>
                     <tr>
                        <td class="label">5.</td><td class="field">Agama</td><td class="separator">:</td><td><?php echo $agama_istri; ?></td>
                    </tr>
                    <tr>
                        <td class="label">6.</td><td class="field">Pekerjaan</td><td class="separator">:</td><td><?php echo $pekerjaan_istri; ?></td>
                    </tr>
                    <tr>
                        <td class="label">7.</td><td class="field">Status Perkawinan</td><td class="separator">:</td><td><?php echo $status_istri; ?></td>
                    </tr>
                    <tr>
                        <td class="label">8.</td><td class="field">Alamat</td><td class="separator">:</td><td><?php echo $alamat_istri; ?></td>
                    </tr>
                </table>
            </div>

            <p style="text-indent: 2em;">Demikian surat pengantar ini dibuat untuk digunakan sebagai salah satu syarat dalam proses pencatatan perkawinan di Kantor Urusan Agama (KUA).</p>
        </section>

        <section class="signature-section flex justify-end">
            <div class="signature-box">
                <p>Pangkalan, <?php echo $tanggal_surat; ?></p>
                <p>Wali Nagari Pangkalan,</p>
                <div class="h-20"></div> <!-- Spacer for signature dikurangi -->
                <p class="font-bold underline uppercase"> Rifdal Laksamano</p>
            </div>
        </section>
    </div>

    <!-- Print Button Outside Paper -->
    <div class="no-print fixed bottom-5 right-5">
        <button onclick="window.print()" class="bg-blue-600 text-white font-bold py-3 px-5 rounded-full shadow-lg hover:bg-blue-700 transition duration-300 flex items-center gap-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
            Cetak Surat
        </button>
    </div>

</body>
</html>
