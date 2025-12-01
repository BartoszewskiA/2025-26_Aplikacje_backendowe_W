    <?php
    $indeksowanaTablica = array("jabłko", "banan", "śliwka");
    header('Content-Type: application/json');
    echo json_encode($indeksowanaTablica);
    ?>