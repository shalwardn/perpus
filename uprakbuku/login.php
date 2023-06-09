<?php

session_start();

    if(isset($_SESSION["login"])) {
        header('location:index.php');
    }


require 'functions.php';
if (isset($_POST["login"])) { 

	$username= $_POST["username"]; 
	$password= $_POST["password"];

	$result = mysqli_query ($conn,"SELECT * FROM users WHERE username='$username'");
	if (mysqli_num_rows($result) === 1) {

		$row = mysqli_fetch_assoc($result); //support PHP versi 5.5.0 keatas
		if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
			header('location:index.php');
			exit;
		}
	}
	$error=true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <h1>Login</h1>
    <?php if(isset($error)) :?>
    <p style="color: black; font-style: bold;">username / password salah</p>
    <?php endif;
    ?>
    <form action="" method="post">
        
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        
            <label for="password2">Password confirmation :</label>
            <input type="password" name="password2" id="password2">
        
        <button type="submit" name="login">Login</button>
    </form>
    <h4>Belum punya akun?</h4>
    <a href="registrasi.php">Registrasi disini</a>
</body>
</html>