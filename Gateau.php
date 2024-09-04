<?php
    
    Class Gateau{

        // ATTRIBUTS
        private $nom;
        public $ingre;
        public $cuissonMode;
        public $cuissonTemp;
        public $cuissonTime;
        
        // CONSTRUCTEUR / DESTRUCTEUR
        function __construct($nom){
            $this->setNom($nom);
        }

        // GETTER SETTER
        public function getNom()
        {
            return($this->nom);
        }

        public function setNom($nom)
        {
            $this->nom = strtoupper($nom);
        }

        // METHODES

        public function lancerCuisson()
        {
            // PRECHAUFFER LE FOUR
            // Prend le moule
            // mettre dans le four
            // activer le timer et fermer

        }


    }

    $Fondant = new Gateau("fondant au chocolat");
    echo $Fondant->getNom() . "<br/>";


    $Fondant->setNom("fondant au chocolat coeur caramel");
    echo $Fondant->getNom() . "<br/>";

?>