<?php

class Produk
{
    public
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 30000;

echo "Komik: ", $produk1->getLabel();
