<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0,
        $tipe = ""
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} {$this->getLabel()} (Rp. $this->harga)";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} halaman";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} jam";
        }
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Call of Duty", "Gareth Evans", "Activision", 120000, 0, 50, "Game");
$cetakProduk1 = new CetakInfoProduk();
$cetakProduk2 = new CetakInfoProduk();

echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();
echo "<br>";
echo "<br>";
echo $cetakProduk1->cetak($produk1);
echo "<br>";
echo $cetakProduk2->cetak($produk2);
echo "<br>";
echo "<br>";
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
