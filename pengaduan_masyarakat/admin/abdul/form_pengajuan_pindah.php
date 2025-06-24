<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Pindah - Metro Style</title>
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
            background-color: #1e3a8a; /* A deep blue, typical for Windows */
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
            border-color: #4f46e5; /* indigo-600 */
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
            background-color: #4f46e5; /* indigo-600 */
            color: white;
        }
        .metro-button.primary:hover {
            background-color: #4338ca; /* indigo-700 */
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
            <h1 class="text-lg font-semibold">Formulir Pindah Domisili</h1>
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
                <h2 class="text-3xl font-light text-gray-800">Surat Keterangan Pindah</h2>
                <p class="text-gray-500">Isi data kepindahan Anda dengan lengkap dan benar.</p>
            </div>

            <form method="POST" action="cetak_surat_pindah.php" target="_blank">
                <div class="space-y-8">

                    <!-- Applicant Data Section -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-indigo-600 border-b-2 border-indigo-200 pb-2">Data Pemohon</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div>
                                <label for="nama_pemohon" class="block text-sm font-semibold text-gray-700 mb-1">Nama Kepala Keluarga</label>
                                <input type="text" id="nama_pemohon" name="nama_pemohon" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="nik_pemohon" class="block text-sm font-semibold text-gray-700 mb-1">NIK Kepala Keluarga</label>
                                <input type="text" id="nik_pemohon" name="nik_pemohon" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="metro-input">
                            </div>
                            <div>
                                <label for="no_kk" class="block text-sm font-semibold text-gray-700 mb-1">Nomor Kartu Keluarga (KK)</label>
                                <input type="text" id="no_kk" name="no_kk" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="metro-input">
                            </div>
                            <div class="lg:col-span-3">
                                <label for="alamat_asal" class="block text-sm font-semibold text-gray-700 mb-1">Alamat Asal</label>
                                <textarea id="alamat_asal" name="alamat_asal" rows="2" required placeholder="Alamat lengkap sebelum pindah" class="metro-input" maxlength="255"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Moving Details Section -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-indigo-600 border-b-2 border-indigo-200 pb-2">Data Kepindahan</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label for="alamat_tujuan" class="block text-sm font-semibold text-gray-700 mb-1">Alamat Tujuan</label>
                                <textarea id="alamat_tujuan" name="alamat_tujuan" rows="2" required placeholder="Alamat lengkap setelah pindah" class="metro-input" maxlength="255"></textarea>
                            </div>
                            <div>
                                <label for="alasan_pindah" class="block text-sm font-semibold text-gray-700 mb-1">Alasan Pindah</label>
                                <input type="text" id="alasan_pindah" name="alasan_pindah" placeholder="Contoh: Pekerjaan, Keluarga" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="jumlah_pengikut" class="block text-sm font-semibold text-gray-700 mb-1">Jumlah Keluarga yang Pindah</label>
                                <input type="number" id="jumlah_pengikut" name="jumlah_pengikut" required value="1" min="1" class="metro-input">
                            </div>
                        </div>
                    </div>

                    <!-- Family Members Section -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-indigo-600 border-b-2 border-indigo-200 pb-2">Data Keluarga yang Pindah</h3>
                        <div>
                            <label for="data_keluarga" class="block text-sm font-semibold text-gray-700 mb-1">Daftar Anggota Keluarga</label>
                            <textarea id="data_keluarga" name="data_keluarga" rows="5" required class="metro-input" placeholder="Tuliskan data anggota keluarga yang ikut pindah dengan format:&#10;No. NIK - Nama - Hubungan Keluarga&#10;Contoh:&#10;1. 3201... - Siti Aminah - Istri&#10;2. 3201... - Budi Junior - Anak"></textarea>
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
