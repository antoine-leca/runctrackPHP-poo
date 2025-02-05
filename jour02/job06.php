<?php
    class Commande {
        private $numC;
        private $liPlat;
        private $statC;

        public function __construct($numC) {
            $this->numC = $numC;
            $this->liPlat = [];
            $this->statC = "en cours";
        }

        public function getNumC() {
            return $this->numC;
        }
        public function getLiPlat() {
            return $this->liPlat;
        }
        public function getStatC() {
            return $this->statC;
        }
        
        public function setNumC($numC) {
            $this->numC = $numC;
        }
        public function setLiPlat($liPlat) {
            $this->liPlat = $liPlat;
        }
        public function setStatC($statC) {
            $this->statC = $statC;
        }

        public function ajouterPlat($nomPlat, $prixPlat) {
            $this->liPlat[$nomPlat] = $prixPlat;
        }
        public function annulerC() {
            $this->statC = "annulée";
        }   

        private function calculerTotal() {
            $total = 0;
            foreach ($this->liPlat as $plat => $prix) {
                $total += $prix;
            }
            return $total;
        }
        public function afficherC() {
            echo "Commande n°" . $this->numC . " : <br>";
            foreach ($this->liPlat as $plat => $prix) {
                echo $plat . " : " . $prix . "€ <br>";
            }
            echo "Total : " . $this->calculerTotal() . "€ <br>";
            echo "Statut : " . $this->statC . "<br>";
        }
        public function calculerTVA($taux=20) {
            $total = $this->calculerTotal();
            $tva = $total * $taux / 100;
            return $tva;
        }
    }

    $co = new Commande(123);
    $co->ajouterPlat("Salade césar", 8);
    $co->ajouterPlat("Steak Frites ", 15);
    $co->ajouterPlat("Vin rouge", 24);

    $co->afficherC();
    echo "TVA (20%) : " . $co->calculerTVA() . "€<br>";

    echo "<br>";

    $co2 = new Commande(124);
    $co2->ajouterPlat("Planche de charcuterie", 8);
    $co2->ajouterPlat("Escalope milanaise $ salade au choix ", 15);
    $co2->ajouterPlat("Vin rouge", 24);
    
    $co2->annulerC();
    $co2->afficherC();
?>