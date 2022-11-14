<h1> Exercice 5 </h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés. <br>

Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);
</p>

<h2> Resultat </h2>

<form action="action.php" method="post">
 <p>Nom : <input type="text" name="nom" /></p>
 <p>Prénom : <input type="text" name="prénom" /></p>
 <p>Ville : <input type="text" name="ville" /></p>
 <p><input type="submit" value="OK"></p>
</form>

<?php
$mesChamps = ["Nom","Prénom","Ville"];
$donnees = ["DDN", "Genre"];
$bidule = ["Métier", "Niveau d'études", "Années d'XP"];
echo afficherInput($mesChamps);
echo afficherInput($donnees);
echo afficherInput($bidule);

function afficherInput(array $tableau) {
	$result = "<form action='action.php' method='post'>";
	foreach($tableau as $input) {
		$result .= "<p>$input : <input type='text' name='$input' /></p>";
	}
	$result .= "<p><input type='submit' value='OK'></p>";

	return $result;
}
