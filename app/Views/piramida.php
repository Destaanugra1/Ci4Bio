<!DOCTYPE html>
<html>
<head>
    <title>Piramida Angka</title>
</head>
<body>
    <h1>Piramida Angka - Baris <?= $awal ?> sampai <?= $akhir ?></h1>
    <pre>
<?php foreach ($piramid as $baris): ?>
<?= $baris . "\n" ?>
<?php endforeach; ?>
    </pre>
</body>
</html>
  