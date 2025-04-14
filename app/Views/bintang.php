<!DOCTYPE html>
<html>
<head>
    <title>Piramid Angka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .line {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Piramid Angka</h2>
    <div>
        <?php foreach ($angka as $baris): ?>
            <div class="line">
                <?php foreach ($baris as $num): ?>
                    <?= $num ?> 
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
