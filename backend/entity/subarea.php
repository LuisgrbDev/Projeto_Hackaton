<?php

    class Subarea{
        private $id;
        private $nomeSubarea;
        private $corArea;
        private $idArea;
    
        public function __construct($id, $nomeSubarea, $corArea, $idArea)
        {
                $this->id = $id;
                $this->nomeSubarea = $nomeSubarea;
                $this->corArea = $corArea;
                $this->idArea = $idArea;

        }

        public function getId(){
             return $this->id;
        }
        public function getNomeSubarea(){
             return $this->nomeSubarea;
        }
        public function getCorArea(){
             return $this->corArea;
        }
        public function getIdArea(){
             return $this->idArea;
        }
    }
        
        ?>