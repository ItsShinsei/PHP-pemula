<?php
//pengulangan pada array
//for dan foreach

$angka = [3,34,4,2,5,6,7,8]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
    <style>
        .kotak {
            background-color: lightblue;
            width: 100px;
            height: 100px;
            margin: 10px;
            float: left;
            text-align: center;
            line-height: 100px;
            font-size: 20px;
            margin: 3px;
            float: left;
        }

        .clear{
            clear: both;
        }
    </style>
<body>
   
<?php for ( $i = 0; $i < count($angka); $i++ ) {?>
    <div class = "kotak"> <?= $angka[$i] ; ?> </div>
<?php } ?>

<div class="clear"></div>

<?php foreach ( $angka as $a ) { ?>
    <div class="kotak"><?= $a; ?> </div>
<?php } ?>

<div class="clear"></div>

<?php foreach ( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?> </div>
<?php endforeach; ?>

</body>
</html>