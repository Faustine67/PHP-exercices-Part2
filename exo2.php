<h1> Exercice 2 </h1>

<P> Soit le tableau suivant : <br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"); <br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.<br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales); <br>

<h2> Résultat </h2>

<?php



$capitales = [
	" France" => "Paris",
	"Allemagne" => "Berlin",
	"USA" => "Washington",
	"Italie" => "Rome"
];

foreach ( $capitales as $pays => $capitale) {
	echo "le pays $pays a pour capitale : $capitale <br>";
}

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){
ksort($capitales); // trier le tableau dans l'ordre alphabetique sur la clé
	$result = "<table border=1>	
				<thead>	
					<tr>
						<th> Pays </th>
						<th> Capitales </th>
					</tr>
				</thead>
			<tbody>";
	foreach($capitales as $pays => $capitale) {
		$result .= "<tr>
					<td>".mb_strtoupper($pays)."</td> // Met le mot en majuscule //
					<td>".ucfirst($capitale)." </td> // Met la 1ere lette en majuscule //
				</tr>";			
	}
$result .= "</tbody></table>";
	return $result;
}
