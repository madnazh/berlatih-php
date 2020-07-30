<?php
function ubah_huruf($string){
//kode di sini
	$huruf = "abcdefghijklmnopqrstuvwxyz";
	$hasil = "";
	for($i = 0; $i < strlen($string); $i++){
		$position = strrpos($huruf, $string[$i]);
		$hasil .= substr($huruf, $position + 1, 1);
	}
	return $hasil;
}

// TEST CASES
echo "<br>". ubah_huruf('wow'); // xpx
echo "<br>". ubah_huruf('developer'); // efwfmpqfs
echo "<br>". ubah_huruf('laravel'); // mbsbwfm
echo "<br>". ubah_huruf('keren'); // lfsfo
echo "<br>". ubah_huruf('semangat'); // tfnbohbu

?>
