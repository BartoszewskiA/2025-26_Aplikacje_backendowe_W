<?php
function srednia(...$liczby)
{
    $suma = array_sum($liczby);
    $ilosc = count($liczby);
    if ($ilosc === 0) {
        return 0; // Unikamy dzielenia przez zero
    }
    return $suma / $ilosc;
}

echo srednia(2, 4, 6, [3,5,6]); // Wynik: 5
