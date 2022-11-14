<h1> Exercice 2 </h1>

<P> Soit le tableau suivant : <br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"); <br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.<br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales); <br>

<h2> Résultat </h2>


	<!-- // <table border=1>	// -->
	<!-- // Entete du tableau // -->

<!-- //
<thead>	
		<tr>
			<th> Pays </th>
			<th> Capitales </th>
		</tr>
	</thead>

// -->

<!--	//Corps du tableau // -->

<!-- //
<tbody>
	<tr>	
		<td>France</td>
		<td>Paris</td>
</tr>
	<tr>	
		<td>Allemagne</td>
		<td>Berlin</td>
</tr>
</tbody>
</table>
// -->


<?php

//$villes = [
	//"France" => ["Paris","Lyon","Strasbourg"],
	//"Allemagne" => ["Berlin", "Munich"] 
// ];

//var_dump($villes);

//foreach($villes as $pays => $villesPays) {
	//echo "Le pays $pays a comme villes : <br><ul>";
	//foreach($villesPays as $ville) {
	//	echo "<li>$ville</li>";
	//}
	//echo "</ul>";
 //}

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
					<td>".mb_strtoupper($pays)."</td>
					<td>".ucfirst($capitale)." </td>
				</tr>";			
	}
$result .= "</tbody></table>";
	return $result;
}