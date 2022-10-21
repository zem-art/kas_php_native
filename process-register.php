<?php
session_start();

include "koneksi.php";

//dapatkan data user dari form register
$user = [
	'nama' => $_POST['nama'],
	'username' => $_POST['username'],
	'password' => $_POST['password'],
	'password_confirmation' => $_POST['password_confirmation'],
	'level' => '2'
];

//validasi jika password & password_confirmation sama

if($user['password'] != $user['password_confirmation']){
	$_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['username'] = $_POST['username'];
	header("Location: /register.php");
}

//check apakah user dengan username tersebut ada di table users
$query = "SELECT * FROM tb_user WHERE username = '" . $user['username'] . "' limit 1";
$hasil = mysqli_query($koneksi, "$query");

$data = mysqli_fetch_array($hasil);
$cek = mysqli_num_rows($hasil);

//jika username sudah ada, maka return kembali ke halaman register.
if($cek == 1){
	$_SESSION['error'] = 'Username: '. $user['username'].' yang anda masukkan sudah ada di database.';
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['password_confirmation'] = $_POST['password_confirmation'];
	header("Location: /register.php");
	return;

} else if ($user['password'] !== $user['password_confirmation']){


} else{
	//hash password
	$password = password_hash($user['password'],PASSWORD_DEFAULT);
	//username unik. simpan di database.
	$username = $user['username'];
	$nama = $user['nama'];
	$level = $user['level'];

	$query = "INSERT INTO tb_user (`nama`, `username`, `password`, `level`) VALUES ('$nama','$username', '$password', $level)";

	$hasil = mysqli_query($koneksi, "$query");

	$_SESSION['message']  = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
	header("Location: /register.php");
}

?>
