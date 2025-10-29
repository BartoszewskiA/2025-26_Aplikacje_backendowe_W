<!DOCTYPE html>
<html lang="en">
<?php
$dniTygodnia = [
    1 => "Niedziela",
    2 => "Poniedziałek",
    3 => "Wtorek",
    4 => "Środa",
    5 => "Czwartek",
    6 => "Piątek",
    7 => "Sobota"
];
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 
$dzien = 3;
echo "Dzień tygodnia o numerze $dzien to: " . $dniTygodnia[$dzien];
?>
</body>

</html>