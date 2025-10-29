 <?php
    $opcje = array(
        'pilka' => 'piłka nożna',
        'kosz' => 'koszykówka',
        'siat' => 'siatkówka',
        'nar' => 'narciarstwo',
        'hokej' => 'hokej',
        'boks' => 'boks',
        'inny' => 'inny sport'
    );
    if (isset($_GET['opcja'])) { // wartości w formularzu są wpisane
        foreach ($opcje as $klucz => $wartosc) {
            if ($klucz == $_GET['opcja']) {
                $cowybrano = $wartosc;
            }
        }
        print("Użytkownik wybrał opcję: <b>$cowybrano</b>.<br />");
        print '<br /><a href="w03p04.php">Powrót do formularza</a>';
    } else { // nie ma wpisanych danych, wyświetlamy formularz
        print '<form action="w03p04.php" method="get"><div>';
        print 'Wybierz, jak sport lubisz:<br /><br />';
        foreach ($opcje as $klucz => $wartosc) {
            print("<input type=\"radio\" name=\"opcja\" value=\"$klucz\" />");
            print($wartosc . "<br />");
        }
        print '<p><input type="submit" value="Wyślij" /></p>';
        print '</div></form>';
    }
    ?>