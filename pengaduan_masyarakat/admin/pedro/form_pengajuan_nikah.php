<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengantar Nikah (Model N1)</title>
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
        h1, h2, legend {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        /* Custom focus ring for better accessibility and branding */
        .form-input:focus {
            --tw-ring-color: rgba(20, 184, 166, 0.4); /* teal-500 with opacity */
            box-shadow: 0 0 0 3px var(--tw-ring-color);
            border-color: #14b8a6; /* teal-500 */
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4 sm:p-6 lg:p-8">

    <!-- Main Form Container -->
    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-200 my-8">

        <!-- Form Header -->
        <div class="bg-slate-50 p-6 sm:p-8 border-b border-slate-200">
            <div class="flex items-center gap-4">
                <!-- Icon with teal accent for marriage theme -->
                <div class="flex-shrink-0 bg-teal-100 p-3 rounded-xl">
                    <svg class="h-8 w-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-800">Formulir Pengantar Nikah (N1)</h1>
                    <p class="text-slate-500 mt-1">Lengkapi data calon mempelai sesuai dokumen yang sah.</p>
                </div>
            </div>
        </div>

        <!-- Form Body -->
        <div class="p-6 sm:p-8">
            <form method="POST" action="cetak_surat_nikah.php" target="_blank">
                <div class="space-y-12">

                    <!-- ================== DATA CALON SUAMI ================== -->
                    <div class="space-y-6">
                         <h2 class="text-lg font-bold text-teal-700 border-b border-teal-200 pb-2 flex items-center gap-2">
                             <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.908l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.908zM3 7.908v8.428a.75.75 0 00.372.648L12 22.236v-9l-9-5.25z" /></svg>
                             Data Calon Suami
                         </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                            <div>
                                <label for="nama_suami" class="block text-sm font-medium text-slate-700">Nama Lengkap</label>
                                <input type="text" id="nama_suami" name="nama_suami" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="bin_suami" class="block text-sm font-medium text-slate-700">Bin (Nama Ayah)</label>
                                <input type="text" id="bin_suami" name="bin_suami" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="nik_suami" class="block text-sm font-medium text-slate-700">NIK</label>
                                <input type="text" id="nik_suami" name="nik_suami" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." inputmode="numeric" oninput="this.value = this.value.replace(/\D/g, '')" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition">
                            </div>
                            <div>
                                <label for="tempat_lahir_suami" class="block text-sm font-medium text-slate-700">Tempat Lahir</label>
                                <input type="text" id="tempat_lahir_suami" name="tempat_lahir_suami" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="tanggal_lahir_suami" class="block text-sm font-medium text-slate-700">Tanggal Lahir</label>
                                <input type="date" id="tanggal_lahir_suami" name="tanggal_lahir_suami" required class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition">
                            </div>
                            <div>
                                <label for="agama_suami" class="block text-sm font-medium text-slate-700">Agama</label>
                                <select id="agama_suami" name="agama_suami" required class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition">
                                    <option>Islam</option>
                                    <option>Kristen Protestan</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div>
                                <label for="pekerjaan_suami" class="block text-sm font-medium text-slate-700">Pekerjaan</label>
                                <input type="text" id="pekerjaan_suami" name="pekerjaan_suami" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="status_suami" class="block text-sm font-medium text-slate-700">Status Perkawinan</label>
                                <select id="status_suami" name="status_suami" required class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition">
                                    <option>Jejaka</option>
                                    <option>Duda</option>
                                    <option>Beristri</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label for="alamat_suami" class="block text-sm font-medium text-slate-700">Alamat Lengkap</label>
                                <textarea id="alamat_suami" name="alamat_suami" rows="2" required maxlength="255" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- ================== DATA CALON ISTRI ================== -->
                     <div class="space-y-6">
                         <h2 class="text-lg font-bold text-teal-700 border-b border-teal-200 pb-2 flex items-center gap-2">
                             <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.908l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.908zM3 7.908v8.428a.75.75 0 00.372.648L12 22.236v-9l-9-5.25z" /></svg>
                             Data Calon Istri
                         </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                           <div>
                                <label for="nama_istri" class="block text-sm font-medium text-slate-700">Nama Lengkap</label>
                                <input type="text" id="nama_istri" name="nama_istri" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="binti_istri" class="block text-sm font-medium text-slate-700">Binti (Nama Ayah)</label>
                                <input type="text" id="binti_istri" name="binti_istri" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="nik_istri" class="block text-sm font-medium text-slate-700">NIK</label>
                                <input type="text" id="nik_istri" name="nik_istri" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." inputmode="numeric" oninput="this.value = this.value.replace(/\D/g, '')" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition">
                            </div>
                            <div>
                                <label for="tempat_lahir_istri" class="block text-sm font-medium text-slate-700">Tempat Lahir</label>
                                <input type="text" id="tempat_lahir_istri" name="tempat_lahir_istri" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="tanggal_lahir_istri" class="block text-sm font-medium text-slate-700">Tanggal Lahir</label>
                                <input type="date" id="tanggal_lahir_istri" name="tanggal_lahir_istri" required class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition">
                            </div>
                            <div>
                                <label for="agama_istri" class="block text-sm font-medium text-slate-700">Agama</label>
                                <select id="agama_istri" name="agama_istri" required class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition">
                                    <option>Islam</option>
                                    <option>Kristen Protestan</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div>
                                <label for="pekerjaan_istri" class="block text-sm font-medium text-slate-700">Pekerjaan</label>
                                <input type="text" id="pekerjaan_istri" name="pekerjaan_istri" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="status_istri" class="block text-sm font-medium text-slate-700">Status Perkawinan</label>
                                 <select id="status_istri" name="status_istri" required class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition">
                                     <option>Perawan</option>
                                     <option>Janda</option>
                                 </select>
                            </div>
                            <div class="md:col-span-2">
                                <label for="alamat_istri" class="block text-sm font-medium text-slate-700">Alamat Lengkap</label>
                                <textarea id="alamat_istri" name="alamat_istri" rows="2" required maxlength="255" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border-slate-300 rounded-lg focus:outline-none focus:border-teal-500 transition"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="mt-12 pt-6 border-t border-slate-200 flex flex-col sm:flex-row-reverse gap-4">
                    <button type="submit" name="cetak" class="inline-flex w-full justify-center items-center gap-2 sm:w-auto bg-teal-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-all duration-200">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.061c.662 0 1.18.568 1.12 1.227l-1.089 4.802a1.125 1.125 0 01-1.12 1.227H7.23c-.662 0-1.18-.568-1.12-1.227l-1.09-4.802a1.125 1.125 0 011.12-1.227h1.06" /></svg>
                        <span>Cetak Surat</span>
                    </button>
                    <button type="button" onclick="history.back()" class="inline-flex w-full justify-center sm:w-auto bg-white text-slate-700 font-semibold py-3 px-6 rounded-lg border border-slate-300 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-all duration-200 text-center">
                        Kembali
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
