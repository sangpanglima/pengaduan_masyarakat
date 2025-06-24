<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Kematian</title>
    <!-- Importing Tailwind CSS for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Importing Google Fonts for a nicer look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Applying the Inter font to the body */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4 py-8">

    <!-- Form Container with a card-like appearance -->
    <div class="w-full max-w-3xl bg-white p-8 rounded-xl shadow-lg">

        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Formulir Surat Keterangan Kematian</h1>
            <p class="text-gray-500">Pastikan semua data diisi dengan benar sesuai dokumen yang sah.</p>
        </div>

        <!-- Ganti 'action' sesuai dengan file pemroses Anda -->
        <form method="POST" action="cetak_surat_kematian.php" target="_blank">
            <!-- Grid layout for responsive fields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5">
                
                <!-- Bagian Data Almarhum/Almarhumah -->
                <h2 class="md:col-span-2 text-lg font-semibold text-gray-700 border-b pb-2 mt-2">Data Almarhum / Almarhumah</h2>

                <div>
                    <label for="nama_jenazah" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" id="nama_jenazah" name="nama_jenazah" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                </div>
                
                <div>
                    <label for="nik_jenazah" class="block text-sm font-medium text-gray-700 mb-1">NIK</label>
                    <input type="text" id="nik_jenazah" name="nik_jenazah" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <div>
                    <label for="jk_jenazah" class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                    <select id="jk_jenazah" name="jk_jenazah" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

                <div>
                    <label for="umur_jenazah" class="block text-sm font-medium text-gray-700 mb-1">Umur (Tahun)</label>
                    <input type="text" id="umur_jenazah" name="umur_jenazah" required maxlength="3" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                </div>
                
                <div class="md:col-span-2">
                    <label for="alamat_jenazah" class="block text-sm font-medium text-gray-700 mb-1">Alamat Terakhir</label>
                    <textarea id="alamat_jenazah" name="alamat_jenazah" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Alamat lengkap sesuai KTP" required maxlength="255"></textarea>
                </div>
                
                <!-- Bagian Detail Kematian -->
                <h2 class="md:col-span-2 text-lg font-semibold text-gray-700 border-b pb-2 mt-4">Detail Kematian</h2>
                
                <div>
                    <label for="tanggal_kematian" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Kematian</label>
                    <input type="date" id="tanggal_kematian" name="tanggal_kematian" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <div>
                    <label for="waktu_kematian" class="block text-sm font-medium text-gray-700 mb-1">Waktu Kematian</label>
                    <input type="time" id="waktu_kematian" name="waktu_kematian" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <div>
                    <label for="tempat_kematian" class="block text-sm font-medium text-gray-700 mb-1">Meninggal di</label>
                    <input type="text" id="tempat_kematian" name="tempat_kematian" required maxlength="60" placeholder="Contoh: Rumah, Rumah Sakit, dll" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <div>
                    <label for="penyebab_kematian" class="block text-sm font-medium text-gray-700 mb-1">Penyebab Kematian</label>
                    <input type="text" id="penyebab_kematian" name="penyebab_kematian" required maxlength="60" placeholder="Contoh: Sakit, Usia Tua" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                </div>

                <!-- Bagian Data Pelapor -->
                <h2 class="md:col-span-2 text-lg font-semibold text-gray-700 border-b pb-2 mt-4">Data Pelapor</h2>
                
                <div>
                    <label for="nama_pelapor" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap Pelapor</label>
                    <input type="text" id="nama_pelapor" name="nama_pelapor" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                </div>

                <div>
                    <label for="hubungan_pelapor" class="block text-sm font-medium text-gray-700 mb-1">Hubungan dengan Almarhum/ah</label>
                    <input type="text" id="hubungan_pelapor" name="hubungan_pelapor" required maxlength="60" placeholder="Contoh: Anak, Istri, Tetangga" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                </div>
                
                <!-- Buttons Container -->
                <div class="md:col-span-2 mt-6 flex flex-col sm:flex-row-reverse gap-3">
                    <!-- Submit Button -->
                    <button type="submit" name="cetak" class="w-full sm:w-auto bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                        Cetak Surat
                    </button>
                    <!-- Back Button -->
                    <button type="button" onclick="history.back()" class="w-full sm:w-auto bg-gray-200 text-gray-800 font-semibold py-3 px-6 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition-colors text-center">
                        Kembali
                    </button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>
