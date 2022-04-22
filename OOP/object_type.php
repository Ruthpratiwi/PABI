<!--
    Nama    :Ruth Pratiwi
    Nim     : 13321051
    Kelas   : D3TK2
   
-->
<?php


class Produk{
    public $judul, 
         $penulis,
         $penerbit,
            $harga;

            public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
            }

            public function getlabel(){
                return "$this->penulis, $this->penerbit";
            }

}

class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul}  | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}
    $produk1 = new produk("upin-ipin","Ainon binti Ariff", "Malaysia", 100000); 
    $produk2 = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
   
 

echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "game : " . $produk2->getlabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);