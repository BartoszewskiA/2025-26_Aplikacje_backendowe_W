 <?php
    $Tablica = array(
        "owoce" => array("jabłko", "banan", "śliwka"),
        "warzywa" => array("marchew", "ziemniak", "pomidor")
    );

    
    $tab = array(10, 20, 30, 40);
    foreach ($tab as $indeks => $wartosc)
    {
        $tab[$indeks]++;
    }

    foreach($tab as $wartosc)
    {
        echo "Wartość: $wartosc <br>";
    }   
    ?>