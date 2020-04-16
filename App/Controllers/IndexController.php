<?php
    namespace App\Controllers;
    
    use MF\Controller\Action;

    class IndexController extends Action{

        public function index(){
            $this->view->dados = array('Sofa', 'cadeira', 'cama');
            $this->render('index', 'layout2');

        }

        public function sobreNos(){
            $this->view->dados = array('notebook', 'smartphone', 'celular');
            $this->render('sobreNos', 'layout1');

        }

        

    }



?>