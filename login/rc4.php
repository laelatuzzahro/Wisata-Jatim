<?php
function rc4($str) {
	$key = 'aml';
	$s = array();
	for ($i = 0; $i < 255; $i++) {
		$s[$i] = $i;
	}
	$j = 0;
	for ($i = 0; $i < 255; $i++) {
		$j = ($j + $s[$i] + ord($key[$i % strlen($key)])) % 255;
		$x = $s[$i];
		$s[$i] = $s[$j];
		$s[$j] = $x;
	}
	$i = 0;
	$j = 0;
	$res = '';
	for ($y = 0; $y < strlen($str); $y++) {
		$i = ($i + 1) % 255;
		$j = ($j + $s[$i]) % 255;
		$x = $s[$i];
		$s[$i] = $s[$j];
		$s[$j] = $x;
		$res .= $str[$y] ^ chr($s[($s[$i] + $s[$j]) % 255]);
	}
	return $res;
}

?>