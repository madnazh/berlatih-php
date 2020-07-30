<?php
function skor_terbesar($arr){
//kode di sini
  $array = [];
  for ($i = 0; $i < count($arr); $i++) { 
    array_push($keys, $arr[$i]['kelas']);
    if($arr[$i]['kelas'] == array_unique($keys)[0]){
      array_push($Laravel,$arr[$i]);
    } else if($arr[$i]['kelas'] == array_unique($keys)[1]){
      array_push($reactNative, $arr[$i]);
    } else{
      array_push($reactJs, $arr[$i]);
    }
  
  }

    $nilaiLaravel = array_column($Laravel, 'nilai');
    rsort($nilaiLaravel);
    $nilaiReactJs = array_column($Laravel, 'nilai');
    rsort($nilaiReactJs);
    $nilaiReactNative = array_column($Laravel, 'nilai');
    rsort($nilaiReactNative);
    $result = [];
    $kelas = ['Laravel','React Js','React Native'];

  for($j = 0; $j < count($arr); $j++){
    if($arr[$j]['nilai'] == $nilaiLaravel[0] || $arr[$j]['nilai'] == $nilaiReactJs[0] || $arr[$j]['nilai'] == $nilaiReactNative[0]){
      array_push($result, $arr[$j]);
      }
    }

    $fix = array_combine($kelas, $result);
    return $fix;
  }

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>
