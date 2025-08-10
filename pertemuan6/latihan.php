<?php

//array
// $mahasiswa = [
//     ["Shinsei" , "000012212" , "teknik informatika" , "Shinsei@gmail.com"],
//     ["Shiro" , "000012213" , "teknik Jaringan" , "Shiro@gmail.com"],
//     ["kuro" , "000012214" , "teknik Komputer" , "kuro@gmail.com"]

// ];

//array associative
//key-nya adalah string yang kita buat sendiri

$mahasiswa = [ 
    [
        "nama" => "2B", 
        "NRP" => "000012212", 
        "jurusan" => "teknik diam", 
        "email" => "2B@gmail.com",
        "gambar" => "2b.png"
    ],

    [
        "nama" => "Nier", 
        "NRP" => "000012213", 
        "jurusan" => "teknik keren", 
        "email" => "Nier@gmail.com",
        "gambar" => "nier.png"
    ],  

    [
        "nama" => "Kaine", 
        "NRP" => "000012214", 
        "jurusan" => "teknik garang", 
        "email" => "Kaine@gmail.com",
        "gambar" => "kaine.png"
    ],
    [
        "nama" => "9S", 
        "NRP" => "000012215", 
        "jurusan" => "teknik lucu", 
        "email" => "9S@gmail.com",
        "gambar" => "9s.png"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        h1 {
            color: #222;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 300;
            letter-spacing: 1px;
        }
        
        .student-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        
        .student-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
            width: 250px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .student-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }
        
        .student-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 15px;
            border: 1px solid #c7b29f;
        }
        
        .student-info {
            margin: 0;
            padding: 0;
        }
        
        .student-info li {
            list-style: none;
            padding: 5px 0;
            border-bottom: 2px solid #c7b29f;
            display: flex;
        }
        
        .student-info li:last-child {
            border-bottom: none;
        }
        
        .info-label {
            font-weight: 600;
            color: #555;
            min-width: 80px;
            display: inline-block;
        }
        
        .info-value {
            color: #222;
        }
    </style>    
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <div class="student-container">
        <?php foreach ($mahasiswa as $mhs): ?>
            <div class="student-card">
                <img src="img/<?= $mhs["gambar"]; ?>" alt="<?= $mhs["nama"]; ?>" class="student-image">
                <ul class="student-info">
                    <li><span class="info-label">Nama</span>: <span class="info-value"><?= $mhs["nama"]; ?></span></li>
                    <li><span class="info-label">NRP</span>: <span class="info-value"><?= $mhs["NRP"]; ?></span></li>
                    <li><span class="info-label">Jurusan</span>: <span class="info-value"><?= $mhs["jurusan"]; ?></span></li>  
                    <li><span class="info-label">Email</span>: <span class="info-value"><?= $mhs["email"]; ?></span></li>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>