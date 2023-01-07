<?php

// define('NAMA', 'Ade Saputra');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// Menggunakan const di didalam class
// class Coba
// {
//     const NAMA = 'Ade Saputra';
// }

// echo Coba::NAMA;

// echo __DIR__;


// function coba()
// {
//     return __FUNCTION__;
// }
// echo coba();


class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
