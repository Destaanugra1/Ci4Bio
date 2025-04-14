<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata Card - Desta Anugra Pratama</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 font-sans flex items-center justify-center min-h-screen p-4">
  <div class="max-w-md w-full mx-auto">

    <div class="bg-white rounded-xl shadow-xl overflow-hidden">

      <div class="bg-blue-600 p-4 text-center">
        <h1 class="text-white text-2xl font-bold">BIODATA MAHASISWA</h1>
      </div>


      <div class="relative">
        <div class="h-32 bg-blue-500"></div>
        <div class="absolute left-0 right-0 mx-auto -bottom-16 w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
          <img src="<?= base_url($foto) ?>" alt="Foto Desta Anugra Pratama" class="w-full h-full object-cover">
        </div>
      </div>

      <div class="pt-20 pb-6 px-6">
        <div class="text-center mb-4">
          <h2 class="text-xl font-bold text-gray-800"><?= $nama ?></h2>
          <p class="text-sm text-gray-500">Mahasiswa Sistem Teknologi Informasi</p>
        </div>

        <div class="border-t border-b border-gray-200 py-4 my-4">
          <div class="flex py-2">
            <div class="w-1/3 text-gray-600 font-semibold">NPM</div>
            <div class="w-2/3 text-gray-800"><?= $npm ?></div>
          </div>
          <!-- <div class="flex py-2">
            <div class="w-1/3 text-gray-600 font-semibold">Pacar</div>
            <div class="w-2/3 text-gray-800">Ratuuuuuu</div>
          </div> -->
          <div class="flex py-2">
            <div class="w-1/3 text-gray-600 font-semibold">Kelas</div>
            <div class="w-2/3 text-gray-800">4B</div>
          </div>
          <div class="flex py-2">
            <div class="w-1/3 text-gray-600 font-semibold">Alamat</div>
            <div class="w-2/3 text-gray-800">Semuli Raya</div>
          </div>
          <div class="flex py-2">
            <div class="w-1/3 text-gray-600 font-semibold">Fakultas</div>
            <div class="w-2/3 text-gray-800">FTIK</div>
          </div>
          <div class="flex py-2">
            <div class="w-1/3 text-gray-600 font-semibold">Angkatan</div>
            <div class="w-2/3 text-gray-800">2023</div>
          </div>
        </div>

        <div class="text-center">
          <div class="inline-block bg-blue-100 rounded-full px-4 py-1 text-sm font-semibold text-blue-600">
            Mahasiswa Aktif
          </div>
        </div>
      </div>


      <div class="bg-gray-50 px-6 py-4">
        <div class="flex items-center justify-between">
          <div class="text-xs text-gray-500">
            <p>Terdaftar sejak: 2023</p>
          </div>
          <div>
            <div class="h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4 text-center text-gray-500 text-xs">
      &copy; 2025 - Biodata Mahasiswa
    </div>
  </div>
</body>

</html>