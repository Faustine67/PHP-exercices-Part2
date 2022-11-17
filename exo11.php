<h1>  Exercice 11 </h1>
<P>

Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
</P>

<h2> Resultats</h2>

<?php

// $date=2018-02-23;
// formaterDateFr($date);
// echo date('l jS \of F Y');
$choixheure="2013-03-15";
setlocale(LC_TIME,'fr_FR');
$date=date_create($choixheure);
echo date_format($date,'l jS \of F Y');
?>