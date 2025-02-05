<?php
    class Vehicule {
        public $marque;
        public $modele;
        public $annee;
        public $prix;

        public function __construct($marque, $modele, $annee, $prix) {
            $this->marque=$marque;
            $this->modele=$modele;
            $this->annee=$annee;
            $this->prix=$prix;
        }

        public function vInfos() {
            echo "Informations sur le véhicule : <br>";
            echo "Marque : " . $this->marque . "<br>";
            echo "Modele : " . $this->modele . "<br>";
            echo "Annee : " . $this->annee . "<br>";
            echo "Prix : " . $this->prix . "<br>";
        }

        public function demarrer() {
            echo "Attention, je roule <br>";
        }
    }

    class Voiture extends Vehicule {
        public $portes;

        public function __construct($marque, $modele, $annee, $prix, $portes = 4) {
            parent::__construct($marque, $modele, $annee, $prix);
            $this->portes=$portes;
        }

        public function vInfos() {
            parent::vInfos();
            echo "Nombre de portes : " . $this->portes . "<br>";
        }

        public function demarrer() {
            echo "Je roule en " . $this->marque . "<br>";
        }
    }

    class Moto extends Vehicule {
        public $roue;

        public function __construct($marque, $modele, $annee, $prix, $roue = 2) {
            parent::__construct($marque, $modele, $annee, $prix);
            $this->roue=$roue;
        }

        public function vInfos() {
            parent::vInfos();
            echo "Nombre de roues : " . $this->roue . "<br>";
        }
        public function demarrer() {
            echo "Je roule en " . $this->marque . " " . $this->roue . " roues<br>";
        }
    }

    $vehi = new Vehicule("Bugatti", "Chiron", 2020, "3M€");
    $voit = new Voiture("Ford", "Mustang", 1969, "500k€", 3);
    $moto = new Moto("Yamaha", "1200 Vmax", 1987, "4k5€", 2);

    $vehi->vInfos();
    $vehi->demarrer();

    echo "<br>";

    $voit->vInfos();
    $voit->demarrer();

    echo "<br>";

    $moto->vInfos();
    $moto->demarrer();
?>