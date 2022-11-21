<h1> Exercice 13 </h1>

<p>
    
Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule.
</p>
v1 ➔ "Peugeot","408",5 <br>
v2 ➔ "Citroën","C4",3 <br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. <br>

<h2> Resultats </h2>

<?php
    Class Voiture{
        private$_marque;
        private$_modele;
        private$_nbPortes;
        private$_vitesseActuelle;
        private$_status;

        public function __construct($marque,$modele,$nbPortes,$vitesseActuelle,$status){
            $this->_marque=$marque;
            $this->_modele=$modele;
            $this->_nbPortes=$nbPortes;
            $this->_vitesseActuelle=$vitesseActuelle;
            $this->_status=$status;
    
        }
        public function getMarque(){
            return $this->_marque;
        }
         public function getModele() {
            return $this->_modele;
            }
        public function getNbPortes() {
            return $this->_nbPortes;
                }
         public function getVitesseActuelle() {
            return $this->_vitesseActuelle;
                    }
        public function getstatus() {
            if ($this->_status==1) {
            return "est demarré";
            }
            else{
            return "est stoppé";
            }
        }
        public function accelerer ($speed){
            $this->_vitesseActuelle+=$speed;
        }
        }
$v1 = new Voiture("Peugeot", "408", 5,0,0) ;
$v2 = new Voiture("Citroën", "C4", 3,0,0) ;
$v1->getstatus ();
$v1->accelerer (50);
echo $v1->getstatus();
echo $v1->getMarque()." ". $v1->getModele().$v1->getNbPortes()."<br>";
echo $v2->getMarque()." ". $v2->getModele().$v2->getNbPortes()."<br>";
