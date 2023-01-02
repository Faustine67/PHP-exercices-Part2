<H1> Exercice 7 </h1>

<p> Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non. </p>

<H2> Resultats </H2>

<?php

$choix = array ("choix 1","choix 2","choix 3");

function affichercheckbox ($array) {
	foreach($array as $input) {
        echo "<input type=checkbox name=$input value=$input>$input <br>" ;
    }
}
affichercheckbox ($choix);

?>
