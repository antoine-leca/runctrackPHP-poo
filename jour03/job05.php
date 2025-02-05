<?php
    class Form {
        public function aire() {
            return 0;
        }
    }

    class Rectangle extends Form {
        public $largeur;
        public $hauteur;

        public function __construct($largeur, $hauteur) {
            $this->largeur = $largeur;
            $this->hauteur = $hauteur;
        }

        public function aire() {
            return $this->largeur * $this->hauteur;
        }

        public function affInfos() {
            echo "Le rectangle a une largeur de " . $this->largeur . " et une hauteur de " . $this->hauteur;
        }
    }

    class Cercle extends Form {
        public $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function aire() {
            return 3.14 * ($this->radius * $this->radius);
        }

        public function affInfos() {
            echo "Le cercle a un rayon de " . $this->radius;
        }
    }

    $forme = new Form();
    $rekt = new Rectangle(15, 10);
    $circ = new Cercle(5);

    $rekt->affInfos();
    echo " et son aire est de " . $rekt->aire() . "<br>";

    echo "<br>";

    $circ->affInfos();
    echo " et son aire est de " . $circ->aire() . "<br>";
?>