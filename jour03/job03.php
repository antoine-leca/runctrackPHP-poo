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
        public function getLargeur() {
            return $this->largeur;
        }

        public function setLon($longueur) {
            $this->longueur = $longueur;
        }
        public function setLar($largeur) {
            $this->largeur = $largeur;
        }

        public function perimetre() {
            echo "Périmètre du rectangle : " . ($this->largeur + $this->longueur) * 2 . "<br>";
        }

        public function affInfos() {
            echo "Dimensions du rectangle :<br>";
            echo "Longueur : " . $this->longueur . "<br>";
            echo "Largeur : " . $this->largeur . "<br>";
        }
    }

    class Parallelepipede extends Rectangle {
        public $hauteur;

        public function __construct($longueur, $largeur, $hauteur) {
            parent::__construct($longueur, $largeur);
            $this->hauteur = $hauteur;
        }

        public function volume() {
            echo "Volume du parallélépipède : " . ($this->getLongueur() * $this->getLargeur() * $this->hauteur);
        }

        public function affInfos() {
            echo "Dimensions du rectangle :<br>";
            echo "Longueur : " . $this->getLongueur() . "<br>";
            echo "Largeur : " . $this->getLargeur() . "<br>";
            echo "Hauteur : " . $this->hauteur . "<br>";
        }
    }

    $rekt = new Rectangle(14,16);
    $rekt->affInfos();
    $rekt->perimetre();

    echo "<br>";

    $para = new Parallelepipede(30,15,26);
    $para->affInfos();
    $para->volume();
?>