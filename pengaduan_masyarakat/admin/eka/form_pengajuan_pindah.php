<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Pindah Domisili</title>
    <!-- Importing Tailwind CSS for basic layout -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Applying a traditional, formal font */
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #d1d5db; /* gray-300 */
            font-size: 12pt;
        }
        /* Styling for the form container to look like a paper document */
        .form-container {
            background-color: #ffffff;
            border: 1px solid #000000;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        /* Classic input field style */
        .form-input {
            font-family: 'Times New Roman', Times, serif;
            border: 1px solid #000000;
            background-color: #ffffff;
            padding: 6px 10px;
            border-radius: 0;
            transition: none;
            width: 100%;
            font-size: 12pt;
        }
        .form-input:focus {
            outline: 1px solid #000000;
            box-shadow: none;
        }
        /* Classic select field style */
        select.form-input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>');
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 1em;
            padding-right: 2.5rem;
        }
        /* Classic button style */
        .btn-classic {
            font-family: 'Times New Roman', Times, serif;
            border: 1px solid #000;
            padding: 8px 16px;
            border-radius: 0;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s, color 0.2s;
        }
        .btn-submit {
            background-color: #333333;
            color: #ffffff;
        }
        .btn-submit:hover {
            background-color: #000000;
        }
        .btn-back {
            background-color: #f0f0f0;
            color: #000000;
        }
        .btn-back:hover {
            background-color: #dddddd;
        }
        /* Fieldset and Legend for grouping */
        fieldset {
            border: 1px solid #000;
            padding: 1.5rem;
        }
        legend {
            font-weight: bold;
            font-size: 13pt;
            padding: 0 0.75rem;
            text-transform: uppercase;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">

    <!-- Form Container with a classic document appearance -->
    <div class="w-full max-w-4xl form-container p-10">

        <div class="text-center mb-8 border-b-4 border-double border-black pb-4">
            <h1 class="text-xl font-bold uppercase">Formulir Permohonan</h1>
            <h2 class="text-2xl font-bold uppercase">Surat Keterangan Pindah</h2>
        </div>

        <form method="POST" action="cetak_surat_pindah.php" target="_blank">
            <div class="space-y-8">

                <!-- Applicant Data Section -->
                <fieldset>
                    <legend>I. Data Pemohon</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mt-4">
                        <div>
                            <label for="nama_pemohon" class="block font-medium mb-1">Nama Lengkap Kepala Keluarga</label>
                            <input type="text" id="nama_pemohon" name="nama_pemohon" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="nik_pemohon" class="block font-medium mb-1">NIK Kepala Keluarga</label>
                            <input type="text" id="nik_pemohon" name="nik_pemohon" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input">
                        </div>
                        <div>
                            <label for="no_kk" class="block font-medium mb-1">Nomor Kartu Keluarga (KK)</label>
                            <input type="text" id="no_kk" name="no_kk" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input">
                        </div>
                        <div class="md:col-span-2">
                            <label for="alamat_asal" class="block font-medium mb-1">Alamat Asal (Sesuai KK)</label>
                            <textarea id="alamat_asal" name="alamat_asal" rows="2" required placeholder="Alamat lengkap sebelum pindah" class="form-input" maxlength="255"></textarea>
                        </div>
                    </div>
                </fieldset>

                <!-- Moving Details Section -->
                <fieldset>
                    <legend>II. Data Kepindahan</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mt-4">
                        <div class="md:col-span-2">
                            <label for="alamat_tujuan" class="block font-medium mb-1">Alamat Tujuan Pindah</label>
                            <textarea id="alamat_tujuan" name="alamat_tujuan" rows="2" required placeholder="Alamat lengkap setelah pindah" class="form-input" maxlength="255"></textarea>
                        </div>
                        <div>
                            <label for="alasan_pindah" class="block font-medium mb-1">Alasan Pindah</label>
                            <input type="text" id="alasan_pindah" name="alasan_pindah" placeholder="Contoh: Pekerjaan, Keluarga" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="jumlah_pengikut" class="block font-medium mb-1">Jumlah Anggota Keluarga yang Pindah</label>
                            <input type="number" id="jumlah_pengikut" name="jumlah_pengikut" required value="1" min="1" class="form-input">
                        </div>
                    </div>
                </fieldset>

                <!-- Family Members Section -->
                <fieldset>
                    <legend>III. Data Keluarga yang Pindah</legend>
                    <div class="mt-4">
                        <label for="data_keluarga" class="block font-medium mb-1">Daftar Anggota Keluarga (Pengikut)</label>
                        <textarea id="data_keluarga" name="data_keluarga" rows="5" required class="form-input" placeholder="Tuliskan data per baris dengan format:&#10;NIK - Nama Lengkap - Hubungan dalam Keluarga&#10;Contoh:&#10;3201... - Siti Aminah - Istri&#10;3201... - Budi Junior - Anak"></textarea>
                    </div>
                </fieldset>
            </div>

            <!-- Action Buttons -->
            <div class="mt-10 pt-6 border-t border-dashed border-black flex flex-col sm:flex-row-reverse gap-4">
                <button type="submit" name="cetak" class="btn-classic btn-submit">
                    Cetak Surat
                </button>
                <button type="button" onclick="history.back()" class="btn-classic btn-back text-center">
                    Kembali
                </button>
            </div>
        </form>
    </div>

</body>
</html>
