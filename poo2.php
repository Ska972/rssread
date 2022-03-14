<?php

    class Famille {

        private $nom = "Charly" ;

        public $prenom = "Charles" ;

        function getNom(){

            return $this->nom ;

        }
        public function setNom($nom){

            $this->nom = $nom ;
        }
    }

?>