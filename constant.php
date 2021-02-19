<?php

define("NAMA", "Lexy handi");
echo "Menggunakan define";
echo "<br>";
echo NAMA;
echo "<hr>";

const DOMISILI = "Malang";
echo "Menggunakan const";
echo "<br>";
echo DOMISILI;
echo "<hr>";

class Coba
{
    const UMUR = 22;
}

echo Coba::UMUR;
