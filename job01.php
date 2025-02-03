<?php 
    class Operation {
        public $nombre1 = 38;
        public $nombre2 = 24;
        public function afficherNombres() {
            echo $this->nombre1 . " " . $this->nombre2;
        }
    }
    $operation = new Operation();
    $operation->afficherNombres();
?>