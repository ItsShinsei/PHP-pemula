<?php

if(isset($_POST["submit"]) ){

    if( $_POST["Username"] == "admin" && $_POST["Password"] == "123"  ) {

        header("Location: admin.php");
        exit;
    } else {
        $error = true;

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h1>Login Admin</h1>

<?php if(isset($error)) : ?>
    <p style="color:red">username / pasword salah</p>
<?php endif ; ?>



<ul>
<form action="" method="post">
    <li>
        <label for="Username"> Username :</label>
        <input type="text" name="Username"  id="Username" >
    </li>
    <li>
        <label for="Password">Password :</label>
        <input type="password" name="Password" id="Password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>

</form>
</ul>


</body>
</html>