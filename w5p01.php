<?php 
function wypisz_tablice($tablica)
{
    if(!is_array($tablica))
    {
        echo "<p>To nie jest tablica<p>\n";
        return;
    }
    echo "<ul>";
    foreach($tablica as $element)
    {
        echo "<li>\n";
        echo $element , "<br>";
        echo "</li>\n";
    }
    echo "</ul>";
}
?>

<?php 
$tab = array("Jan","Anna","Piotr","Kasia");
// $tab = "brak danych";
wypisz_tablice($tab);
?>