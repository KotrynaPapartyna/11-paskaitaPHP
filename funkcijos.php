<?php


// funkcija galioja visame dokumente 
function sudek ($a, $b) {
    return $a+$b; 
}

// funkcija, kuri nieko negrazina, tik isveda (sudeda kintamuosius)
function atimtis ($a, $b) {
    echo $a+$b; 
    echo "<br>";
}

// isvedimas funkciju bloke (sudeda kintamuosius)
echo sudek (5,4); 
echo "<br>";
atimtis (5,4);
echo "<br>"; 

?>

<?php

// isvedimas kitame php bloke 
echo sudek (5,4);
echo "<br>";
atimtis (5,4);
echo "<br>"; 

?>