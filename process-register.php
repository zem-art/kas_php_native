<?php
session_start();

include "koneksi.php";

// get user data from register form
$user = [
	'nama' => $_POST['nama'],
	'username' => $_POST['username'],
	'password' => $_POST['password'],
	'password_confirmation' => $_POST['password_confirmation'],
	'level' => '2'
];

// validate if password & password_confirmation are the same
if($user['password'] != $user['password_confirmation']){
	$_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['username'] = $_POST['username'];
<<<<<<< HEAD
	header("Location: /register.php");
=======
	header("Location: register.php");
	return;
}

// validation if one does not exist
if(!$user['username'] && !$user['nama'] && !$user['password'] && !$user['password_confirmation']){
	$_SESSION['error'] = 'Maaf Form Tidak Boleh Kosong!!';
	header("Location: register.php");
	return;
} else if (!$user['username']){
	$_SESSION['null'] = 'Username Tidak Boleh Kosong!!';
	header("Location: register.php");
	return;
} else if (!$user['nama']){
	$_SESSION['null'] = 'Nama Tidak Boleh Kosong!!';
	header("Location: register.php");
	return;
} else if (!$user['password']){
	$_SESSION['null'] = 'password Tidak Boleh Kosong!!';
	header("Location: register.php");
	return;
} else if (!$user['password_confirmation']){
	$_SESSION['null'] = 'password_confirmation Tidak Boleh Kosong!!';
	header("Location: register.php");
	return;
>>>>>>> e064e335c0296dbb72b090e8f96e11d2b082f246
}

//check apakah user dengan username tersebut ada di table users
$query = "SELECT * FROM tb_user WHERE username = '" . $user['username'] . "' limit 1";
$hasil = mysqli_query($koneksi, "$query");

$data = mysqli_fetch_array($hasil);
$cek = mysqli_num_rows($hasil);

// if the username already exists, then return back to the register page.
if($cek == 1){
	$_SESSION['error'] = 'Username: '. $user['username'].' yang anda masukkan sudah ada di database.';
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['password_confirmation'] = $_POST['password_confirmation'];
	header("Location: register.php");
	return;
<<<<<<< HEAD

} else if ($user['password'] !== $user['password_confirmation']){


=======
>>>>>>> e064e335c0296dbb72b090e8f96e11d2b082f246
} else{
	//hash password
	// $password = password_hash($user['password'],PASSWORD_DEFAULT);
	$password = $user['password'];
	
	// unique usernames. save in database.
	$username = $user['username'];
	$nama = $user['nama'];
	$level = $user['level'];

	$query = "INSERT INTO tb_user (`nama`, `username`, `password`, `level`) VALUES ('$nama','$username', '$password', $level)";

	$hasil = mysqli_query($koneksi, "$query");

	$_SESSION['message']  = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
	header("Location: register.php");
}

?>
