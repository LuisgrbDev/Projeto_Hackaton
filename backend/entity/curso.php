<?php

    class Curso{
        private $id;
        private $nome_curso;
        private $siglaCurso;
    
        public function __construct($id, $nome_curso, $siglaCurso)
        {
                $this->id = $id;
                $this->nome_curso = $nome_curso;
                $this->siglaCurso = $siglaCurso;
    

        }

        public function getId(){
             return $this->id;
        }
        public function getnome_curso(){
             return $this->nome_curso;
        }
        public function getsiglaCurso(){
             return $this->siglaCurso;
        }

    }
        
        ?>