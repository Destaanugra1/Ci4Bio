<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('style'); ?>/dekstop.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body>
  <!-- Navigation -->
  <?= view('components/navbar'); ?>

  <!-- Content -->
  <section class="content" id="content">
    <div class="bio font-bold">
      <h2>Nama Saya Desta Anugra Pratama</h2>
      <h3>Dengan Npm: <span class="npm text-blue-600">2359201020</span></h3>
      <h3>Jurusan: <span class="">Teknik Informatika</span></h3>
      <h3>Alamat Semuli raya</h3>
    </div>
    <img class="images" src="img/myfoto.png" alt="fotoo" width="400" height="400">
  </section>

  <div class="h-[150vh]">
    <!-- card -->
    <?= view('components/card'); ?>
    <!-- Faq -->
    <div class="flex justify-center items-center mt-10 rounded">
      <?= view('components/faq'); ?>
    </div>
  </div>
  <?= view('components/footer'); ?>
</body>

</html>