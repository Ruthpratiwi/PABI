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
                return "$this->penulis, $this->penerbit" ;
            }
            public function getInfoProduk(){
                
    $str = "{$this->judul} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

    return $str;
            }
} 

class komik extends produk{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
    $jmlHalaman = 0 ){

        parent:: __construct($judul, $penulis, $penerbit, $harga = 0,);

    $this->jmlHalaman = $jmlHalaman;

    }



public function getInfoProduk(){
    $str = "Komik : " . parent::getInfoProduk(). "  - {$this->jmlHalaman} Halaman.";
 return $str;
}
}

class game extends produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
    $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga = 0);
        $this->waktuMain = $waktuMain;
    }



    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktuMain} jam.";
return $str;

    }
}
class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul}  | {$produk->getlabel()} (Rp. {$produk->harga}) - {$this->jmlHalaman} Halaman.";

        return $str;
    }
}
    $produk1 = new Komik("upin-ipin","Ainon binti Ariff", "Malaysia", 100000, 200); 
    $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
   
    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();