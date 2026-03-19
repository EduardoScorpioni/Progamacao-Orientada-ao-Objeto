<?php
//crie a classe Produto com codigo, nome, preçoUnitario, quantidade e total
// crie os metodos mostraratributos()
//AplicarAumento(), por meio de uma porcentagem que será
//um parâmetro
//CalcularTotal();

    class Produto{
        public $codigo;
        public $nome;
        public $precoUnitario;
        public $qtd;
        public $total;
        public $aumento;
        public $valorFinal;

        public function MostrarAtributos(){
             echo "Codigo: ".$this->codigo."<hr> Nome: ".$this->nome." <hr>Preço Unitario: ".$this->p1."<hr> Quantidade: ".$this->qtd."<hr> Total ".$this->total." Aumento:".$this->ValorFinal;
        
        }
        public function AplicarAumento($aumento){
            $this->ValorFinal = $this->precoUnitario + ($this->precoUnitario * $this->aumento / 100);

        }
        public function CalcularTotal(){

        }

    }

$c1 = new Produto(); //intancia o o objeto
$c1->codigo = 15961;
$c1->nome ="Pinto DE borracha";
$c1->precoUnitario = 100;
$c1->qtd = 10;
$c1->total;
$c1->ValoFinal;
$c1->Aumento = 20 ;
$c1->CalcularMedia();
$c1->MostrarAtributos(); 
    
?>