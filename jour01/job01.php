<?php 
    class Operation {
        public $nombre1;
        public $nombre2;

        public function __construct($nombre1 = 38, $nombre2 = 24) {
            $this->nombre1 = $nombre1;
            $this->nombre2 = $nombre2;
        }

        public function afficherNombres() {
            echo $this->nombre1 . " " . $this->nombre2;
        }
    }
    $operation = new Operation();
    $operation->afficherNombres();
?>