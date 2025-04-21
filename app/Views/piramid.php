<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Piramid</h1>
  <pre>
    <?php foreach ($piramid as $baris): ?>
      <?= $baris . "\n" ?>
      <?php endforeach; ?>
  </pre>
</body>
</html>