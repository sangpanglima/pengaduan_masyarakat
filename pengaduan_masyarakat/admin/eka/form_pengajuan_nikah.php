<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengantar Nikah (Model N1)</title>
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
            <h1 class="text-xl font-bold uppercase">Formulir Pengantar Perkawinan</h1>
            <p class="text-sm mt-1">Model N1 - Untuk Kantor Urusan Agama</p>
        </div>

        <form method="POST" action="cetak_surat_nikah.php" target="_blank">
            <div class="space-y-8">

                <!-- ================== DATA CALON SUAMI ================== -->
                <fieldset>
                    <legend>I. Data Calon Suami</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mt-4">
                        <div>
                            <label for="nama_suami" class="block font-medium mb-1">Nama Lengkap</label>
                            <input type="text" id="nama_suami" name="nama_suami" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="bin_suami" class="block font-medium mb-1">Bin (Nama Ayah)</label>
                            <input type="text" id="bin_suami" name="bin_suami" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="nik_suami" class="block font-medium mb-1">NIK</label>
                            <input type="text" id="nik_suami" name="nik_suami" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/\D/g, '')" class="form-input">
                        </div>
                        <div>
                            <label for="tempat_lahir_suami" class="block font-medium mb-1">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir_suami" name="tempat_lahir_suami" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="tanggal_lahir_suami" class="block font-medium mb-1">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir_suami" name="tanggal_lahir_suami" required class="form-input">
                        </div>
                        <div>
                            <label for="agama_suami" class="block font-medium mb-1">Agama</label>
                             <select id="agama_suami" name="agama_suami" required class="form-input">
                                <option>Islam</option>
                                <option>Kristen Protestan</option>
                                <option>Katolik</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                                <option>Konghucu</option>
                            </select>
                        </div>
                        <div>
                            <label for="pekerjaan_suami" class="block font-medium mb-1">Pekerjaan</label>
                            <input type="text" id="pekerjaan_suami" name="pekerjaan_suami" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="status_suami" class="block font-medium mb-1">Status Perkawinan</label>
                            <select id="status_suami" name="status_suami" required class="form-input">
                                <option>Jejaka</option>
                                <option>Duda</option>
                                <option>Beristri</option>
                            </select>
                        </div>
                        <div class="md:col-span-2">
                            <label for="alamat_suami" class="block font-medium mb-1">Alamat Lengkap</label>
                            <textarea id="alamat_suami" name="alamat_suami" rows="2" required class="form-input" maxlength="255"></textarea>
                        </div>
                    </div>
                </fieldset>

                <!-- ================== DATA CALON ISTRI ================== -->
                <fieldset>
                    <legend>II. Data Calon Istri</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mt-4">
                        <div>
                            <label for="nama_istri" class="block font-medium mb-1">Nama Lengkap</label>
                            <input type="text" id="nama_istri" name="nama_istri" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="binti_istri" class="block font-medium mb-1">Binti (Nama Ayah)</label>
                            <input type="text" id="binti_istri" name="binti_istri" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="nik_istri" class="block font-medium mb-1">NIK</label>
                            <input type="text" id="nik_istri" name="nik_istri" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/\D/g, '')" class="form-input">
                        </div>
                        <div>
                            <label for="tempat_lahir_istri" class="block font-medium mb-1">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir_istri" name="tempat_lahir_istri" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="tanggal_lahir_istri" class="block font-medium mb-1">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir_istri" name="tanggal_lahir_istri" required class="form-input">
                        </div>
                        <div>
                            <label for="agama_istri" class="block font-medium mb-1">Agama</label>
                             <select id="agama_istri" name="agama_istri" required class="form-input">
                                <option>Islam</option>
                                <option>Kristen Protestan</option>
                                <option>Katolik</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                                <option>Konghucu</option>
                            </select>
                        </div>
                        <div>
                            <label for="pekerjaan_istri" class="block font-medium mb-1">Pekerjaan</label>
                            <input type="text" id="pekerjaan_istri" name="pekerjaan_istri" required class="form-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="status_istri" class="block font-medium mb-1">Status Perkawinan</label>
                             <select id="status_istri" name="status_istri" required class="form-input">
                                 <option>Perawan</option>
                                 <option>Janda</option>
                            </select>
                        </div>
                        <div class="md:col-span-2">
                            <label for="alamat_istri" class="block font-medium mb-1">Alamat Lengkap</label>
                            <textarea id="alamat_istri" name="alamat_istri" rows="2" required class="form-input" maxlength="255"></textarea>
                        </div>
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
