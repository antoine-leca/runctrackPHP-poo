<?php
    class Livre {
        private $titre;
        private $auteur;
        private $nbPages;
        private $dispo;

        public function __construct($titre, $auteur, $nbPages) {
            $this->titre = $titre;
            $this->auteur = $auteur;
            $this->nbPages = $nbPages;
            $this->dispo = true;
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
            echo "<br> <br>";
        }

        public function verification() {
            return $this->dispo;
        }

        public function emprunter() {
            if ($this->verification()) {
                $this->dispo = false;
                echo "Emprunt effectué <br>";
            } else {
                echo "Le livre n'est pas disponible, emprunt impossible <br>";
            }
        }

        public function rendre() {
            if (!$this->verification()) {
                $this->dispo = true;
                echo "Livre rendu <br>";
            } else {
                echo "Le livre n'a pas été emprunté <br>";
            }
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

    if ($livre->verification()) {
        echo "Le livre est disponible. <br>";
    } else {
        echo "Le livre n'est pas disponible. <br>";
    }

    $livre->emprunter();

    if ($livre->verification()) {
        echo "Le livre est disponible. <br>";
    } else {
        echo "Le livre n'est pas disponible. <br>";
    }

    $livre->rendre();

    if ($livre->verification()) {
        echo "Le livre est disponible. <br>";
    } else {
        echo "Le livre n'est pas disponible. <br>";
    }
?>