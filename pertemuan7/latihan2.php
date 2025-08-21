<?php
//untuk cek apakah $_Get ada

if (    !isset ($_GET["name"]) ||
        !isset ($_GET["image"]) ||
        !isset ($_GET["game"]) ||
        !isset ($_GET["weight"]) ||
        !isset ($_GET["height"])) {
    //redirect
    header ("Location: latihan1.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview Karakter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Overview Karakter</h1>
    
    <div class="student-container">
        <div class="student-card">
            <img src="img/<?= $_GET['image']; ?>" alt="Character" class="student-image">

            <ul class="student-info">
                <li><span class="info-label">Name:</span> <span class="info-value"><?= $_GET['name']; ?></span></li>
                <li><span class="info-label">Game:</span> <span class="info-value"><?= $_GET['game']; ?></span></li>
                <li><span class="info-label">Height:</span> <span class="info-value"><?= $_GET['height']; ?></span></li>
                <li><span class="info-label">Weight:</span> <span class="info-value"><?= $_GET['weight']; ?></span></li>
            </ul>
        </div>
    </div>

    <p class="btn-link">
        <a href="latihan1.php">Kembali ke halaman utama</a>
    </p>
</body>
</html>
