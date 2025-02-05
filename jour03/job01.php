<?php
    class Personne {
        public $age = 14;

        public function __construct($age = 14) {
            $this->age = $age;
        }

        public function afficherAge() {
            echo "Âge : " . $this->age . "<br>";
        }

        public function bonjour() {
            echo "Hello <br>";
        }

        public function modifierAge($age) {
            $this->age = $age;
        }
    }

    class Eleve extends Personne {
        public function allerEnCours() {
            echo "Je vais en cours <br>";
        }

        public function afficherAge() {
            echo "J'ai " . $this->age . " ans <br>";
        }
    }

    class Professeur extends Personne {
        private $matiereEnseignee;

        public function __construct($age, $matiereEnseignee) {
            parent::__construct($age);
            $this->matiereEnseignee = $matiereEnseignee;
        }

        public function enseigner() {
            echo "Le cours va commencer <br>";
        }
    }

    $personne = new Personne();
    $eleve = new Eleve();

    $eleve->afficherAge();
?>
