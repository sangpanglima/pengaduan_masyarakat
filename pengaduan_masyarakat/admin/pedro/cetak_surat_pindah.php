<?php
// Fungsi untuk mengambil data POST dengan aman dan mencegah XSS
function get_post_data($key, $default = '') {
    // Menghapus spasi di awal/akhir, cek jika kosong, lalu sanitasi
    return isset($_POST[$key]) && !empty(trim($_POST[$key])) ? htmlspecialchars(trim($_POST[$key]), ENT_QUOTES, 'UTF-8') : $default;
}

// Set locale ke Bahasa Indonesia untuk format tanggal
setlocale(LC_TIME, 'id_ID.UTF-8', 'Indonesian_indonesia.1252');

// --- Data Pemohon ---
$nama_pemohon = get_post_data('nama_pemohon', '[Nama Kepala Keluarga]');
$nik_pemohon = get_post_data('nik_pemohon', '[NIK Kepala Keluarga]');
$no_kk = get_post_data('no_kk', '[Nomor KK]');
$alamat_asal = get_post_data('alamat_asal', '[Alamat Asal]');

// --- Data Kepindahan ---
$alamat_tujuan = get_post_data('alamat_tujuan', '[Alamat Tujuan]');
$alasan_pindah = get_post_data('alasan_pindah', '[Alasan Pindah]');

// --- Data Keluarga (Pengikut) ---
// Logika baru untuk menangani input dinamis sebagai array
$keluarga_list = [];
if (isset($_POST['pengikut_nik']) && is_array($_POST['pengikut_nik'])) {
    $jumlah_pengikut_total = count($_POST['pengikut_nik']);
    for ($i = 0; $i < $jumlah_pengikut_total; $i++) {
        // Memastikan semua data untuk satu baris anggota keluarga ada
        if (isset($_POST['pengikut_nik'][$i]) && isset($_POST['pengikut_nama'][$i]) && isset($_POST['pengikut_hubungan'][$i])) {
            $nik = htmlspecialchars(trim($_POST['pengikut_nik'][$i]), ENT_QUOTES, 'UTF-8');
            $nama = htmlspecialchars(trim($_POST['pengikut_nama'][$i]), ENT_QUOTES, 'UTF-8');
            $hubungan = htmlspecialchars(trim($_POST['pengikut_hubungan'][$i]), ENT_QUOTES, 'UTF-8');
            
            // Hanya tambahkan ke daftar jika data tidak kosong
            if (!empty($nik) && !empty($nama) && !empty($hubungan)) {
                $keluarga_list[] = [
                    'nik' => $nik,
                    'nama' => $nama,
                    'hubungan' => $hubungan,
                ];
            }
        }
    }
}

// Jumlah pengikut dihitung dari data yang valid
$jumlah_pengikut = count($keluarga_list);

