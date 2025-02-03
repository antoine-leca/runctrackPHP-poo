<?php
    class Animal {
        public $age = 0;
        public $prenom = "";
        public function __constructor($age, $prenom) {
            $this->age = $age;
            $this->prenom = $prenom;
        }
        public function vieillir() {
            $this->age++;
        }
        public function nommer($prenom) {
            $this->prenom=$prenom;
        }
    }
    $animal = new Animal();

    echo "L'age de l'animal est de : " . $animal->age . "<br>";
    $animal->vieillir();
    echo "L'age de l'animal est de : " . $animal->age . "<br>";

    $animal->nommer("Bertrand");
    echo "L'animal se nomme : " . $animal->prenom . ".";
?>