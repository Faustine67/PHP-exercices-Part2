<h1> Exercice 14 </h1>

<p>
Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
</p>

<p>
nstancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques 
suivantes :
</p>

Peugeot 408 : $v1 = new Voiture("Peugeot","408"); <br>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100); <br>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : <br>
echo $v1->getInfos()."<br>";
echo $ve1->getInfos()."<br>";

<h2> Resultats </h2>

<?php
    Class Voiture{
        private$_marque;
        private$_modele;
 
    public function __construct($marque,$modele){
            $this->_marque=$marque;
            $this->_modele=$modele;
        }
    public function getInfos(){
        return $this->_marque;
        return $this->_modele; 
}
    }
    $v1 = new Voiture("Peugeot","408");
    echo $v1->getInfos();