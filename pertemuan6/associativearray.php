<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: green;
            color: white;
            text-align: center;
            line-height: 50px;
            margin: 9px;
            float: left;
            transition: 0.9s;
        }

        .kotak:hover {
            transform: rotate(720deg);
            border-radius: 50%;
            background-color: lightgreen;
            color: black;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php 
$angka = [
    [1,2,3,4,5,6],
    [7,8,9,10,11,12],
    [13,14,15,16,17,18]
];
?>

<?php foreach( $angka as $a ) : ?>
    <?php foreach ( $a as $b ) : ?>
    <div class="kotak"><?= $b ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>
   

</body>
</html>