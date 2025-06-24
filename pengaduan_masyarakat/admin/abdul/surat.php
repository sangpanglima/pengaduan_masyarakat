<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Tidak Mampu - Metro Style</title>
    <!-- Importing Tailwind CSS for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Importing a font that resembles Segoe UI, the classic Windows font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Applying a Windows 8-style aesthetic */
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #1a202c; /* Dark background */
        }
        /* Removing rounded corners and shadows for a flat look */
        .metro-tile {
            border-radius: 0;
            box-shadow: none;
        }
        .metro-input, .metro-select {
            border-radius: 0;
            border: 2px solid #cbd5e0; /* gray-400 */
            background-color: #ffffff;
            padding: 0.75rem 1rem;
            width: 100%;
            transition: border-color 0.2s ease-in-out;
            font-family: 'Open Sans', sans-serif;
        }
        .metro-input:focus, .metro-select:focus {
            outline: none;
            border-color: #2563eb; /* blue-600 */
        }
        select.metro-select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>');
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em;
        }
        .metro-button {
            border-radius: 0;
            padding: 0.75rem 2rem;
            text-transform: uppercase;
            font-weight: 600;
            border: 2px solid transparent;
        }
        .metro-button.primary {
            background-color: #2563eb; /* blue-600 */
            color: white;
        }
        .metro-button.primary:hover {
            background-color: #1d4ed8; /* blue-700 */
        }
        .metro-button.secondary {
            background-color: #e2e8f0; /* gray-200 */
            color: #1a202c; /* gray-900 */
            border-color: #cbd5e0; /* gray-400 */
        }
        .metro-button.secondary:hover {
            background-color: #cbd5e0;
        }
    </style>
</head>
<body class="p-4 sm:p-8 flex items-center justify-center min-h-screen">

    <!-- Main App Container -->
    <div class="w-full max-w-4xl bg-white metro-tile">
        
        <!-- Window Title Bar -->
        <header class="bg-gray-800 text-white p-3 flex justify-between items-center">
            <h1 class="text-lg font-semibold">Formulir SKTM</h1>
            <div class="flex space-x-2">
                <div class="w-4 h-4 border-2 border-white"></div>
                <div class="w-4 h-4 border-2 border-white"></div>
                <div class="w-4 h-4 border-2 border-white flex items-center justify-center">
                    <span class="font-bold text-xs">X</span>
                </div>
            </div>
        </header>

        <!-- Form Content -->
        <div class="p-8">
            <div class="mb-6">
                <h2 class="text-3xl font-light text-gray-800">Surat Keterangan Tidak Mampu</h2>
                <p class="text-gray-500">Pastikan semua data diisi dengan benar.</p>
            </div>

            <form method="POST" action="cetak_surat_sktm.php" target="_blank">
                <div class="space-y-8">

                    <!-- Data Diri Pemohon -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-blue-600 border-b-2 border-blue-200 pb-2">Data Diri Pemohon</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" required maxlength="60" class="metro-input" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="nik" class="block text-sm font-semibold text-gray-700 mb-1">NIK</label>
                                <input type="text" id="nik" name="nik" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="metro-input">
                            </div>
                            <div>
                                <label for="jk" class="block text-sm font-semibold text-gray-700 mb-1">Jenis Kelamin</label>
                                <select id="jk" name="jk" class="metro-select">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label for="umur" class="block text-sm font-semibold text-gray-700 mb-1">Umur</label>
                                <input type="text" id="umur" name="umur" required maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="metro-input">
                            </div>
                            <div>
                                <label for="agama" class="block text-sm font-semibold text-gray-700 mb-1">Agama</label>
                                <select id="agama" name="agama" class="metro-select">
                                    <option>Islam</option>
                                    <option>Kristen Protestan</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div>
                                <label for="status" class="block text-sm font-semibold text-gray-700 mb-1">Status Perkawinan</label>
                                <select id="status" name="status" class="metro-select">
                                    <option>Belum Kawin</option>
                                    <option>Kawin</option>
                                    <option>Cerai Hidup</option>
                                    <option>Cerai Mati</option>
                                </select>
                            </div>
                            <div>
                                <label for="pekerjaan" class="block text-sm font-semibold text-gray-700 mb-1">Pekerjaan</label>
                                <input type="text" id="pekerjaan" name="pekerjaan" maxlength="60" required class="metro-input" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="kwn" class="block text-sm font-semibold text-gray-700 mb-1">Kewarganegaraan</label>
                                <input type="text" id="kwn" name="kwn" value="Indonesia" maxlength="60" class="metro-input" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div class="md:col-span-2">
                                <label for="alamat" class="block text-sm font-semibold text-gray-700 mb-1">Alamat Lengkap</label>
                                <textarea id="alamat" name="alamat" rows="3" class="metro-input" placeholder="Contoh: Jl. Merdeka No. 10, RT 01/RW 02..." required maxlength="255"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Data Orang Tua / Wali -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-blue-600 border-b-2 border-blue-200 pb-2">Data Orang Tua / Wali</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama_ayah" class="block text-sm font-semibold text-gray-700 mb-1">Nama Ayah</label>
                                <input type="text" id="nama_ayah" name="nama_ayah" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                             <div>
                                <label for="pekerjaan_ayah" class="block text-sm font-semibold text-gray-700 mb-1">Pekerjaan Ayah</label>
                                <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div class="md:col-span-2">
                                <label for="penghasilan" class="block text-sm font-semibold text-gray-700 mb-1">Penghasilan Rata-rata per Bulan (Rp)</label>
                                <input type="text" id="penghasilan" name="penghasilan" required placeholder="Contoh: 1500000" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="metro-input" maxlength="20">
                            </div>
                        </div>
                    </div>

                    <!-- Keterangan Lainnya -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-blue-600 border-b-2 border-blue-200 pb-2">Keterangan Lainnya</h3>
                        <div>
                            <label for="keperluan" class="block text-sm font-semibold text-gray-700 mb-1">Keperluan</label>
                            <textarea id="keperluan" name="keperluan" rows="3" class="metro-input" placeholder="Contoh: Untuk mengajukan beasiswa pendidikan" required maxlength="255"></textarea>
                        </div>
                    </div>

                    <!-- Buttons Container -->
                    <div class="pt-6 border-t-2 border-gray-200 flex flex-col sm:flex-row-reverse gap-3">
                        <button type="submit" name="cetak" class="metro-button primary">Cetak Surat</button>
                        <a href="../index.php" class="metro-button secondary text-center">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
