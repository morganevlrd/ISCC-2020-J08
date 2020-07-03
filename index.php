<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="stylesheet" href="style/vitrine.css">
  <title>vitrine-accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-wisth, initial-scale=1.0">
</head>

<body> 

<?php
include "header.php"

if(isset($_GET["page"]) ){
    switch (strtolower($_GET['page'])){
    case 'accueil' :
        include "vitrine-accueil.php";
    break;
    case'programme'
        include "vitrine-programme.php";
    break;
    case'contacts'
        include "vitrine-contact.php";
    break;
    default:
    include "page404.php";
    break;
    }
}

?>
</body> 
</html>