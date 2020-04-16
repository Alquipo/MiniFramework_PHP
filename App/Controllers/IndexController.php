<?php
    namespace App\Controllers;
    
    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Produto;

    class IndexController extends Action{

        public function index(){
           // $this->view->dados = array('Sofa', 'cadeira', 'cama');

           //instancia da conexao
            $conn = Connection::getDb();

            //instancia o modelo
            $produto = new Produto($conn);

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index', 'layout2');

        }

        public function sobreNos(){
            //$this->view->dados = array('notebook', 'smartphone', 'celular');
            $this->render('sobreNos', 'layout1');

        }

        

    }



?>