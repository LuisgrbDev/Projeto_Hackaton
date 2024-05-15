<?php
    class sala{
        private $id;
        private $nomeSala;
        private $andar;
        private $capacidade;
        private $tipo;

        public function __construct($id, $nomeSala, $andar, $capacidade, $tipo)
        {
                $this->id = $id;
                $this->nomeSala = $nomeSala;
                $this->andar = $andar;
                $this->tipo = $tipo;

        }

        public function getId(){
             return $this->id;
        }

        public function getNomeSala(){
            return $this->nomeSala;
        }

        public function getAndar(){
            return $this->andar;
        }

        public function getCapacidade(){
            return $this->capacidade;
        }

        public function getTipo(){
            return $this->tipo;
        }

    }

?>