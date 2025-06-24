<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengantar Nikah (N1)</title>
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

    <div class="w-full max-w-4xl bg-white p-8 rounded-xl shadow-lg">

        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Formulir Pengantar Nikah (Model N1)</h1>
            <p class="text-gray-500">Isi semua data dengan benar sesuai dokumen (KTP, KK, Akta Lahir).</p>
        </div>

        <form method="POST" action="cetak_surat_nikah.php" target="_blank">
            <div class="space-y-10">

                <!-- ================== DATA CALON SUAMI ================== -->
                <fieldset class="border border-gray-300 p-4 rounded-lg">
                    <legend class="text-xl font-semibold text-gray-800 px-2">Data Calon Suami</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 mt-4">
                        <div>
                            <label for="nama_suami" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" id="nama_suami" name="nama_suami" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                         <div>
                            <label for="bin_suami" class="block text-sm font-medium text-gray-700 mb-1">Bin (Nama Ayah)</label>
                            <input type="text" id="bin_suami" name="bin_suami" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="nik_suami" class="block text-sm font-medium text-gray-700 mb-1">NIK</label>
                            <input type="text" id="nik_suami" name="nik_suami" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        </div>
                         <div>
                            <label for="tempat_lahir_suami" class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir_suami" name="tempat_lahir_suami" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                         <div>
                            <label for="tanggal_lahir_suami" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir_suami" name="tanggal_lahir_suami" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        </div>
                         <div>
                            <label for="agama_suami" class="block text-sm font-medium text-gray-700 mb-1">Agama</label>
                            <select id="agama_suami" name="agama_suami" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                                <option>Islam</option>
                                <option>Kristen Protestan</option>
                                <option>Katolik</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                                <option>Konghucu</option>
                            </select>
                        </div>
                         <div>
                            <label for="pekerjaan_suami" class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan</label>
                            <input type="text" id="pekerjaan_suami" name="pekerjaan_suami" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                         <div>
                            <label for="status_suami" class="block text-sm font-medium text-gray-700 mb-1">Status Perkawinan</label>
                            <select id="status_suami" name="status_suami" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                                <option>Jejaka</option>
                                <option>Duda</option>
                                <option>Beristri</option>
                            </select>
                        </div>
                        <div class="md:col-span-2">
                            <label for="alamat_suami" class="block text-sm font-medium text-gray-700 mb-1">Alamat Lengkap</label>
                            <textarea id="alamat_suami" name="alamat_suami" rows="2" required maxlength="255" class="w-full px-4 py-2 border border-gray-300 rounded-lg"></textarea>
                        </div>
                    </div>
                </fieldset>

                <!-- ================== DATA CALON ISTRI ================== -->
                <fieldset class="border border-gray-300 p-4 rounded-lg">
                    <legend class="text-xl font-semibold text-gray-800 px-2">Data Calon Istri</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 mt-4">
                        <div>
                            <label for="nama_istri" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" id="nama_istri" name="nama_istri" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                         <div>
                            <label for="binti_istri" class="block text-sm font-medium text-gray-700 mb-1">Binti (Nama Ayah)</label>
                            <input type="text" id="binti_istri" name="binti_istri" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="nik_istri" class="block text-sm font-medium text-gray-700 mb-1">NIK</label>
                            <input type="text" id="nik_istri" name="nik_istri" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        </div>
                         <div>
                            <label for="tempat_lahir_istri" class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir_istri" name="tempat_lahir_istri" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                         <div>
                            <label for="tanggal_lahir_istri" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir_istri" name="tanggal_lahir_istri" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        </div>
                         <div>
                            <label for="agama_istri" class="block text-sm font-medium text-gray-700 mb-1">Agama</label>
                            <select id="agama_istri" name="agama_istri" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                                <option>Islam</option>
                                <option>Kristen Protestan</option>
                                <option>Katolik</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                                <option>Konghucu</option>
                            </select>
                        </div>
                         <div>
                            <label for="pekerjaan_istri" class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan</label>
                            <input type="text" id="pekerjaan_istri" name="pekerjaan_istri" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                        <div>
                            <label for="status_istri" class="block text-sm font-medium text-gray-700 mb-1">Status Perkawinan</label>
                             <select id="status_istri" name="status_istri" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                                 <option>Perawan</option>
                                 <option>Janda</option>
                            </select>
                        </div>
                        <div class="md:col-span-2">
                            <label for="alamat_istri" class="block text-sm font-medium text-gray-700 mb-1">Alamat Lengkap</label>
                            <textarea id="alamat_istri" name="alamat_istri" rows="2" required maxlength="255" class="w-full px-4 py-2 border border-gray-300 rounded-lg"></textarea>
                        </div>
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
