<h1>Exercice 8 </h1>
    <p> Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran

<h2> Resultats </h2>

<?php

$image= "http://my.mobirise.com/data/userpic/764.jpg" ;
$times= 3 ;

echo str_repeat("<img src=$image>",$times);