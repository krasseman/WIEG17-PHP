<?php
$pageName = "Min Lista";
include './header.php';
$myArray = array("2. Gudfadern","1. Nyckeln till frihet", "3. Gudfadern del II", "5. Pulp fiction","4. The Dark Knight", "6. Den gode, den onde, den fule", "7. Fight Club", "8. Inception", "9. Seven", "10. Interstellar");
$pageName = "Min Lista";
sort($myArray, SORT_NUMERIC);

echo "Detta är $pageName <br>";

foreach ($myArray as $value){
   
    echo ("$value <br>");


}

?>