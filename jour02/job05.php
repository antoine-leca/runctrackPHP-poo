<?php
    class Voiture {
        private $marque;
        private $modele;
        private $annee;
        private $kms;
        private $en_marche;
        private $reservoir;

        public function __construct($marque, $modele, $annee, $kms, $reservoir = 50) {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->annee = $annee;
            $this->kms = $kms;
            $this->en_marche = false;
            $this->reservoir = $reservoir;
        }

        public function getMarque() {
            return $this->marque;
        }

        public function setMarque($marque) {
            $this->marque = $marque;
        }

        public function getModele() {
            return $this->modele;
        }

        public function setModele($modele) {
            $this->modele = $modele;
        }

        public function getAnnee() {
            return $this->annee;
        }

        public function setAnnee($annee) {
            $this->annee = $annee;
        }

        public function getKms() {
            return $this->kms;
        }

        public function setKms($kms) {
            $this->kms = $kms;
        }

        public function getReservoir() {
            return $this->reservoir;
        }

        public function setReservoir($reservoir) {
            $this->reservoir = $reservoir;
        }

        public function demarrer() {
            if ($this->verifierPlein() > 5) {
                $this->en_marche = true;
                echo "La voiture démarre.<br>";
            } else {
                echo "Le réservoir est trop bas pour démarrer.<br>";
            }
        }

        public function arreter() {
            $this->en_marche = false;
            echo "La voiture s'arrête.<br>";
        }

        private function verifierPlein() {
            return $this->reservoir;
        }
    }

    $car = new Voiture("Peugeot", "208", 2018, 30000);
    echo "Réservoir : " . $car->getReservoir() . "<br>";

    $car->demarrer();
    $car->arreter();

    echo "Marque : " . $car->getMarque() . "<br>";
    echo "Modèle : " . $car->getModele() . "<br>";
    echo "Année : " . $car->getAnnee() . "<br>";
    echo "Kilométrage : " . $car->getKms() . "<br>";
    echo "Réservoir : " . $car->getReservoir() . "<br>";

    echo "<br>";

    $car->setMarque("Renault");
    $car->setModele("Clio 4");
    $car->setAnnee(2020);
    $car->setKms(5000);
    $car->setReservoir(4);

    $car->demarrer();

    echo "Marque : " . $car->getMarque() . "<br>";
    echo "Modèle : " . $car->getModele() . "<br>";
    echo "Année : " . $car->getAnnee() . "<br>";
    echo "Kilométrage : " . $car->getKms() . "<br>";
    echo "Réservoir : " . $car->getReservoir() . "<br>";
?>