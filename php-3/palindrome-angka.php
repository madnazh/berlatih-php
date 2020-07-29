<?php

function palindrome_angka($angka) {
  // tulis kode di sini
	$result = "";
	$strAngka = strval($angka);
	$reversedString = "";
	for ($i = strlen($strAngka) - 1; $i >= 0; $i--){
		$reversedString .= $strAngka[$i];
	}

	if ($reversedString == $strAngka){
		$angka += 1;
	}

	while (true) {
		$strAngka = strval($angka);
		$reversedString = "";
		for ($i = strlen($strAngka) - 1; $i >= 0; $i--){
			$reversedString.= $strAngka[$i];
		}
		if($reverseString == $strAngka){
			global $result;
			$result = $strAngka . '<br>';
			return $result;
		}
		else{
			$angka +=1;
		};
	};
};

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>
