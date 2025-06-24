<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Kematian</title>
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
        h1, h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        /* Custom focus ring for better accessibility and branding */
        .form-input:focus {
            --tw-ring-color: rgba(239, 68, 68, 0.4); /* red-500 with opacity */
            box-shadow: 0 0 0 3px var(--tw-ring-color);
            border-color: #ef4444; /* red-500 */
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
                <div class="flex-shrink-0 bg-red-100 p-3 rounded-xl">
                    <svg class="h-8 w-8 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-800">Formulir Keterangan Kematian</h1>
                    <p class="text-slate-500 mt-1">Pastikan data diisi dengan benar sesuai dokumen yang sah.</p>
                </div>
            </div>
        </div>

        <!-- Form Body -->
        <div class="p-6 sm:p-8">
            <form method="POST" action="cetak_surat_kematian.php" target="_blank">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                    
                    <!-- Section Title: Data Almarhum / Almarhumah -->
                    <h2 class="md:col-span-2 text-lg font-bold text-red-700 border-b border-red-200 pb-2 flex items-center gap-2">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Data Almarhum / Almarhumah
                    </h2>

                    <!-- Nama Lengkap -->
                    <div>
                        <label for="nama_jenazah" class="block text-sm font-medium text-slate-700">Nama Lengkap</label>
                        <input type="text" id="nama_jenazah" name="nama_jenazah" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>
                    
                    <!-- NIK -->
                    <div>
                        <label for="nik_jenazah" class="block text-sm font-medium text-slate-700">Nomor Induk Kependudukan (NIK)</label>
                        <input type="text" id="nik_jenazah" name="nik_jenazah" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition">
                    </div>

                    <!-- Tempat Lahir -->
                    <div>
                        <label for="tempat_lahir_jenazah" class="block text-sm font-medium text-slate-700">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir_jenazah" name="tempat_lahir_jenazah" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label for="tanggal_lahir_jenazah" class="block text-sm font-medium text-slate-700">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir_jenazah" name="tanggal_lahir_jenazah" required class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition">
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label for="jk_jenazah" class="block text-sm font-medium text-slate-700">Jenis Kelamin</label>
                        <select id="jk_jenazah" name="jk_jenazah" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>

                     <!-- Agama -->
                    <div>
                        <label for="agama_jenazah" class="block text-sm font-medium text-slate-700">Agama</label>
                        <select id="agama_jenazah" name="agama_jenazah" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition">
                            <option>Islam</option>
                            <option>Kristen Protestan</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Buddha</option>
                            <option>Konghucu</option>
                        </select>
                    </div>

                    <!-- Kewarganegaraan -->
                    <div>
                        <label for="kwn_jenazah" class="block text-sm font-medium text-slate-700">Kewarganegaraan</label>
                        <input type="text" id="kwn_jenazah" name="kwn_jenazah" required value="Indonesia" maxlength="50" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>

                    <!-- Pekerjaan Terakhir -->
                    <div>
                        <label for="pekerjaan_terakhir_jenazah" class="block text-sm font-medium text-slate-700">Pekerjaan Terakhir</label>
                        <input type="text" id="pekerjaan_terakhir_jenazah" name="pekerjaan_terakhir_jenazah" required maxlength="60" placeholder="Contoh: Petani/Pekebun" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>

                    <!-- Alamat Terakhir -->
                    <div class="md:col-span-2">
                        <label for="alamat_jenazah" class="block text-sm font-medium text-slate-700">Alamat Terakhir</label>
                        <textarea id="alamat_jenazah" name="alamat_jenazah" rows="3" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition" placeholder="Alamat lengkap sesuai KTP" required maxlength="255"></textarea>
                    </div>

                    <!-- Section Title: Detail Kematian -->
                    <h2 class="md:col-span-2 text-lg font-bold text-red-700 border-b border-red-200 pb-2 mt-6 flex items-center gap-2">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" /></svg>
                        Detail Kematian
                    </h2>
                    
                    <!-- Tanggal Kematian -->
                    <div>
                        <label for="tanggal_kematian" class="block text-sm font-medium text-slate-700">Tanggal Kematian</label>
                        <input type="date" id="tanggal_kematian" name="tanggal_kematian" required class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition">
                    </div>

                    <!-- Hari Kematian (auto-generated) -->
                    <div>
                        <label for="hari_kematian" class="block text-sm font-medium text-slate-700">Hari</label>
                        <input type="text" id="hari_kematian" name="hari_kematian" readonly class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-200 border border-slate-300 rounded-lg cursor-not-allowed" value="Pilih tanggal">
                    </div>

                    <!-- Tempat Kematian -->
                    <div class="md:col-span-2">
                        <label for="tempat_kematian" class="block text-sm font-medium text-slate-700">Meninggal di</label>
                        <input type="text" id="tempat_kematian" name="tempat_kematian" required maxlength="255" placeholder="Contoh: Kenagarian Pangkalan Jorong Pasar Baru" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition">
                    </div>

                    <!-- Penyebab Kematian -->
                    <div class="md:col-span-2">
                        <label for="penyebab_kematian" class="block text-sm font-medium text-slate-700">Penyebab Kematian</label>
                        <input type="text" id="penyebab_kematian" name="penyebab_kematian" required maxlength="60" placeholder="Contoh: Sakit" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>
                    
                    <!-- Section Title: Data Pelapor -->
                    <h2 class="md:col-span-2 text-lg font-bold text-red-700 border-b border-red-200 pb-2 mt-6 flex items-center gap-2">
                       <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-4.67c.12-.318.239-.636.354-.96" /></svg>
                        Data Pelapor
                    </h2>

                    <!-- Nama Pelapor -->
                    <div>
                        <label for="nama_pelapor" class="block text-sm font-medium text-slate-700">Nama Lengkap Pelapor</label>
                        <input type="text" id="nama_pelapor" name="nama_pelapor" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>
                    
                    <!-- Hubungan Pelapor -->
                    <div>
                        <label for="hubungan_pelapor" class="block text-sm font-medium text-slate-700">Hubungan dengan Almarhum/ah</label>
                        <input type="text" id="hubungan_pelapor" name="hubungan_pelapor" required maxlength="60" placeholder="Contoh: Anak, Istri, Tetangga" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-red-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>

                    <!-- Action Buttons -->
                    <div class="md:col-span-2 mt-8 pt-6 border-t border-slate-200 flex flex-col sm:flex-row-reverse gap-4">
                        <button type="submit" name="cetak" class="inline-flex w-full justify-center items-center gap-2 sm:w-auto bg-red-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all duration-200">
                             <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.061c.662 0 1.18.568 1.12 1.227l-1.089 4.802a1.125 1.125 0 01-1.12 1.227H7.23c-.662 0-1.18-.568-1.12-1.227l-1.09-4.802a1.125 1.125 0 011.12-1.227h1.06" /></svg>
                            <span>Cetak Surat</span>
                        </button>
                        <button type="button" onclick="history.back()" class="inline-flex w-full justify-center sm:w-auto bg-white text-slate-700 font-semibold py-3 px-6 rounded-lg border border-slate-300 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all duration-200 text-center">
                            Kembali
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tanggalInput = document.getElementById('tanggal_kematian');
            const hariInput = document.getElementById('hari_kematian');
            const namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

            tanggalInput.addEventListener('change', function() {
                if (this.value) {
                    // Create date object in UTC to avoid timezone issues
                    const dateParts = this.value.split('-').map(part => parseInt(part, 10));
                    const tanggal = new Date(Date.UTC(dateParts[0], dateParts[1] - 1, dateParts[2]));
                    const hari = namaHari[tanggal.getUTCDay()];
                    hariInput.value = hari;
                } else {
                    hariInput.value = 'Pilih tanggal';
                }
            });
        });
    </script>
</body>
</html>
