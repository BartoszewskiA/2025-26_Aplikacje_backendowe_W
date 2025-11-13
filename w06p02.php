<!DOCTYPE html>
<html lang="en">
<?php
$ile = 0;
function sprawdz_ciasteczka()
{
    global $ile;
    if (isset($_COOKIE['licznik']))
        $ile = $_COOKIE['licznik'];
    else
        $ile = 0;
    $ile++;
    setcookie('licznik', $ile, time() + 60 * 60 * 24 * 30);
}
function zeruj_licznik()
{
    global $ile;
    if (isset($_POST['del'])){
        setcookie('licznik');
        $ile = 0;
    }
}
sprawdz_ciasteczka();
zeruj_licznik();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $ile; ?></h1>
    <br><br>
    <form method="post">
        <input type="hidden" name="del" value="true" />
        <input type="submit" value="Zeruj licznik" />
    </form>
</body>

</html>