<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Kematian</title>
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
            <h2 class="text-2xl font-bold uppercase">Surat Keterangan Kematian</h2>
        </div>

        <form method="POST" action="cetak_surat_kematian.php" target="_blank">
            <div class="space-y-8">

                <!-- Data Almarhum / Almarhumah -->
                <fieldset>
                    <legend>I. Data Almarhum / Almarhumah</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mt-4">
                        <div>
                            <label for="nama_jenazah" class="block font-medium mb-1">Nama Lengkap</label>
                            <input type="text" id="nama_jenazah" name="nama_jenazah" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="nik_jenazah" class="block font-medium mb-1">NIK</label>
                            <input type="text" id="nik_jenazah" name="nik_jenazah" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input">
                        </div>
                        <div>
                            <label for="jk_jenazah" class="block font-medium mb-1">Jenis Kelamin</label>
                            <select id="jk_jenazah" name="jk_jenazah" class="form-input">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label for="umur_jenazah" class="block font-medium mb-1">Umur (Saat Meninggal)</label>
                            <input type="text" id="umur_jenazah" name="umur_jenazah" required maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input">
                        </div>
                        <div class="md:col-span-2">
                            <label for="alamat_jenazah" class="block font-medium mb-1">Alamat Terakhir</label>
                            <textarea id="alamat_jenazah" name="alamat_jenazah" rows="2" required placeholder="Alamat lengkap sesuai KTP" class="form-input" maxlength="255"></textarea>
                        </div>
                    </div>
                </fieldset>

                <!-- Detail Kematian -->
                <fieldset>
                    <legend>II. Detail Kematian</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mt-4">
                        <div>
                            <label for="tanggal_kematian" class="block font-medium mb-1">Tanggal Kematian</label>
                            <input type="date" id="tanggal_kematian" name="tanggal_kematian" required class="form-input">
                        </div>
                        <div>
                            <label for="waktu_kematian" class="block font-medium mb-1">Waktu Kematian</label>
                            <input type="time" id="waktu_kematian" name="waktu_kematian" required class="form-input">
                        </div>
                        <div>
                            <label for="tempat_kematian" class="block font-medium mb-1">Meninggal di</label>
                            <input type="text" id="tempat_kematian" name="tempat_kematian" required placeholder="Contoh: Rumah, Rumah Sakit" class="form-input" maxlength="60">
                        </div>
                        <div>
                            <label for="penyebab_kematian" class="block font-medium mb-1">Penyebab Kematian</label>
                            <input type="text" id="penyebab_kematian" name="penyebab_kematian" required placeholder="Contoh: Sakit, Usia Tua" class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                    </div>
                </fieldset>

                <!-- Data Pelapor -->
                <fieldset>
                    <legend>III. Data Pelapor</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mt-4">
                        <div>
                            <label for="nama_pelapor" class="block font-medium mb-1">Nama Lengkap Pelapor</label>
                            <input type="text" id="nama_pelapor" name="nama_pelapor" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="hubungan_pelapor" class="block font-medium mb-1">Hubungan dengan Almarhum/ah</label>
                            <input type="text" id="hubungan_pelapor" name="hubungan_pelapor" required placeholder="Contoh: Anak, Istri" class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                    </div>
                </fieldset>

                <!-- Action Buttons -->
                <div class="mt-10 pt-6 border-t border-dashed border-black flex flex-col sm:flex-row-reverse gap-4">
                    <button type="submit" name="cetak" class="btn-classic btn-submit">
                        Cetak Surat
                    </button>
                    <button type="button" onclick="history.back()" class="btn-classic btn-back text-center">
                        Kembali
                    </button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>
