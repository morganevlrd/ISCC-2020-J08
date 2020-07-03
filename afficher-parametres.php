<?php

$tableauGET = array(
    "param1" => $_GET["param1"],
    "param2" => $_GET["param2"],
); 

function afficher_get($tableauGET) {
    foreach ($tableauGET as $a => $value) {
        echo "<ul><li>clé= $a, valeur = $value </li></ul>";
    }
}

afficher_get($tableauGET);
?>