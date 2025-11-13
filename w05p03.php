<?php 
$a = 10;
$b=20;
$nazwa = "jaksaś nazwa";
$tab = array(1,2,3,4,5);


function pokaz_zmienne()
{
    // global $a, $b, $nazwa, $tab;
    // echo "a = ", $a , "<br>";
    // echo "b = ", $b , "<br>";
    // echo "nazwa = ", $nazwa , "<br>";
    // echo "tab = ";
    // print_r($tab);
    // echo "<br>";
    // echo "a = ", $GLOBALS['a'] , "<br>";
    // echo "b = ", $GLOBALS['b'] , "<br>";
    // echo "nazwa = ", $GLOBALS['nazwa'] , "<br>";
    // echo "tab = ";
    // print_r($GLOBALS['tab']);
    // echo "<br>";
    foreach($GLOBALS as $klucz => $wartosc)
    {
        echo $klucz , " => ";
        print_r($wartosc);
        echo "<br>";
    }
}

pokaz_zmienne()
?>
