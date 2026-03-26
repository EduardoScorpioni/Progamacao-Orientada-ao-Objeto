    <?php

        class Produto{
            private $descricao;
            private $estoque;
            private $preco;
            private $fabricante;
           

            public function __construct ($descricao,$estoque,$preco,$fabricante){
                $this -> descricao = $descricao;
                 $this -> estoque = $estoque;
                  $this -> preco = $preco;
                   $this -> fabricante = $fabricante;
            }
            public function setDescri($descricao){
                $this -> descricao = $descricao;

            }
            public function setEstoque($estoque){
                $this -> estoque = $estoque;

            }
            public function setPreco($preco){
                $this -> preco = $preco;

            }
            public function setFabri($fabricante){
                $this -> fabricante = $fabricante;

            }

            public function getDescri(){
                return $this -> descricao;
            }
            public function getEstoque(){
                return $this -> estoque;
            }
            public function getPreco(){
                return $this -> preco;
            }
            public function getFabri(){
                return $this -> fabricante;
            }
        } 
        
