<!--
    Nama    :Ruth Pratiwi
    Nim     : 13321051
    Kelas   : D3TK2
   
-->
<?php

//class ContohStatic{
  //  public static $angka = 1;

    //public static function halo() {
      //  return "Halo." . self::$angka++ . " kali. ";
    //}
//}
//echo ContohStatic::$angka;
//echo "<br>";
//echo ContohStatic::halo();
//echo "<hr>";
//echo ContohStatic::halo();

class Contoh{
    public static $angka = 1;
    public function halo(){
        return "Halo" . self::$angka++ . "kali .<br>" ;
    }
}
$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
?>
Output