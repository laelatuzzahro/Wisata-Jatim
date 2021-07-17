<?php
	include 'koneksi.php';
	$rating_baru=$_GET['rating'];
	$no=$_GET['no'];
	$sql=mysqli_query($konek,"select * from data where no='$no'");
	$data=mysqli_fetch_array($sql);
	$rating=$data['rating'];
	$rating=$rating+$rating_baru;
	
	$update=mysqli_query($konek,"UPDATE `data` SET `rating`='$rating' WHERE `no`='$no'") or die("error");
	header("location:details.php?no=$no");