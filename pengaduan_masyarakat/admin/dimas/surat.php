<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Tidak Mampu</title>
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
            <h1 class="text-2xl font-bold text-gray-800">Formulir Surat Keterangan Tidak Mampu</h1>
            <p class="text-gray-500">Pastikan semua data diisi dengan benar untuk keperluan administrasi.</p>
        </div>

        <form method="POST" action="cetak_surat_sktm.php" target="_blank">
            <!-- Grid layout for responsive fields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5">
                
                <h2 class="md:col-span-2 text-lg font-semibold text-gray-700 border-b pb-2 mt-2">Data Diri Pemohon</h2>

                <!-- Nama Field -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                </div>
                
                <!-- NIK Field (Only numbers allowed) -->
                <div>
                    <label for="nik" class="block text-sm font-medium text-gray-700 mb-1">NIK</label>
                    <input type="text" id="nik" name="nik" required maxlength="16" inputmode="numeric" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <!-- Jenis Kelamin Field -->
                <div>
                    <label for="jk" class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                    <select id="jk" name="jk" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

                <!-- Umur Field (Only numbers allowed) -->
                <div>
                    <label for="umur" class="block text-sm font-medium text-gray-700 mb-1">Umur</label>
                    <input type="text" id="umur" name="umur" required maxlength="3" inputmode="numeric" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <!-- Agama Field -->
                <div>
                    <label for="agama" class="block text-sm font-medium text-gray-700 mb-1">Agama</label>
                    <select id="agama" name="agama" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                        <option>Islam</option>
                        <option>Kristen Protestan</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Buddha</option>
                        <option>Konghucu</option>
                    </select>
                </div>

                <!-- Status Perkawinan Field -->
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status Perkawinan</label>
                    <select id="status" name="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                        <option>Belum Kawin</option>
                        <option>Kawin</option>
                        <option>Cerai Hidup</option>
                        <option>Cerai Mati</option>
                    </select>
                </div>

                <!-- Pekerjaan Field -->
                 <div>
                    <label for="pekerjaan" class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                </div>

                <!-- Kewarganegaraan Field -->
                <div>
                    <label for="kwn" class="block text-sm font-medium text-gray-700 mb-1">Kewarganegaraan</label>
                    <input type="text" id="kwn" name="kwn" value="Indonesia" maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                </div>

                <!-- Alamat Field -->
                <div class="md:col-span-2">
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat Lengkap</label>
                    <textarea id="alamat" name="alamat" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Contoh: Jl. Merdeka No. 10, RT 01/RW 02, Kel. Sukamaju, Kec. Sejahtera" maxlength="255"></textarea>
                </div>

                <h2 class="md:col-span-2 text-lg font-semibold text-gray-700 border-b pb-2 mt-4">Data Orang Tua / Wali</h2>
                
                <!-- Nama Ayah -->
                <div>
                    <label for="nama_ayah" class="block text-sm font-medium text-gray-700 mb-1">Nama Ayah</label>
                    <input type="text" id="nama_ayah" name="nama_ayah" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                </div>

                <!-- Pekerjaan Ayah -->
                <div>
                    <label for="pekerjaan_ayah" class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan Ayah</label>
                    <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" required maxlength="60" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                </div>

                <!-- Penghasilan -->
                <div class="md:col-span-2">
                    <label for="penghasilan" class="block text-sm font-medium text-gray-700 mb-1">Penghasilan Rata-rata per Bulan</label>
                    <input type="text" id="penghasilan" name="penghasilan" required maxlength="20" placeholder="Contoh: 1500000" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <h2 class="md:col-span-2 text-lg font-semibold text-gray-700 border-b pb-2 mt-4">Keterangan Lainnya</h2>
                 <!-- Keperluan Field -->
                 <div class="md:col-span-2">
                    <label for="keperluan" class="block text-sm font-medium text-gray-700 mb-1">Keperluan</label>
                    <textarea id="keperluan" name="keperluan" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Contoh: Untuk mengajukan beasiswa pendidikan" required maxlength="255"></textarea>
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
