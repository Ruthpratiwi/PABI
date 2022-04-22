<!--
    Nama    :Ruth Pratiwi
    Nim     : 13321051
    Kelas   : D3TK2
   
-->
<?php

require_once 'App/init.php';
$produk1 = new Komik("upin-ipin","Ainon binti Ariff", "Malaysia", 100000, 200); 
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();