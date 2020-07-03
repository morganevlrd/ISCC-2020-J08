<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <title> mini-site-routing </routing>
        </head> 
        <body>
            <header>
                <nav class="Menu">
                    <ul>
                        <li><a href="mini-site-routing.php?page1"> Accueil </a></li>
                        <li><a href="mini-site-routing.php?page2"> Page 1 </a></li>
                        <li><a href="mini-site-routing.php?page2"> Page 2 </a></li>
                    </ul>
                </nav>
            </header>

<?php

if ($_GET["page"]== 1){
    echo "<h1>Accueil !</h1>";
}
if ($_GET ["page"]== 2){
    echo "<h1>Page 2 !</h1>";
}
if ($_GET ["page"]== 3){
    echo "<h1>Page 3 !</h1>";
}
?>


