

<?php
//Crie uma classe funcionario (codigo, nome, salario)
//e o metodo mostrarAtributos()
//crie um vetor de 2 indices e insira um objeto difrente em casa posição
//depois apresente com foreach
    class Funcionario{ 
        public $codigo;
        public $nome;
        public $salario;

        public function mostrarAtributos(){
            echo "Codigo: ".$this->codigo."<br>";
            echo "Nome: ".$this->nome."<br>";
            echo "Salario: ".$this->salario."<br><br>";
        }
    }

    $f1 = new Funcionario();$f1->codigo = 21;
    $f1->nome = "Cleber";$f1->salario = 25000;
    $f2 = new Funcionario();$f2->codigo = 22;
    $f2->nome = "Jeba";$f2->salario = 73000;
    $vetP = array($f1, $f2);foreach($vetP as $p)$p->mostrarAtributos();