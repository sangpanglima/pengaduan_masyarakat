<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Surat Keterangan Pindah Domisili</title>
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
            --tw-ring-color: rgba(99, 102, 241, 0.4); /* indigo-500 with opacity */
            box-shadow: 0 0 0 3px var(--tw-ring-color);
            border-color: #6366f1; /* indigo-500 */
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4 sm:p-6 lg:p-8">

    <!-- Main Form Container -->
    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-200 my-8">

        <!-- Form Header -->
        <div class="bg-slate-50 p-6 sm:p-8 border-b border-slate-200">
            <div class="flex items-center gap-4">
                <div class="flex-shrink-0 bg-indigo-100 p-3 rounded-xl">
                    <svg class="h-8 w-8 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m-3-1l-1.5-.545m0 0l-2.25 4.5 2.25 4.5m6.75-4.5l-2.25 4.5" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-800">Formulir Keterangan Pindah</h1>
                    <p class="text-slate-500 mt-1">Isi data kepindahan Anda dengan lengkap dan benar.</p>
                </div>
            </div>
        </div>

        <!-- Form Body -->
        <div class="p-6 sm:p-8">
            <form method="POST" action="cetak_surat_pindah.php" target="_blank">
                <div class="space-y-10">

                    <!-- Data Pemohon Section -->
                    <div class="space-y-5">
                        <h2 class="text-lg font-bold text-indigo-700 border-b border-indigo-200 pb-2 flex items-center gap-2">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
                            Data Pemohon
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5">
                            <div>
                                <label for="nama_pemohon" class="block text-sm font-medium text-slate-700">Nama Lengkap Kepala Keluarga</label>
                                <input type="text" id="nama_pemohon" name="nama_pemohon" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-indigo-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="nik_pemohon" class="block text-sm font-medium text-slate-700">NIK Kepala Keluarga</label>
                                <input type="text" id="nik_pemohon" name="nik_pemohon" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-indigo-500 transition">
                            </div>
                            <div>
                                <label for="no_kk" class="block text-sm font-medium text-slate-700">Nomor Kartu Keluarga (KK)</label>
                                <input type="text" id="no_kk" name="no_kk" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-indigo-500 transition">
                            </div>
                            <div class="md:col-span-2">
                                <label for="alamat_asal" class="block text-sm font-medium text-slate-700">Alamat Asal</label>
                                <textarea id="alamat_asal" name="alamat_asal" rows="2" required placeholder="Alamat lengkap sebelum pindah" maxlength="255" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-indigo-500 transition"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Data Kepindahan Section -->
                    <div class="space-y-5">
                        <h2 class="text-lg font-bold text-indigo-700 border-b border-indigo-200 pb-2 flex items-center gap-2">
                             <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 116 0h3a.75.75 0 00.75-.75V15z" /><path d="M16.5 4.5c0-1.036.84-1.875 1.875-1.875h1.5C20.91 2.625 22.5 4.215 22.5 6v12c0 1.035-.84 1.875-1.875 1.875h-1.5a1.875 1.875 0 01-1.875-1.875V4.5z" /></svg>
                            Data Kepindahan
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5">
                            <div class="md:col-span-2">
                                <label for="alamat_tujuan" class="block text-sm font-medium text-slate-700">Alamat Tujuan</label>
                                <textarea id="alamat_tujuan" name="alamat_tujuan" rows="2" required placeholder="Alamat lengkap setelah pindah" maxlength="255" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-indigo-500 transition"></textarea>
                            </div>
                            <div>
                                <label for="alasan_pindah" class="block text-sm font-medium text-slate-700">Alasan Pindah</label>
                                <input type="text" id="alasan_pindah" name="alasan_pindah" placeholder="Contoh: Pekerjaan, Keluarga" required maxlength="60" class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:outline-none focus:border-indigo-500 transition" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="jumlah_pengikut" class="block text-sm font-medium text-slate-700">Jumlah Anggota Keluarga (Pengikut)</label>
                                <input type="number" id="jumlah_pengikut" name="jumlah_pengikut" required value="0" min="0" readonly class="form-input mt-1 block w-full px-4 py-2.5 bg-slate-200 border-slate-300 rounded-lg focus:outline-none transition cursor-not-allowed">
                            </div>
                        </div>
                    </div>

                    <!-- Data Keluarga Section -->
                    <div class="space-y-5">
                        <h2 class="text-lg font-bold text-indigo-700 border-b border-indigo-200 pb-2 flex items-center gap-2">
                           <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 015.69 3.117.75.75 0 01-.812 1.026A4.988 4.988 0 0012 15a4.988 4.988 0 00-4.878 1.143.75.75 0 01-.812-1.026zM18.75 16.143a4.988 4.988 0 00-4.878-1.143.75.75 0 01-.812 1.026c.421.349.801.764 1.105 1.218.304.454.522.956.634 1.48.113.524.125 1.053.038 1.565a.75.75 0 01-1.282.51A6.469 6.469 0 0012 21a6.469 6.469 0 00-1.28 1.673.75.75 0 01-1.282-.51c-.087-.512-.075-1.041.038-1.565.112-.524.33-.966.634-1.48.304-.454.684-.869 1.105-1.218a.75.75 0 01-.812-1.026A4.988 4.988 0 005.25 16.143a.75.75 0 01-1.026-.812A6.732 6.732 0 014.5 12c0-1.846.734-3.52 1.93-4.72a.75.75 0 011.026.812 4.988 4.988 0 001.143 4.878.75.75 0 01-1.026.812A6.732 6.732 0 013 10.5c0 1.846.734 3.52 1.93-4.72a.75.75 0 01-1.026.812zM19.07 10.28a.75.75 0 011.026-.812 6.732 6.732 0 010 9.44.75.75 0 01-1.026-.812 4.988 4.988 0 000-7.816z" clip-rule="evenodd" /></svg>
                            Data Keluarga yang Pindah (Pengikut)
                        </h2>
                        <div id="family_members_container" class="space-y-4">
                            <!-- Dynamic rows will be inserted here -->
                        </div>
                        <button type="button" id="add_member_button" class="inline-flex items-center gap-2 text-sm font-semibold text-indigo-600 hover:text-indigo-800 transition">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" /></svg>
                            Tambah Anggota Keluarga
                        </button>
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="mt-8 pt-6 border-t border-slate-200 flex flex-col sm:flex-row-reverse gap-4">
                    <button type="submit" name="cetak" class="inline-flex w-full justify-center items-center gap-2 sm:w-auto bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7.5 7.5c0-1.036.84-1.875 1.875-1.875h3.375c1.036 0 1.875.84 1.875 1.875v3.375c0 1.036-.84 1.875-1.875 1.875h-3.375A1.875 1.875 0 017.5 10.875V7.5z" /><path d="M11.25 12.75H15v1.5h-3.75V18h-1.5v-3.75H6v-1.5h3.75v-3.75h1.5v3.75z" /></svg>
                        <span>Cetak Surat</span>
                    </button>
                    <button type="button" onclick="history.back()" class="inline-flex w-full justify-center sm:w-auto bg-white text-slate-700 font-semibold py-3 px-6 rounded-lg border border-slate-300 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 text-center">
                        Kembali
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // JS for dynamic family member template
        const addMemberButton = document.getElementById('add_member_button');
        const familyContainer = document.getElementById('family_members_container');
        const memberCountInput = document.getElementById('jumlah_pengikut');
        let memberId = 0;

        function updateMemberCount() {
            const memberRows = familyContainer.getElementsByClassName('member-row');
            memberCountInput.value = memberRows.length;
        }

        function addMemberRow() {
            memberId++;
            const memberRow = document.createElement('div');
            memberRow.className = 'member-row grid grid-cols-1 md:grid-cols-8 gap-x-4 gap-y-2 items-center p-3 bg-slate-50 rounded-lg border';
            memberRow.innerHTML = `
                <div class="md:col-span-3">
                    <label for="nik_pengikut_${memberId}" class="sr-only">NIK Pengikut</label>
                    <input type="text" id="nik_pengikut_${memberId}" name="pengikut_nik[]" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-input w-full text-sm px-3 py-2 bg-white border-slate-300 rounded-md focus:outline-none focus:border-indigo-500" placeholder="NIK Pengikut">
                </div>
                <div class="md:col-span-3">
                    <label for="nama_pengikut_${memberId}" class="sr-only">Nama Pengikut</label>
                    <input type="text" id="nama_pengikut_${memberId}" name="pengikut_nama[]" required maxlength="60" class="form-input w-full text-sm px-3 py-2 bg-white border-slate-300 rounded-md focus:outline-none focus:border-indigo-500" placeholder="Nama Lengkap" oninput="this.value = this.value.replace(/[^a-zA-Z\\s]/g, '')">
                </div>
                <div class="md:col-span-1">
                    <label for="hubungan_pengikut_${memberId}" class="sr-only">Hubungan</label>
                    <input type="text" id="hubungan_pengikut_${memberId}" name="pengikut_hubungan[]" required maxlength="60" class="form-input w-full text-sm px-3 py-2 bg-white border-slate-300 rounded-md focus:outline-none focus:border-indigo-500" placeholder="Hubungan" oninput="this.value = this.value.replace(/[^a-zA-Z\\s]/g, '')">
                </div>
                <div class="md:col-span-1 flex justify-end">
                    <button type="button" class="remove-member-button text-red-500 hover:text-red-700">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM6.75 9.25a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
            `;
            
            familyContainer.appendChild(memberRow);

            memberRow.querySelector('.remove-member-button').addEventListener('click', () => {
                memberRow.remove();
                updateMemberCount();
            });

            updateMemberCount();
        }

        addMemberButton.addEventListener('click', addMemberRow);

    </script>
</body>
</html>
