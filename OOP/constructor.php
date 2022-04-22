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

    $produk1 = new produk("upin-ipin","Ainon binti Ariff", "Malaysia", 100000); 
    $produk2 = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
    $produk3 = new produk("GTA");
 

echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);