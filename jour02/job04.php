<?php
    class Student {
        private $nom;
        private $prenom;
        private $numEt;
        private $cred;
        private $level;

        public function __construct($nom, $prenom, $numEt, $cred=0) {
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->numEt=$numEt;
            $this->cred=$cred;
            $this->level=$this->StuEval();
        }

        public function addCred($cred) {
            $this->cred += $cred;
            $this->level = $this->StuEval(); 
        }
        public function getCred() {
            return $this->cred;
        }
        public function StuEval() {
            if ($this->cred < 60) {
                return "Insuffisant";
            } elseif ($this->cred >= 60 and $this->cred < 70) {
                return "Passable";
            } elseif ($this->cred >= 70 and $this->cred < 80) {
                return "Bien";
            } elseif ($this->cred >= 80 and $this->cred < 90) {
                return "Très bien";
            } elseif ($this->cred >=90) {
                return "Excellent";
            }
        }
        public function studentInfo() {
            echo "Nom : " . $this->nom . "<br>";
            echo "Prénom : " . $this->prenom . "<br>";
            echo "Id : " . $this->numEt . "<br>";
            echo "Niveau : " . $this->level . "<br>";
        }
    }

    $stu = new Student("Doe", "John", 145);
    $stu->addCred(24);
    $stu->addCred(29);
    $stu->addCred(16);

    $stu->studentInfo();

    echo "<br>";

    $stu1 = new Student("PONCE", "Emilie", 146);
    $stu1->addCred(21);
    $stu1->addCred(25);
    $stu1->addCred(46);

    $stu1->studentInfo();
?>