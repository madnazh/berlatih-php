<?php

function papan_catur($angka) {
// tulis kode di sini 
 $text = '';
 // Jumlah Kotak
 $jumlah = "";
 // Membuat Tag Table
 $text .= '<table border=1>';
 // Perulangan pembuatan kotak catur
 for($n = 0; $n < $angka; $n++) {
  $text .= '<tr>';
  for($m = 0; $m < ($angka*2)-1; $m++) {
   // Pemberian Warna
   $warna = '';
      if(($n % 2 == 0 && $m % 2 == 0) || ($n % 2 == 1 && $m % 2 == 1)) {
          $warna = '#000';
      }
   else $warna = '#fff';
      $text .= '<td width=30 height=30 bgcolor='.$warna.'></td>';
  }
  $text .= '</tr>';
 }
 // Tag Penutup Table
 $text .= '</table>';
}

// TEST CASES
echo papan_catur(4) 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8)
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # # */


echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

?>
