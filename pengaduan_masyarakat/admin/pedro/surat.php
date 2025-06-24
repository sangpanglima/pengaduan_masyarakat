<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Tidak Mampu</title>
    <!-- Tailwind CSS for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts for a professional look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Applying a modern, professional font pairing */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* bg-slate-50 */
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        /* Custom focus ring for better accessibility and branding */
        .form-input:focus {
            --tw-ring-color: rgba(59, 130, 246, 0.4); /* blue-500 with opacity */
            box-shadow: 0 0 0 3px var(--tw-ring-color);
            border-color: #3b82f6; /* blue-500 */
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4 sm:p-6 lg:p-8">

    <!-- Main Form Container -->
    <div class="w-full max-w-3xl bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-200 my-8">

        <!-- Form Header -->
        <div class="bg-slate-50 p-6 sm:p-8 border-b border-slate-200">
            <div class="flex items-center gap-4">
                <!-- Icon to add a professional touch -->
                <div class="flex-shrink-0 bg-blue-100 p-3 rounded-xl">
                    <svg class="h-8 w-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-800">Formulir SKTM</h1>
                    <p class="text-slate-500 mt-1">Pastikan data diisi dengan benar untuk proses administrasi.</p>
                </div>
            </div>
        </div>

        <!-- Form Body -->
        <div class="p-6 sm:p-8">
            <form method="POST" action="cetak_surat_sktm.php" target="_blank">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">

                    <!-- Section Title: Data Diri -->
                    <h2 class="md:col-span-2 text-lg font-bold text-blue-700 border-b border-blue-200 pb-2 flex items-center gap-2">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
                        Data Diri Pemohon
                    </h2>

                    <!-- Nama Lengkap -->
                    <div>
                        <label for="nama" class="block text-sm font-medium text-slate-700">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>

                    <!-- NIK -->
                    <div>
                        <label for="nik" class="block text-sm font-medium text-slate-700">Nomor Induk Kependudukan (NIK)</label>
                        <input type="text" id="nik" name="nik" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition">
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label for="jk" class="block text-sm font-medium text-slate-700">Jenis Kelamin</label>
                        <select id="jk" name="jk" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>

                    <!-- Umur -->
                    <div>
                        <label for="umur" class="block text-sm font-medium text-slate-700">Umur</label>
                        <input type="text" id="umur" name="umur" required maxlength="3" inputmode="numeric" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition" placeholder="Tahun">
                    </div>

                    <!-- Agama -->
                    <div>
                        <label for="agama" class="block text-sm font-medium text-slate-700">Agama</label>
                        <select id="agama" name="agama" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition">
                            <option>Islam</option>
                            <option>Kristen Protestan</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Buddha</option>
                            <option>Konghucu</option>
                        </select>
                    </div>

                    <!-- Status Perkawinan -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-slate-700">Status Perkawinan</label>
                        <select id="status" name="status" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition">
                            <option>Belum Kawin</option>
                            <option>Kawin</option>
                            <option>Cerai Hidup</option>
                            <option>Cerai Mati</option>
                        </select>
                    </div>

                    <!-- Pekerjaan -->
                    <div>
                        <label for="pekerjaan" class="block text-sm font-medium text-slate-700">Pekerjaan</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition" placeholder="Contoh: Belum Bekerja" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>

                    <!-- Kewarganegaraan -->
                    <div>
                        <label for="kwn" class="block text-sm font-medium text-slate-700">Kewarganegaraan</label>
                        <input type="text" id="kwn" name="kwn" value="Indonesia" maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>

                    <!-- Alamat -->
                    <div class="md:col-span-2">
                        <label for="alamat" class="block text-sm font-medium text-slate-700">Alamat Lengkap</label>
                        <textarea id="alamat" name="alamat" rows="3" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition" placeholder="Contoh: Jl. Merdeka No. 10, RT 01/RW 02, Kel. Sukamaju, Kec. Sejahtera" required maxlength="255"></textarea>
                    </div>

                    <!-- Section Title: Data Orang Tua -->
                    <h2 class="md:col-span-2 text-lg font-bold text-blue-700 border-b border-blue-200 pb-2 mt-6 flex items-center gap-2">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m-7.5-2.964A3 3 0 006 12v-1.5a3 3 0 013-3h.015M21 21v-1.5a3 3 0 00-3-3H6a3 3 0 00-3 3V21m13.5-9V9" /></svg>
                        Data Orang Tua / Wali
                    </h2>

                    <!-- Nama Ayah -->
                    <div>
                        <label for="nama_ayah" class="block text-sm font-medium text-slate-700">Nama Ayah</label>
                        <input type="text" id="nama_ayah" name="nama_ayah" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>

                    <!-- Nama Ibu -->
                    <div>
                        <label for="nama_ibu" class="block text-sm font-medium text-slate-700">Nama Ibu</label>
                        <input type="text" id="nama_ibu" name="nama_ibu" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>

                    <!-- Pekerjaan Ayah -->
                    <div>
                        <label for="pekerjaan_ayah" class="block text-sm font-medium text-slate-700">Pekerjaan Ayah</label>
                        <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition" placeholder="Contoh: Buruh Harian" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>

                    <!-- Pekerjaan Ibu -->
                    <div>
                        <label for="pekerjaan_ibu" class="block text-sm font-medium text-slate-700">Pekerjaan Ibu</label>
                        <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition" placeholder="Contoh: Ibu Rumah Tangga" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>

                    <!-- Penghasilan Ayah -->
                    <div>
                        <label for="penghasilan_ayah" class="block text-sm font-medium text-slate-700">Penghasilan Ayah (Rp)</label>
                        <input type="text" id="penghasilan_ayah" name="penghasilan_ayah" required maxlength="20" placeholder="Contoh: 1500000" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition">
                    </div>

                    <!-- Penghasilan Ibu -->
                    <div>
                        <label for="penghasilan_ibu" class="block text-sm font-medium text-slate-700">Penghasilan Ibu (Rp)</label>
                        <input type="text" id="penghasilan_ibu" name="penghasilan_ibu" required maxlength="20" placeholder="Contoh: 800000" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition">
                    </div>

                    <!-- Section Title: Keterangan Lainnya -->
                    <h2 class="md:col-span-2 text-lg font-bold text-blue-700 border-b border-blue-200 pb-2 mt-6 flex items-center gap-2">
                       <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" /></svg>
                        Keterangan Lainnya
                    </h2>

                    <!-- Keperluan -->
                    <div class="md:col-span-2">
                        <label for="keperluan" class="block text-sm font-medium text-slate-700">Tujuan Penggunaan Surat</label>
                        <textarea id="keperluan" name="keperluan" rows="3" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-blue-500 transition" placeholder="Contoh: Untuk mengajukan keringanan biaya pendidikan anak" required maxlength="255"></textarea>
                    </div>

                    <!-- Action Buttons -->
                    <div class="md:col-span-2 mt-8 pt-6 border-t border-slate-200 flex flex-col sm:flex-row-reverse gap-4">
                        <button type="submit" name="cetak" class="inline-flex w-full justify-center items-center gap-2 sm:w-auto bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200">
                             <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.061c.662 0 1.18.568 1.12 1.227l-1.089 4.802a1.125 1.125 0 01-1.12 1.227H7.23c-.662 0-1.18-.568-1.12-1.227l-1.09-4.802a1.125 1.125 0 011.12-1.227h1.06" /></svg>
                            <span>Cetak Surat</span>
                        </button>
                        <button type="button" onclick="history.back()" class="inline-flex w-full justify-center sm:w-auto bg-white text-slate-700 font-semibold py-3 px-6 rounded-lg border border-slate-300 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 text-center">
                            Kembali
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
