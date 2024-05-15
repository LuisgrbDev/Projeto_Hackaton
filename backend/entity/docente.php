<?php

    class docente{
        private $id;
        private $nomeDocente;
    
    
        public function __construct($id, $nomeDocente)
        {
                $this->id = $id;
                $this->nomeDocente = $nomeDocente;
        

        }

        public function getId(){
             return $this->id;
        }
        public function getnomeDocente(){
             return $this->nomeDocente;
        }

    }
        
        ?>