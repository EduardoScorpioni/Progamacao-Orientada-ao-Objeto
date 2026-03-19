<?php

     class Funcionario{
            public $codigo;
            public $nome;
            public $precoUnitario;
            public $qtd;
            public $total;

            public function MostrarAtributos()
            {
                echo "Codigo: ".$this->codigo."<hr> Nome: ".$this->nome." <hr>Preço Unitario: ".$this->precoUnitario."<hr> Quantidade: ".$this->qtd."<hr> Total: ".$this->total."";
            
            }
            public function AplicarAumento($aumento){
                $this->precoUnitario = $this->precoUnitario + ($this->precoUnitario * $aumento / 100);

            }
            public function CalcularTotal(){
                $this->total = $this->qtd * $this->precoUnitario;
            }

        }

    $c1 = new funcionario();
    $c1->codigo = 15961;
    $c1->nome = 'teste';
    $c1->precoUnitario = 100;
    $c1->qtd = 10;
    $c1->MostrarAtributos();
    $c1->AplicarAumento(10);
    $c1->MostrarAtributos();
    $c1->MostrarAtributos();
        


?>