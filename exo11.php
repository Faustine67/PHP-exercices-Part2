<h1>  Exercice 11 </h1>
<P>

Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
</P>

<h2> Resultats</h2>

<?php

setlocale(LC_TIME, 'fr_FR');

date_default_timezone_set('Europe/Paris');

$date1="2013-03-15";

// Afficher date du jour en français

$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

    echo ucfirst($formatter->format(date_create($date1)))."<br>";
?>