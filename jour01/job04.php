<?php
    class Point {
        public $x;
        public $y;

        public function __construct($x=96, $y=49) {
            $this->x = $x;
            $this->y = $y;
        }

        public function afficherLesPoints() {
            echo $this->x . " " . $this->y;
        }

        public function afficherX() {
            echo $this->x;
        }
        public function afficherY() {
            echo $this->y;
        }

        public function changerX($newx) {
            $this->x = $newx;
        }
        public function changerY($newy) {
            $this->y = $newy;
        }
    }

    $point = new Point();
    $point->afficherLesPoints();
    echo "<br>";

    $point->changerX(61);
    $point->afficherX();
    echo "<br>";

    $point->changerY(46);
    $point->afficherY();
    echo "<br>";

    $point->afficherLesPoints();
    echo "<br>";
?>