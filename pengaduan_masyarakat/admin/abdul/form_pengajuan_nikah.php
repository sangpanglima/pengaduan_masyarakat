<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengantar Nikah - Metro Style</title>
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
            background-color: #0c4a6e; /* A deep sky blue */
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
            border-color: #1d4ed8; /* blue-700 */
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
            background-color: #1d4ed8; /* blue-700 */
            color: white;
        }
        .metro-button.primary:hover {
            background-color: #1e3a8a; /* blue-800 */
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
            <h1 class="text-lg font-semibold">Formulir Pengantar Nikah (Model N1)</h1>
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
                <h2 class="text-3xl font-light text-gray-800">Pengantar Perkawinan</h2>
                <p class="text-gray-500">Lengkapi data untuk calon mempelai sesuai dokumen yang sah.</p>
            </div>

            <form method="POST" action="cetak_surat_nikah.php" target="_blank">
                <div class="space-y-8">

                    <!-- Data Calon Suami Section -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-blue-700 border-b-2 border-blue-200 pb-2">Data Calon Suami</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama_suami" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" id="nama_suami" name="nama_suami" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="bin_suami" class="block text-sm font-semibold text-gray-700 mb-1">Bin (Nama Ayah)</label>
                                <input type="text" id="bin_suami" name="bin_suami" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="nik_suami" class="block text-sm font-semibold text-gray-700 mb-1">NIK</label>
                                <input type="text" id="nik_suami" name="nik_suami" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="metro-input">
                            </div>
                            <div>
                                <label for="tempat_lahir_suami" class="block text-sm font-semibold text-gray-700 mb-1">Tempat Lahir</label>
                                <input type="text" id="tempat_lahir_suami" name="tempat_lahir_suami" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="tanggal_lahir_suami" class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Lahir</label>
                                <input type="date" id="tanggal_lahir_suami" name="tanggal_lahir_suami" required class="metro-input">
                            </div>
                            <div>
                                <label for="agama_suami" class="block text-sm font-semibold text-gray-700 mb-1">Agama</label>
                                <select id="agama_suami" name="agama_suami" required class="metro-select">
                                    <option>Islam</option>
                                    <option>Kristen Protestan</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div>
                                <label for="pekerjaan_suami" class="block text-sm font-semibold text-gray-700 mb-1">Pekerjaan</label>
                                <input type="text" id="pekerjaan_suami" name="pekerjaan_suami" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="status_suami" class="block text-sm font-semibold text-gray-700 mb-1">Status Perkawinan</label>
                                <select id="status_suami" name="status_suami" required class="metro-select">
                                    <option>Jejaka</option>
                                    <option>Duda</option>
                                    <option>Beristri</option>
                                </select>
                            </div>
                             <div class="md:col-span-2">
                                <label for="alamat_suami" class="block text-sm font-semibold text-gray-700 mb-1">Alamat Lengkap</label>
                                <textarea id="alamat_suami" name="alamat_suami" rows="2" required class="metro-input" maxlength="255"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Data Calon Istri Section -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-blue-700 border-b-2 border-blue-200 pb-2">Data Calon Istri</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama_istri" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" id="nama_istri" name="nama_istri" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="binti_istri" class="block text-sm font-semibold text-gray-700 mb-1">Binti (Nama Ayah)</label>
                                <input type="text" id="binti_istri" name="binti_istri" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="nik_istri" class="block text-sm font-semibold text-gray-700 mb-1">NIK</label>
                                <input type="text" id="nik_istri" name="nik_istri" required maxlength="16" pattern=".{16,16}" title="Harus diisi dengan 16 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="metro-input">
                            </div>
                            <div>
                                <label for="tempat_lahir_istri" class="block text-sm font-semibold text-gray-700 mb-1">Tempat Lahir</label>
                                <input type="text" id="tempat_lahir_istri" name="tempat_lahir_istri" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="tanggal_lahir_istri" class="block text-sm font-medium text-slate-700">Tanggal Lahir</label>
                                <input type="date" id="tanggal_lahir_istri" name="tanggal_lahir_istri" required class="metro-input">
                            </div>
                            <div>
                                <label for="agama_istri" class="block text-sm font-semibold text-gray-700 mb-1">Agama</label>
                                <select id="agama_istri" name="agama_istri" required class="metro-select">
                                    <option>Islam</option>
                                    <option>Kristen Protestan</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div>
                                <label for="pekerjaan_istri" class="block text-sm font-semibold text-gray-700 mb-1">Pekerjaan</label>
                                <input type="text" id="pekerjaan_istri" name="pekerjaan_istri" required class="metro-input" maxlength="60" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div>
                                <label for="status_istri" class="block text-sm font-semibold text-gray-700 mb-1">Status Perkawinan</label>
                                <select id="status_istri" name="status_istri" required class="metro-select">
                                    <option>Perawan</option>
                                    <option>Janda</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label for="alamat_istri" class="block text-sm font-semibold text-gray-700 mb-1">Alamat Lengkap</label>
                                <textarea id="alamat_istri" name="alamat_istri" rows="2" required class="metro-input" maxlength="255"></textarea>
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
