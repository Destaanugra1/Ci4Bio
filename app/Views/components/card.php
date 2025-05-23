<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Cards</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-[#1e293b] to-[#4ca1af]" id="card">
  <div class="container mx-auto px-4 py-8 ">
    <div class="">
      <h1 class="text-3xl font-bold text-center text-white mt-10">My Projects</h1>
      <p class="text-center text-gray-300 mt-2">Explore my latest work and projects.</p>
    </div>
    <br>
    <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
      <!-- Card 1 -->
      <div data-aos="zoom-in" data-aos-duration="200"
        class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="img/projek1.png" alt="Card Image" class="w-full h-48 object-cover">
        <div class="p-4">
          <h2 class="text-xl font-semibold">Card Title 1</h2>
          <p class="text-gray-600 mt-2">Deskripsi singkat tentang card ini.</p>
          <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Visit Side</button>
        </div>
      </div>

      <!-- Card 2 -->
      <div data-aos="zoom-in" data-aos-duration="400" class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="img/projek2.png" alt="Card Image" class="w-full h-48 object-cover">
        <div class="p-4">
          <h2 class="text-xl font-semibold">Card Title 2</h2>
          <p class="text-gray-600 mt-2">Deskripsi singkat tentang card ini.</p>
          <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Visit Side</button>
        </div>
      </div>

      <!-- Card 3 -->
      <div data-aos="zoom-in" data-aos-duration="600" class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="img/projek3.png" alt="Card Image" class="w-full h-48 object-cover">
        <div class="p-4">
          <h2 class="text-xl font-semibold">Card Title 3</h2>
          <p class="text-gray-600 mt-2">Deskripsi singkat tentang card ini.</p>
          <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Visit Site</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>