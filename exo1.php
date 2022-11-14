<h1> Exercice 1 </h1>

<p> Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge. <br>

Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) <p>

<h2> Resultat </h2>

<?php
$texte= "Bidule";

function convertirMajRouge($phrase) {
	$convertirMajRouge=mb_strtoupper( $phrase);
	return "<p style='color : red'> $convertirMajRouge </p>" ;
}

echo convertirMajRouge($texte);

?>

