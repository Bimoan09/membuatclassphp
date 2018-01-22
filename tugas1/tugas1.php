<?php

class kontak_HP {

  // properti
   var $no_hp;
   var $email;
}

// buat objek dari class Phone_Number
$bimo = new kontak_HP();
$bima = new kontak_HP();

// set property untuk objek bimo
$bimo->no_hp="0811111";
$bimo->email="bimo@gmail.com";

// set property untuk objek bima
$bima->no_hp="0811112";
$bima->email="bima@gmail.com";

// Cetak property untuk objek bimo
echo "kontak_HP Untuk bimo";
echo $bimo->no_hp;

echo $bimo->email;


// Cetak property untuk objek bima
echo "kontak_HP Untuk bima";
echo $bima->no_hp;

echo $bima->email;


?>
