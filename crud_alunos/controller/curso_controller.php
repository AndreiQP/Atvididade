<?php
#Classe de controller para Curso

include_once("dao/curso_dao.php");

    class CursoController{

        public function listar() {

            $cursoDAO = new CursoDao();
            return $cursoDAO->list();

        }

    }

?>