<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Kematian - Metro Style</title>
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
            background-color: #4c51bf; /* A deep indigo, for a serious tone */
        }
        /* Removing rounded corners and shadows for a flat look */
        .metro-tile {
            border-radius: 0;
            box-shadow: none;
        }
        .metro-input, .metro-select {
            border-radius: 0;
            border: 2px solid #9ca3af; /* gray-400 */
            background-color: #ffffff;
            padding: 0.75rem 1rem;
            width: 100%;
            transition: border-color 0.2s ease-in-out;
            font-family: 'Open Sans', sans-serif;
        }
        .metro-input:focus, .metro-select:focus {
            outline: none;
            border-color: #b91c1c; /* red-700 */
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
            cursor: pointer;
        }
        .metro-button.primary {
            background-color: #b91c1c; /* red-700 */
            color: white;
        }
        .metro-button.primary:hover {
            background-color: #991b1b; /* red-800 */
        }
        .metro-button.secondary {
            background-color: #e5e7eb; /* gray-200 */
            color: #111827; /* gray-900 */
            border-color: #9ca3af; /* gray-400 */
        }
        .metro-button.secondary:hover {
            background-color: #d1d5db; /* gray-300 */
        }
    </style>
</head>
<body class="p-4 sm:p-8 flex items-center justify-center min-h-screen">

    <!-- Main App Container -->
    <div class="w-full max-w-4xl bg-white metro-tile">
        
        <!-- Window Title Bar -->
        <header class="bg-gray-800 text-white p-3 flex justify-between items-center">
            <h1 class="text-lg font-semibold">Formulir Surat Keterangan Kematian</h1>
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
                <h2 class="text-3xl font-light text-gray-800">Keterangan Kematian</h2>
                <p class="text-gray-500">Pastikan semua data diisi dengan benar sesuai dokumen yang sah.</p>
            </div>

            <form method="POST" action="cetak_surat_kematian.php" target="_blank">
                <div class="space-y-8">

                    <!-- Data Almarhum / Almarhumah -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-red-700 border-b-2 border-red-200 pb-2">Data Almarhum / Almarhumah</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="lg:col-span-2">
                                <label for="nama_jenazah" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" id="nama_jenazah" name="nama_jenazah" required maxlength="60" class="metro-input" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="nik_jenazah" class="block text-sm font-semibold text-gray-700 mb-1">NIK</label>
                                <input type="text" id="nik_jenazah" name="nik_jenazah" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="metro-input">
                            </div>
                            <div>
                                <label for="jk_jenazah" class="block text-sm font-semibold text-gray-700 mb-1">Jenis Kelamin</label>
                                <select id="jk_jenazah" name="jk_jenazah" class="metro-select">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label for="umur_jenazah" class="block text-sm font-semibold text-gray-700 mb-1">Umur (Tahun)</label>
                                <input type="text" id="umur_jenazah" name="umur_jenazah" required maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="metro-input">
                            </div>
                            <div class="lg:col-span-3">
                                <label for="alamat_jenazah" class="block text-sm font-semibold text-gray-700 mb-1">Alamat Terakhir</label>
                                <textarea id="alamat_jenazah" name="alamat_jenazah" rows="2" class="metro-input" placeholder="Alamat lengkap sesuai KTP" required maxlength="255"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Detail Kematian -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-red-700 border-b-2 border-red-200 pb-2">Detail Kematian</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="tanggal_kematian" class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Kematian</label>
                                <input type="date" id="tanggal_kematian" name="tanggal_kematian" required class="metro-input">
                            </div>
                            <div>
                                <label for="waktu_kematian" class="block text-sm font-semibold text-gray-700 mb-1">Waktu Kematian</label>
                                <input type="time" id="waktu_kematian" name="waktu_kematian" required class="metro-input">
                            </div>
                            <div>
                                <label for="tempat_kematian" class="block text-sm font-semibold text-gray-700 mb-1">Meninggal di</label>
                                <input type="text" id="tempat_kematian" name="tempat_kematian" required maxlength="60" placeholder="Contoh: Rumah, Rumah Sakit, dll" class="metro-input">
                            </div>
                            <div>
                                <label for="penyebab_kematian" class="block text-sm font-semibold text-gray-700 mb-1">Penyebab Kematian</label>
                                <input type="text" id="penyebab_kematian" name="penyebab_kematian" required maxlength="60" placeholder="Contoh: Sakit, Usia Tua" class="metro-input" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Data Pelapor -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-red-700 border-b-2 border-red-200 pb-2">Data Pelapor</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama_pelapor" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap Pelapor</label>
                                <input type="text" id="nama_pelapor" name="nama_pelapor" required maxlength="60" class="metro-input" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="hubungan_pelapor" class="block text-sm font-semibold text-gray-700 mb-1">Hubungan dengan Almarhum/ah</label>
                                <input type="text" id="hubungan_pelapor" name="hubungan_pelapor" required maxlength="60" placeholder="Contoh: Anak, Istri, Tetangga" class="metro-input" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
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
