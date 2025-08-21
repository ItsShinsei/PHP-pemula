<?php


$MC = [
    [
        "name" => "2B",
        "game" => "NieR: Automata",
        "height" => "168 cm",
        "weight" => "148 kg",
        "image" => "2b.png"
    ],
    [
        "name" => "9S",
        "game" => "NieR: Automata",
        "height" => "160 cm",   
        "weight" => "129 kg",
        "image" => "9s.png"
    ],
    [
        "name" => "A2",
        "game" => "NieR: Automata",
        "height" => "168 cm",
        "weight" => "139 kg",
        "image" => "a2.png"
    ],
    [
        "name" => "Nier",
        "game" => "NieR Replicant",
        "height" => "183 cm",
        "weight" => "65 kg",
        "image" => "nier.png"
    ],

    [
        "name" => "Kaine",
        "game" => "NieR Replicant",
        "height" => "172 cm",
        "weight" => "54 kg",
        "image" => "kaine.png"
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NieR Characters</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Karakter Utama</h1>  
    
    <div class="student-container">
        <?php foreach($MC as $mc) : ?>
            <div class="student-card">
                <img src="img/<?= $mc["image"] ?>" alt="<?= $mc["name"] ?>" class="student-image">

                <ul class="student-info">
                    <li class="btn-link">
                        <a href="latihan2.php?name=<?= $mc['name']; ?>&game=<?= $mc['game']; ?>&height=<?= $mc['height']; ?>&weight=<?= $mc['weight']; ?>&image=<?= $mc['image']; ?>">
                            <?= $mc["name"]; ?>
                        </a>
                    </li>
                    
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
