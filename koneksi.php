<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "kelasb";

//membuat koneksi ke database
$conn = new mysqli($servername, $username, $password);

// seleksi cek koneksi 
if ($conn->connect_error) {
	die ("conection failed: " . $conn->connect_error);
}
echo "connected succesfully";
?>