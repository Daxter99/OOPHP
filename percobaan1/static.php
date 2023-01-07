<?php

class ContohStatic
{
    public static $angka = 1;

    public static function hallo()
    {
        return "Hallo." . self::$angka++ . " Kali.";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::hallo();
echo "<hr>";
echo ContohStatic::hallo();

echo "<hr>";

class Contoh
{
    public $angka = 1;

    public function Hallo()
    {
        return "Hallo." . $this->angka++ . " Kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->Hallo();
