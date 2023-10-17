<?php

// Constant
/*
- Sebuah identifier untuk menyimpan nilai.
- Nilainya tidak dapat berubah.
- Menggunakan keyword define() atau const.
- Menggunakan define, tidak bisa disimpan dalam kelas.
- const bisa disimpan dalam kelas.
*/

// define("NAMA", "Ainan Bahrul Ihsan");
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR

// class Coba {
//     const NAMA = "Ainan Bahrul Ihsan";
// }

// echo Coba::NAMA;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>
