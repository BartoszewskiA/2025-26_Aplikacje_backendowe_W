<?php 
$plik = fopen("plik.txt","r");
if(!$plik)
{
    echo "Błąd pliku";
    return;
}
echo "Plik istnieje<br>";
echo "Rozmiar:",filesize("plik.txt"),"<br>";
while(!feof($plik))
{
    $wiersz = fgets($plik);
    echo $wiersz , "<br>";
}


fclose($plik);

// if(!file_exists("plik.txt"))
// {
//     echo "Błąd pliku";
//     return;
// }
// echo "Plik istnieje";
?>