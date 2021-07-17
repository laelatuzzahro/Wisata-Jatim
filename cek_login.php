<?php
	session_start();
	$konek = new mysqli ('localhost','root','','situs');

	$username = $_POST ['username'];
	$password = $_POST['pass'];

	$query = mysqli_query($konek,"select * from admin where username = '$username' and password = '$password'") or die(mysqli_error($konek));
	$cek = mysqli_num_rows($query);

	if ($cek>0) {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header ("location:tampil_admin.php");
		}		
	 else {
		header("location:login_admin.php?pesan=gagal");
	}
  ?>