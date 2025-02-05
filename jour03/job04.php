<?php
    class Form {
        public function aire() {
            return 0;
        }
    }

    class Rectangle extends Form {
        public $largeur;
        public $hauteur;

        public function __construct($largeur,$hauteur) {
            $this->largeur=$largeur;
            $this->hauteur=$hauteur;
        }

        public function aire() {
            return $this->largeur * $this->hauteur;
        }
    }

    $forme = new Form();
    $rekt = new Rectangle(15, 10);

    echo "L'aire du rectangle est : " . $rekt->aire() . "<br>";
?>