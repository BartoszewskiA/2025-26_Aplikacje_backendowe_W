<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    setcookie('ciasteczko',"to jest treść ciasteczka",time()+60);
    if(isset($_COOKIE['ciasteczko']))
        echo "Cisateczko istnieje";
    else
        echo "Cisateczka brak";
    ?>
</body>
</html>