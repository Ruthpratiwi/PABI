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
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

            public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
            $jmlHalaman = 0, $waktuMain = 0, $tipe ){
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
                $this->jmlHalaman = $jmlHalaman;
                $this->waktuMain = $waktuMain;
                $this->tipe = $tipe;
            }

            public function getlabel(){
                return "$this->penulis, $this->penerbit" ;
            }
            public function getInfoLengkap(){
                
    //komik : Ainon binti Ariff, Malaysia, (Rp. 100000) - 200 halaman
    $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

    if( $this->tipe == "Komik") {
        $str .= " - {$this->jmlHalaman} Halaman.";
    }else if($this->tipe == "Game") {
        $str .= " ~ {$this->waktuMain} jam.";
    }
    return $str;
            }
}

class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul}  | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}
    $produk1 = new produk("upin-ipin","Ainon binti Ariff", "Malaysia", 100000, 200, 0,"Komik"); 
    $produk2 = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");
   
    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();
 
   