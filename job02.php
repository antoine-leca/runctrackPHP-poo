<?php 
    class Operation {
        public $nombre1 = 38;
        public $nombre2 = 24;
        public function additionNombres() {
            echo $this->nombre1 + $this->nombre2;
        }
    }
    $operation = new Operation();
    $operation->additionNombres();
?>