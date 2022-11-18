<h1> Exercice 10 </h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ». <br>

Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit) <br>

<h2> Resultat </h2>

<?php
echo "<form action='action.php' method='post'>";

$mesChamps = ["Nom","Prenom","Adresse email", "Ville","Sexe"];
$metier = ["Developpeur Logiciel","Designer Web", "Integrateur", "Chef de projet"];

echo afficherInput($mesChamps); 
echo "<br>";
echo affichercheckbox ($metier);

// Liste Deroulante Mes Champs //

function afficherInput($array) {
	foreach($array as $input) {
		echo "<label for='$input'>$input </label> <input type=text name=$input> <br>";
	}
} 

// Radio Button Metier //

function affichercheckbox ($array) {
	foreach($array as $input) {
        echo "<input type=radio name=$input value=$input>$input <br>" ;
    }
}


echo  "<p><input type='submit' value='OK'><br>";
echo "</form>";