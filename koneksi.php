<?php
	$hostname='localhost';
	$username='root';
	$password='';
	$database='pw';
	$konek = new mysqli($hostname,$username,$password,$database);
	if($konek->connect_error){
		die ('Maaf koneksi gagal:' .$connection->connect_error);}
?>