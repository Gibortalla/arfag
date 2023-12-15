<?php 

$host	=	"localhost";
$user	=	"root";
$pass	=	"";
$namadb	=	"asli";

$db = mysqli_connect($host, $user, $pass, $namadb);

if (!$db) {
	die("Koneksi gagal".mysqli_connect_error());
}

 ?>