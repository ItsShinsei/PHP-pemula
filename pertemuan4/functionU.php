<?php
function greet($time = "back" , $name = "Shinsei") {
    return "goo to see you $time, $name!";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    <h1><?= greet(); ?></h1>
</body>
</html>