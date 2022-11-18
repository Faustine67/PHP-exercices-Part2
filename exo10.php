<h1> Exercice 10 </h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ». <br>

Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit) <br>

<h2> Resultat </h2>

<?php

$mesChamps = ["Nom","Prenom","Adresse email", "Ville","Sexe"];
$metier = ["Developpeur Logiciel","Designer Web", "Integrateur", "Chef de projet"];

echo afficherInput($mesChamps);
echo afficherInput($metier);

function afficherInput(array $tableau) {
	$result = "<form action='action.php' method='post'>";
	foreach($tableau as $input) {
		$result .= "<p>$input : <input type='text' name='$input' /></p>";
	}
	$result .= "<p><input type='submit' value='OK'></p>";

	return $result
}