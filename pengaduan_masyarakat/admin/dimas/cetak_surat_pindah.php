<?php
// Ambil data dari formulir dan bersihkan untuk keamanan
// Data Pemohon
$nama_pemohon = isset($_POST['nama_pemohon']) ? htmlspecialchars($_POST['nama_pemohon']) : '[Data tidak diisi]';
$nik_pemohon = isset($_POST['nik_pemohon']) ? htmlspecialchars($_POST['nik_pemohon']) : '[Data tidak diisi]';
$no_kk = isset($_POST['no_kk']) ? htmlspecialchars($_POST['no_kk']) : '[Data tidak diisi]';
$alamat_asal = isset($_POST['alamat_asal']) ? htmlspecialchars($_POST['alamat_asal']) : '[Data tidak diisi]';

// Data Kepindahan
$alamat_tujuan = isset($_POST['alamat_tujuan']) ? htmlspecialchars($_POST['alamat_tujuan']) : '[Data tidak diisi]';
$alasan_pindah = isset($_POST['alasan_pindah']) ? htmlspecialchars($_POST['alasan_pindah']) : '[Data tidak diisi]';
$jumlah_pengikut = isset($_POST['jumlah_pengikut']) ? htmlspecialchars($_POST['jumlah_pengikut']) : '[Data tidak diisi]';

// Data Keluarga (memecah textarea menjadi array baris)
$data_keluarga_raw = isset($_POST['data_keluarga']) ? trim($_POST['data_keluarga']) : '';
$keluarga_pindah = !empty($data_keluarga_raw) ? explode("\n", $data_keluarga_raw) : [];


// Format tanggal ke dalam Bahasa Indonesia
setlocale(LC_TIME, 'id_ID.UTF-8', 'Indonesian');
$tanggal_surat = strftime('%e %B %Y');

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Surat Keterangan Pindah - <?php echo $nama_pemohon; ?></title>
    <style>
        @page {
            size: 215mm 330mm; /* Ukuran kertas F4 */
            margin: 0;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
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
        table.data-pemohon { width: 100%; border-collapse: collapse; margin: 15px 0; }
        table.data-pemohon td { padding: 4px 0; vertical-align: top; }
        table.data-pemohon td:first-child { width: 30%; }
        table.data-pemohon td:nth-child(2) { width: 5%; text-align: center; }
        .tabel-pengikut { width: 100%; border-collapse: collapse; margin-top: 15px; border: 1px solid #000; }
        .tabel-pengikut th, .tabel-pengikut td { border: 1px solid #000; padding: 8px; text-align: left; }
        .tabel-pengikut th { background-color: #f2f2f2; text-align: center; }
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
                <img src="../../img/rohil.png" alt="Logo Kabupaten" class="logo">
                <div class="text-container">
                    <h2>PEMERINTAH KABUPATEN ROKAN HILIR</h2>
                    <h3>KECAMATAN BAGAN BATU KOTA</h3>
                    <p>Jalan Pembangunan No. 1, Kode Pos: 12345, Telp: (021) 123-4567</p>
                </div>
            </div>

            <div class="judul-surat">
                <h4>SURAT KETERANGAN PINDAH</h4>
            </div>
            <div class="nomor-surat">
                <span>Nomor: 475 / ... / ... / <?php echo date('Y'); ?></span>
            </div>

            <div class="isi-surat">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini, Lurah Bagan Batu Kota, Kecamatan Bagan Sinembah, Kabupaten Rohil, dengan ini menerangkan bahwa pemohon di bawah ini:</p>
            </div>

            <table class="data-pemohon">
                <tr><td>Nama Lengkap</td><td>:</td><td><strong><?php echo $nama_pemohon; ?></strong></td></tr>
                <tr><td>NIK</td><td>:</td><td><?php echo $nik_pemohon; ?></td></tr>
                <tr><td>Nomor KK</td><td>:</td><td><?php echo $no_kk; ?></td></tr>
                <tr><td>Alamat Asal</td><td>:</td><td><?php echo $alamat_asal; ?></td></tr>
            </table>
            
            <div class="isi-surat">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telah mengajukan permohonan pindah domisili ke alamat:</p>
            </div>
            
            <table class="data-pemohon">
                <tr><td>Alamat Tujuan</td><td>:</td><td><?php echo $alamat_tujuan; ?></td></tr>
                <tr><td>Alasan Pindah</td><td>:</td><td><?php echo $alasan_pindah; ?></td></tr>
                <tr><td>Jumlah Pengikut</td><td>:</td><td><?php echo $jumlah_pengikut; ?> Orang</td></tr>
            </table>

            <div class="isi-surat">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adapun daftar nama keluarga yang turut serta pindah adalah sebagai berikut:</p>
            </div>

            <table class="tabel-pengikut">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Hubungan Keluarga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($keluarga_pindah) > 0) : ?>
                        <?php foreach ($keluarga_pindah as $index => $anggota) : 
                            // Pecah setiap baris menjadi NIK, Nama, Hubungan
                            $detail = explode('-', $anggota, 3);
                            $no = trim($detail[0] ?? ($index + 1) . '.'); // Ambil nomor, atau buat default
                            $nama = trim($detail[1] ?? '[Data tidak lengkap]');
                            $hubungan = trim($detail[2] ?? '[Data tidak lengkap]');
                        ?>
                            <tr>
                                <td style="text-align: center;"><?php echo rtrim($no, '.'); ?></td>
                                <td><!-- NIK dapat diambil jika formatnya baku, misal: 1. 320xxx - Nama - Hubungan --></td>
                                <td><?php echo $nama; ?></td>
                                <td><?php echo $hubungan; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" style="text-align: center;">Tidak ada anggota keluarga yang ikut pindah.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <div class="isi-surat" style="margin-top: 20px;">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat untuk dapat dipergunakan sebagaimana mestinya.</p>
            </div>

            <div class="ttd-section">
                <span>Kabupaten Rokan Hilir, <?php echo $tanggal_surat; ?></span><br>
                <span>Lurah Bagan Batu Kota</span>
                <div class="nama-pejabat">Bambang Sudarman,S.Pd</div>
            </div>
        </div>
        <button onclick="window.print()" class="print-button">Cetak Halaman Ini</button>
    </div>
</body>
</html>
