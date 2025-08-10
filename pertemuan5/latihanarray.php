<?php

$mahasiswa = [ 
    ["Shinsei kuro" , "000012212" , "teknik informatika" , "Shinsei@gmail.com"],
    ["Shinsei shiro" , "000012213" , "teknik informatika" , "shiro@gmail.com"],
    ["Shinsei akai" , "000012214" , "teknik informatika" , "akai@gmai.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasisawa</title>
</head>
<body>
    
    <h1>daftar mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs) :?>   
<ul>
    <li> Nama : <?= $mhs[0]; ?>  </li>
    <li>NRP : <?= $mhs[1]; ?>  </li>
    <li>Jurusan : <?= $mhs[2]; ?>  </li>
    <li>Email : <?= $mhs[3]; ?>  </li>
</ul>
<?php endforeach; ?>


</body>
</html>