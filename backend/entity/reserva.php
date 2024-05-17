<?php

    class reserva{
        private $id;
        private $idSala;
        private $idTurma;
        private $dataInicio;
        private $dataFim;
        private $horaInicio;
        private $horaFim;
    
    
        public function __construct($id,$idSala, $idTurma ,$dataInicio,$dataFim,$horaInicio,$horaFim)
        {
                $this->id = $id;
                $this->idSala = $idSala;
                $this->idTurma = $idTurma;
                $this->dataInicio = $dataInicio;
                $this->dataFim = $dataFim;
                $this->horaInicio = $horaInicio;
                $this->horaFim = $horaFim;
        

        }

        public function getId(){
             return $this->id;
        }
        public function idSala(){
             return $this->idSala;
        }
        public function idTurma(){
             return $this->idTurma;
        }
        public function getDatainicio(){
             return $this->dataInicio;
        }
        public function getDataFim(){
             return $this->dataFim;
        }
        public function getHorainicio(){
             return $this->horaInicio;
        }
        public function getHoraFim(){
             return $this->horaFim;
        }

        public function __toString()
        {
          return "$this->id
                    $this->idSala
                    $this->idTurma
                    $this->dataInicio
                    $this->dataFim
                    $this->horaInicio
                    $this->horaFim";
        }

    }
        
        ?>