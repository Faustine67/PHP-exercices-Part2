<h1>  Exercice 11 </h1>
<P>

Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
</P>

<h2> Resultats</h2>

<?php

// $choixdate="2013-03-15";
// $date=date_create($choixdate);

function dateConvert(){
    setlocale(LC_TIME,['fr', 'Fra', 'fr_Fra']);
    echo strftime("%A, %e, %B, %Y", mktime(0,0,0,23,02,2018));

}

echo dateConvert();
// echo date_format($date,'l jS \of F Y');
?>