// --- Informasi Surat ---
$nomor_surat = "475 / " . rand(100, 999) . " / NGR-Pkl / " . date('Y');
$tanggal_surat = strftime('%e %B %Y');

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Surat Keterangan Pindah - <?php echo $nama_pemohon; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        @page {
            size: 21.5cm 33cm; /* Ukuran Kertas F4 */
            margin: 0;
        }
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 12pt;
            line-height: 1.6;
            background-color: #e5e7eb; /* gray-200 */
        }
        .container {
            width: 21.5cm;
            min-height: 33cm;
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
        .kop-surat h1 { font-size: 15pt; }
        .kop-surat h2 { font-size: 18pt; }
        .kop-surat h3 { font-size: 20pt; }
        .kop-surat p { font-size: 11pt; text-transform: none; margin-top: 4px; }

        .title-section { text-align: center; margin-bottom: 2rem; }
        .title-section h4 { font-family: 'Merriweather', serif; font-size: 14pt; text-decoration: underline; font-weight: 700; margin: 0; }
        .title-section span { font-size: 12pt; }
        
        .content p { margin-bottom: 1rem; text-align: justify; }
        
        .data-table { border-collapse: collapse; width: 100%; margin-left: 40px; }
        .data-table td { padding: 3px 0; vertical-align: top; }
        .data-table .field { width: 30%; }
        .data-table .separator { width: 5%; text-align: center; }

        .pengikut-section { margin-top: 1rem; }
        .pengikut-section table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #6b7280; /* gray-500 */
        }
        .pengikut-section th, .pengikut-section td {
            border: 1px solid #6b7280;
            padding: 8px;
            text-align: left;
        }
        .pengikut-section th { background-color: #f3f4f6; font-weight: 700; }
        .pengikut-section .no-data {
            text-align: center;
            padding: 20px;
            color: #6b7280;
        }
        
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
            .container { margin: 0; padding: 2cm 2.5cm; box-shadow: none; border: none; }
            .no-print { display: none; }
        }
        .print-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4338ca; /* indigo-700 */
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
            <img src="../../img//50kota.png" alt="Logo Kabupaten">
            <div class="text-kop">
                <h1>PEMERINTAH KABUPATEN LIMA PULUH KOTA</h1>
                <h2>KECAMATAN PANGKALAN KOTO BARU</h2>
                <h3>NAGARI PANGKALAN</h3>
                <p>Jl. Lintas Sumbar-Riau Pasar Baru Pangkalan, Kode Pos 26272</p>
            </div>
        </header>

        <main>
            <div class="title-section">
                <h4>SURAT KETERANGAN PINDAH</h4>
                <span>Nomor: <?php echo $nomor_surat; ?></span>
            </div>
            
            <p style="text-indent: 50px;">Yang bertanda tangan di bawah ini, Wali Nagari Pangkalan, Kecamatan Pangkalan Koto Baru, Kabupaten Lima Puluh Kota, dengan ini menerangkan bahwa:</p>

            <table class="data-table">
                <tr><td class="field">Nama Kepala Keluarga</td><td class="separator">:</td><td><b><?php echo strtoupper($nama_pemohon); ?></b></td></tr>
                <tr><td class="field">Nomor Induk Kependudukan</td><td class="separator">:</td><td><?php echo $nik_pemohon; ?></td></tr>
                <tr><td class="field">Nomor Kartu Keluarga</td><td class="separator">:</td><td><?php echo $no_kk; ?></td></tr>
                <tr><td class="field">Alamat Asal</td><td class="separator">:</td><td><?php echo $alamat_asal; ?></td></tr>
            </table>

            <p>Adalah benar penduduk yang terdaftar di nagari kami dan pada saat ini mengajukan permohonan pindah domisili dengan data sebagai berikut:</p>

            <table class="data-table">
                <tr><td class="field">Alasan Pindah</td><td class="separator">:</td><td><?php echo $alasan_pindah; ?></td></tr>
                <tr><td class="field">Alamat Tujuan</td><td class="separator">:</td><td><?php echo $alamat_tujuan; ?></td></tr>
                <tr><td class="field">Jumlah Pengikut</td><td class="separator">:</td><td><?php echo $jumlah_pengikut; ?> Orang</td></tr>
            </table>

            <p>Adapun daftar anggota keluarga yang turut serta pindah adalah sebagai berikut:</p>
            
            <div class="pengikut-section">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Hubungan Keluarga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($keluarga_list)): ?>
                            <?php $no = 1; foreach ($keluarga_list as $anggota): ?>
                                <tr>
                                    <td><?php echo $no++; ?>.</td>
                                    <td><?php echo $anggota['nik']; ?></td>
                                    <td><?php echo $anggota['nama']; ?></td>
                                    <td><?php echo $anggota['hubungan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="no-data">Tidak ada anggota keluarga yang mengikuti.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <p style="text-indent: 50px;">Demikian Surat Keterangan Pindah ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
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
