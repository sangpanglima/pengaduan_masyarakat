<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Pindah Domisili</title>
    <!-- Importing Tailwind CSS for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Importing Google Fonts for a nicer look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4 py-8">

    <!-- Form Container with a card-like appearance -->
    <div class="w-full max-w-4xl bg-white p-8 rounded-xl shadow-lg">

        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Formulir Surat Keterangan Pindah</h1>
            <p class="text-gray-500">Isi data kepindahan Anda dengan lengkap dan benar.</p>
        </div>

        <!-- The form will send data to 'cetak_surat_pindah.php' -->
        <form method="POST" action="cetak_surat_pindah.php" target="_blank">
            <div class="space-y-8">

                <!-- Applicant Data Section -->
                <fieldset class="border border-gray-300 p-4 rounded-lg">
                    <legend class="text-lg font-semibold text-gray-700 px-2">Data Pemohon</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 mt-4">
                        <div>
                            <label for="nama_pemohon" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap Kepala Keluarga</label>
                            <input type="text" id="nama_pemohon" name="nama_pemohon" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="nik_pemohon" class="block text-sm font-medium text-gray-700 mb-1">NIK Kepala Keluarga</label>
                            <input type="text" id="nik_pemohon" name="nik_pemohon" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        </div>
                        <div>
                            <label for="no_kk" class="block text-sm font-medium text-gray-700 mb-1">Nomor Kartu Keluarga (KK)</label>
                            <input type="text" id="no_kk" name="no_kk" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        </div>
                        <div class="md:col-span-2">
                            <label for="alamat_asal" class="block text-sm font-medium text-gray-700 mb-1">Alamat Asal</label>
                            <textarea id="alamat_asal" name="alamat_asal" rows="2" required placeholder="Alamat lengkap sebelum pindah" maxlength="255" class="w-full px-4 py-2 border border-gray-300 rounded-lg"></textarea>
                        </div>
                    </div>
                </fieldset>

                <!-- Moving Details Section -->
                <fieldset class="border border-gray-300 p-4 rounded-lg">
                    <legend class="text-lg font-semibold text-gray-700 px-2">Data Kepindahan</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 mt-4">
                        <div class="md:col-span-2">
                            <label for="alamat_tujuan" class="block text-sm font-medium text-gray-700 mb-1">Alamat Tujuan</label>
                            <textarea id="alamat_tujuan" name="alamat_tujuan" rows="2" required placeholder="Alamat lengkap setelah pindah" maxlength="255" class="w-full px-4 py-2 border border-gray-300 rounded-lg"></textarea>
                        </div>
                        <div>
                            <label for="alasan_pindah" class="block text-sm font-medium text-gray-700 mb-1">Alasan Pindah</label>
                            <input type="text" id="alasan_pindah" name="alasan_pindah" placeholder="Contoh: Pekerjaan, Keluarga" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="jumlah_pengikut" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Keluarga yang Pindah</label>
                            <input type="number" id="jumlah_pengikut" name="jumlah_pengikut" required value="1" min="1" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        </div>
                    </div>
                </fieldset>

                <!-- Family Members Section -->
                <fieldset class="border border-gray-300 p-4 rounded-lg">
                    <legend class="text-lg font-semibold text-gray-700 px-2">Data Keluarga yang Pindah</legend>
                    <div class="mt-4">
                        <label for="data_keluarga" class="block text-sm font-medium text-gray-700 mb-1">Daftar Anggota Keluarga</label>
                        <textarea id="data_keluarga" name="data_keluarga" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Tuliskan data anggota keluarga yang ikut pindah dengan format:&#10;No. NIK - Nama - Hubungan Keluarga&#10;Contoh:&#10;1. 3201... - Siti Aminah - Istri&#10;2. 3201... - Budi Junior - Anak"></textarea>
                    </div>
                </fieldset>
            </div>

            <!-- Action Buttons -->
            <div class="mt-8 pt-6 border-t flex flex-col sm:flex-row-reverse gap-3">
                <button type="submit" name="cetak" class="w-full sm:w-auto bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                    Cetak Surat
                </button>
                <button type="button" onclick="history.back()" class="w-full sm:w-auto bg-gray-200 text-gray-800 font-semibold py-3 px-6 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition-colors text-center">
                    Kembali
                </button>
            </div>
        </form>
    </div>

</body>
</html>
