<h1> Exercice 4 </h1>

<p> partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale). <br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme <br>
: https://fr.wikipedia.org/wiki/ <br>

Le tableau passé en argument sera le suivant : <br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

<h2> Resultat </h2>
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
						<th> Lien wiki </th>
					</tr>
				</thead>
			<tbody>";
	foreach($capitales as $pays => $capitale) {
		$result .= "<tr>
					<td>".mb_strtoupper($pays)."</td>
					<td>".ucfirst($capitale)." </td>
					<td><a href='https://fr.wikipedia.org/wiki/$capitale' target='blank'>Lien</a></td> 	// target = 'blank'  permet d'ouvrir un nouvel onglet //
				</tr>";			
	}
	$result .= "</tbody></table>";
	return $result;
}
