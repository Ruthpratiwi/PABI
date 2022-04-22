<!--
    Nama    :Ruth Pratiwi
    Nim     : 13321051
    Kelas   : D3TK2
   
-->
<?php
class CetakInfoProduk {
        public $daftarProduk = array();

        public function tambahProduk( Produk $produk){
          $this->daftarProduk[] = $produk;
        }


        public function cetak(){
            $str = "DAFTAR PRODUK : <br>";

            foreach($this->daftarProduk as $p){
                $str .= "-{$p->getInfoProduk()} <br>";
            }

            return $str;

        }
    }