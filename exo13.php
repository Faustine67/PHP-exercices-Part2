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

        public function __construct($marque,$modele,$nbPortes){
            $this->_marque=$marque;
            $this->_modele=$modele;
            $this->_nbPortes=$nbPortes;
            $this->_vitesseActuelle=0;
            $this->_status=0;
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
        public function demarrer() {
            if ($this->_status=0) {
                $this->_status=1 ;
            return "le vehicule".$this->_marque." ".$this->_modele." demarre";
            }
            else{
            return "le vehicule".$this->_marque." ".$this->_modele." est déjà demarré";
            }
        }
        public function accelerer ($speed){
            if($this->_status==1){
            $this->_vitesseActuelle+=$speed ; 
                return "accelere de".$speed ;
        }
            else{
                return "est stoppé";
            }

            // Soit 120 la vitesse max
            // $slow= vit sup à 120- 120
            // ex: $slow = 135- 120
            // slow= la voiture doit ralentir de 15km/h
        }
        public function ralentier ($slow){
            if (this->_vitesseActuelle> 120){
              $this->_vitesseActuelle-120==$slow;
              return "doit ralentir de $slow";
            }
            else{
               return "peut continuer à accelerer";
            }   
        }
        }
$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3) ;
echo $v1->demarrer();
echo $v1->getstatus ();
echo $v1->accelerer (50);
echo $v1->ralentir(10);
echo $v2->demarrer();
echo $v2->getstatus ();
echo $v2->accelerer (40);
echo $v2->ralentir(30);
echo $v1->getMarque()." ". $v1->getModele()."<br>";
echo $v2->getMarque()." ". $v2->getModele()."<br>";
