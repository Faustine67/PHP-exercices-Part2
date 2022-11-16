<h1> Exercice 9 </h1>
    <p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle") </p>

<h2> Resultat </h2>
<p>
<?php
$nomRadio = array ("Masculin","Feminin","Autre");

function affichercheckbox ($array) {
	foreach($array as $input) {
        echo "<input type=radio name=$input value=$input>$input <br>" ;
    }
}
affichercheckbox ($nomRadio);