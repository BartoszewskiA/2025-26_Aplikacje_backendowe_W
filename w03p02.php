<?php
$tab = array(
    "nazwa" => "grupa L1",
    "studenci" => ["Anna", "Jan", "Krzysztof"]   
);

foreach($tab as $pole => $zawartosc)
{
    if(is_array($zawartosc))
    {
        echo "Pole: $pole <br>";
        foreach($zawartosc as $wartosc)
        {
            echo "- $wartosc <br>";
        }
    }
    else
    {
        echo "Pole: $pole, wartość: $zawartosc <br>";
    }
}

?>