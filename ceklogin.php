<?php
session_start();
if(isset($_SESSION['username'])) {
    header("Location: home.php");
    die();
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from tb_user where username='$username' and password='$password'";
$hasil=mysqli_query($koneksi, "$query");

$kode = mysqli_fetch_array($hasil);
$cek=mysqli_num_rows($hasil);
// print_r($kode);
// exit;
if ($cek==1){
	$_SESSION['username']=$kode['username'];
	$_SESSION['password']=$kode['password'];
	$_SESSION['level']=$kode['level'];
	// get data
	if ($kode) {
		header("Location: home.php");
	}
// empty value validation
} else if (!$username && !$password){
	$_SESSION['error'] = 'Username atau Password tidak Boleh Kosong !!!';
	header("Location: login.php");
} else if (!$username) {
	$_SESSION['null'] = 'Username tidak Boleh Kosong !!!';
	header("Location: login.php");
} else if (!$password) {
	$_SESSION['null'] = 'Password tidak Boleh Kosong !!!';
	header("Location: login.php");
}  else {
	$_SESSION['error'] = 'Username atau Password Salah !!!';
	header("Location: login.php");
}

?>

