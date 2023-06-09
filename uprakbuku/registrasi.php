<?php
require 'functions.php';
if (isset($_POST["register"])) {

	if (registrasi ($_POST) > 0 ) { 
		echo "<script>
		alert ('new user!');
		</script>";
	} else {
		echo mysqli_error($conn);
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <h1>Registration</h1>
    <form action="" method="post">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        
            <label for="password2">Password confirmation :</label>
            <input type="password" name="password2" id="password2">
        
        <button type="submit" name="register">Register!</button>
    </form>
    <h4>Anda sudah punya akun?</h4>
    <button><a href="login.php">login disini</a></button>
</body>
</html>