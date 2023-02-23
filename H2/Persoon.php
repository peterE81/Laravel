<?php
    class Persoon
    {
        public $naam;
        private $leeftijd;
        protected $geslacht;
        public $isStudent;
        public $gemiddeldCijfer;

        function __construct(string $naam, int $leeftijd, string $geslacht)
        {
            $this->naam = $naam;
            $this->leeftijd = $leeftijd;
            $this->geslacht = $geslacht;
            echo "\n Nieuw persoon-object aangemaakt";
            echo "\n De property naam is " . $this->naam;
        }
        function __destruct()
        {
            echo"\n het object $this->naam wordt verwijderd";
        }

        public function setGeslacht(string $geslacht)
        {
            $this->geslacht=$geslacht;
        }

        public function getGeslacht()
        {
            return $this->geslacht;
        }

        public function setLeeftijd(int $leeftijd)
        {
            $this->leeftijd=$leeftijd;
        }

        public function getLeeftijd()
        {
            return $this->leeftijd;
        }

        public function setNaam(string $naam)
        {
            $this->naam=$naam;
            echo"Naam veranderd naar $this->naam";
        }

        public function getNaam()
        {
            return $this->naam;
        }

        public function setIsStudent(bool $isStudent)
        {
            $this->isStudent=$isStudent;
        }

        public function getIsStudent()
        {
            return $this->isStudent;
        }

        public function setGemiddeldCijfer(float $gemCijfer)
        {
            $this->gemiddeldCijfer=$gemCijfer;
        }

        public function getGemiddeldCijfer()
        {
            return $this->gemiddeldCijfer;
        }

        
    }





?>