<?php

    class turma{
        private $id;
        private $idCurso;
        private $idDocente;
        private $codigoTurma;
    
    
        public function __construct($id, $idCurso,$idDocente,$codigoTurma)
        {
                $this->id = $id;
                $this->idCurso = $idCurso;
                $this->idDocente = $idDocente;
                $this->codigoTurma = $codigoTurma;
        

        }

        public function getId(){
             return $this->id;
        }
        public function idCurso(){
             return $this->idCurso;
        }
        public function idDocente(){
             return $this->idDocente;
        }
        public function codigoTurma(){
             return $this->codigoTurma;
        }

    }
        
        ?>