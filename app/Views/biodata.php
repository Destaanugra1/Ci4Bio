<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('style'); ?>/dekstop.css">
  <title>Document</title>
</head>

<body>
  <!-- Navigation -->
  <?= view('components/navbar'); ?>

  <!-- Content -->
  <section class="content" id="content">
    <div class="">
      <h1>Hai 👋 </h1>
      <p>Saya Desta Sebagai Mahasiswa Muhammadiyah KotaBumi</p>
      <p>Dengan Npm: <span class="npm">2359201020</span></p>
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