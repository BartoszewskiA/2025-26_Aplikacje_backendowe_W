 <?php
    $tekst = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.[br] Vestibulum 
convallis, quam nec malesuada rhoncus, odio metus vestibulum quam, in laoreet ex odio 
scelerisque mi.[br] Sed sit amet egestas augue. Proin fermentum sit amet nibh eget 
facilisis.[br] Suspendisse ultrices et lacus at placerat";

    $tablica = explode('[br]', $tekst);
    foreach ($tablica as $wpis) {
        echo "$wpis <br>";
    }
    ?>