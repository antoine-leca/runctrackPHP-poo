<?php
    class Personnage {
        public $x;
        public $y;

        public function __construct($x = 5, $y = 5) {
            $this->x = $x;
            $this->y = $y;
        }

        public function gauche() {
            $this->y--;
        }

        public function droite() {
            $this->y++;
        }

        public function haut() {
            $this->x--;
        }

        public function bas() {
            $this->x++;
        }

        public function position() {
            return "Position: (" . $this->x . ", " . $this->y . ")";
        }
    }

    $perso = new Personnage();
    echo $perso->position() . "<br>";

    $perso->gauche();
    echo $perso->position() . "<br>";

    $perso->droite();
    echo $perso->position() . "<br>";

    $perso->haut();
    echo $perso->position() . "<br>";

    $perso->bas();
    echo $perso->position() . "<br>";
?>