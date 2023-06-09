<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","upraknai");
if (!$conn) {
	echo "Unable connect to database : ". mysqli_connect_error();
}
?>

<?php
function registrasi ($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"])); // merubah string menjadi huruf kecil
	$password = mysqli_real_escape_string($conn,$data["password"]); // memungkinan user menggunakan " pada password
	$password2 = mysqli_real_escape_string($conn,$data["password2"]);

	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'"); 
	if (mysqli_fetch_assoc($result)) {
		echo "<script> 
				alert ('username sudah terdaftar')
		</script>";
		return false;
	}

	// !== tidak identik
	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
			alert ('konfirmasi password tidak sesuai')
			</script>";

			return false;
	} 

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT); //with hash
	

	//tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO users VALUES ('','$username','$password')");

	return mysqli_affected_rows($conn);
}
?>