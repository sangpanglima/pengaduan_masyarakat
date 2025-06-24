<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Tidak Mampu</title>
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
            font-size: 13pt; /* Ukuran font diperkecil sedikit */
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
            <h2 class="text-2xl font-bold uppercase">Surat Keterangan Tidak Mampu</h2>
        </div>

        <form method="POST" action="cetak_surat_sktm.php" target="_blank">
            <div class="space-y-8">

                <!-- Data Diri Pemohon -->
                <fieldset>
                    <legend>I. Data Diri Pemohon</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mt-4">
                        <div>
                            <label for="nama" class="block font-medium mb-1">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="nik" class="block font-medium mb-1">NIK</label>
                            <input type="text" id="nik" name="nik" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input">
                        </div>
                        <div>
                            <label for="jk" class="block font-medium mb-1">Jenis Kelamin</label>
                            <select id="jk" name="jk" class="form-input">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label for="umur" class="block font-medium mb-1">Umur (Tahun)</label>
                            <input type="text" id="umur" name="umur" required maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input">
                        </div>
                        <div>
                            <label for="agama" class="block font-medium mb-1">Agama</label>
                            <select id="agama" name="agama" class="form-input">
                                <option>Islam</option>
                                <option>Kristen Protestan</option>
                                <option>Katolik</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                                <option>Konghucu</option>
                            </select>
                        </div>
                        <div>
                            <label for="status" class="block font-medium mb-1">Status Perkawinan</label>
                            <select id="status" name="status" class="form-input">
                                <option>Belum Kawin</option>
                                <option>Kawin</option>
                                <option>Cerai Hidup</option>
                                <option>Cerai Mati</option>
                            </select>
                        </div>
                        <div>
                            <label for="pekerjaan" class="block font-medium mb-1">Pekerjaan</label>
                            <input type="text" id="pekerjaan" name="pekerjaan" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="kwn" class="block font-medium mb-1">Kewarganegaraan</label>
                            <input type="text" id="kwn" name="kwn" value="Indonesia" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div class="md:col-span-2">
                            <label for="alamat" class="block font-medium mb-1">Alamat Lengkap</label>
                            <textarea id="alamat" name="alamat" rows="3" required class="form-input" maxlength="255"></textarea>
                        </div>
                    </div>
                </fieldset>

                <!-- Data Orang Tua -->
                <fieldset>
                    <legend>II. Data Orang Tua / Wali</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mt-4">
                        <div>
                            <label for="nama_ayah" class="block font-medium mb-1">Nama Ayah</label>
                            <input type="text" id="nama_ayah" name="nama_ayah" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                         <div>
                            <label for="pekerjaan_ayah" class="block font-medium mb-1">Pekerjaan Ayah</label>
                            <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div class="md:col-span-2">
                            <label for="penghasilan" class="block font-medium mb-1">Penghasilan Rata-rata per Bulan</label>
                            <input type="text" id="penghasilan" name="penghasilan" required placeholder="Contoh: 1500000" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input" maxlength="20">
                        </div>
                    </div>
                </fieldset>

                <!-- Keterangan Lainnya -->
                 <fieldset>
                    <legend>III. Keterangan Lainnya</legend>
                     <div class="mt-4">
                        <label for="keperluan" class="block font-medium mb-1">Surat ini dipergunakan untuk keperluan:</label>
                        <textarea id="keperluan" name="keperluan" rows="3" required class="form-input" placeholder="Contoh: Pengajuan Beasiswa Pendidikan Anak" maxlength="255"></textarea>
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
    