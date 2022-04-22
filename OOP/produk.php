<!--
    Nama    :Ruth Pratiwi
    Nim     : 13321051
    Kelas   : D3TK2
   
-->
<?php


class Produk{
    public $judul = "judul", 
         $penulis = "penulis", 
         $penerbit = "penerbit", 
            $harga = 0;

            public function getlabel(){
                return "$this->penulis, $this->penerbit";
            }

}

   // $produk1 = new produk();
    //$produk1->judul = "Naruto";
    //var_dump($produk1);


    //$produk2 = new produk(); 
    //$produk2->judul = "Uncharted";
    //var_dump($produk2);

    
    $produk3 = new produk(); 
    $produk3->judul = "upin-ipin";
    $produk3->penulis = "Ainon binti Ariff";
    $produk3->penerbit = "Malaysia";
    $produk3->harga = "100000";
 


$produk4 = new produk(); 
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "250000";

echo "komik : " . $produk3->getlabel();
echo "<br>";
echo "game : " . $produk4->getlabel();