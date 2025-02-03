<?php
    class Cercle {
        public $r;

        public function __construct($r = 6) {
            $this->r = $r;
        }

        public function changerRayon($newr) {
            $this->r = $newr;
        }

        public function afficherInfo() {
            echo "Diamètre : " . ($this->r * 2) . "<br>";
            echo "Aire : " . ($this->r * $this->r * 3.14) . "<br>";
            echo "Circonférence : " . (2 * 3.14 * $this->r) . "<br>";
        }

        public function circ() {
            return 2 * 3.14 * $this->r;
        }

        public function aire() {
            return $this->r * $this->r * 3.14;
        }

        public function diametre() {
            return $this->r * 2;
        }
    }

    $cercle = new Cercle();
    echo "Rayon du cercle : " . $cercle->r . "<br>";
    $cercle->afficherInfo();