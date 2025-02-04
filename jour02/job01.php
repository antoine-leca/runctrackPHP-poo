<?php
    class Rectangle {
        private $longueur;
        private $largeur;

        public function __construct($longueur, $largeur) {
            $this->longueur=$longueur;
            $this->largeur=$largeur;
        }

        public function getLongueur() {
            return $this->longueur;
        }
        public function getlargeur() {
            return $this->largeur;
        }

        public function setLongueur($longueur) {
            $this->longueur = $longueur;
        }
        public function setLargeur($largeur) {
            $this->largeur = $largeur;
        }

        public function afficherDetails() {
            echo "Longueur : " . $this->longueur . ". <br>";
            echo "Largeur : " . $this->largeur . ". <br>";
        }
    }

    $rekt = new Rectangle(10,5);
    echo "avant changement <br>";
    $rekt->afficherDetails();
    echo "<br> <br>";

    $rekt->setLongueur(24);
    $rekt->setLargeur(10);
    echo "après changement <br>";
    $rekt->afficherDetails();
?>