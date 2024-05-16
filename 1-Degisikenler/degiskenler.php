<?php

    $A = 10;
    $B = 20;

    echo $A + $B;
    
    echo "<br>";

    $isim = "Emre";
    $yas = 30;
    $puanlar = array(80,90,100);

    echo "İsim: " . $isim . "<br>" . "Yaşı: " . $yas; // Yorum Satiri kullanimi.

    /*
    Blok halinde yorum satiri.

    string
    int
    double
    boolean
    object
    array
    null
    */ 

    $urunAdi = "Monster Notbook";
    echo gettype($urunAdi);

    echo "<br>";

    $fiyat = 35000;
    echo gettype($fiyat);

    echo "<br>";

    $kdvOrani = 0.15;
    echo gettype($kdvOrani);

    echo "<br>";

    $satildiMi = false;
    echo gettype($satildiMi);

    echo "<br>";

    $a = (double)10;
    echo gettype($a);

    echo "<br>";

    $b = (int)"a20";
    echo gettype($b);
    echo $b;

    $c = (int)false;
    echo gettype($c);
    echo $c;





?>