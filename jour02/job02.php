<?php
    class Livre  {
        private $titre;
        private $auteur;
        private $nbPages;

        public function __construct($titre, $auteur, $nbPages) {
            $this->titre=$titre;
            $this->auteur=$auteur;
            $this->nbPages=$nbPages;
        }

        public function getTitre() {
            return $this->titre;
        }
        public function getAuteur() {
            return $this->auteur;
        }
        public function getNbPages() {
            return $this->nbPages;
        }

        public function setTitre($titre) {
            $this->titre = $titre;
        }
        public function setAuteur($auteur) {
            $this->auteur = $auteur;
        }
        public function setNbPages($nbPages) {
            $this->nbPages = $nbPages;
        }

        public function afficherDetails() {
            echo "Titre : " . $this->titre . ". <br>";
            echo "Auteur : " . $this->auteur . ". <br>";
            echo "Nombre de pages : " . $this->nbPages . ". <br>";
        }
    }

    $livre = new Livre ("Roman1", "Emilie PONCE", 256);
    echo "avant changement <br>";
    $livre->afficherDetails();
    echo "<br> <br>";

    $livre->setTitre("Roman2");
    $livre->setAuteur("PONCE Emilie");
    $livre->setNbPages(458);
    echo "après changement <br>";
    $livre->afficherDetails();
?>