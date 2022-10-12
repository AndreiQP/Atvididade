<?php
    #Arquivo com a declaração da classe curso

    class Curso {

        private $id_curso;
        private $nome;

        public function __construct($id, $nome){
            $this->id_curso = $id;
            $this->nome = $nome;
        }

        /**
         * Get the value of idCurso
         */ 
        public function getIdCurso()
        {
                return $this->id_curso;
        }
        /**
         * Set the value of idCurso
         *
         * @return  self
         */ 
        public function setIdCurso($id_curso)
        {
                $this->id_curso = $id_curso;

                return $this;
        }
        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }
    }


?>