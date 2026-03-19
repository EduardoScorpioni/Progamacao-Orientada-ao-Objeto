<?php
//crie a classa alauno com os atributos, ra, nome, p1, p2, e media.
//crie os metodos MostrarAtributos() e CalcularMedia();

    class Aluno{
        public $ra;
        public $nome;
        public $p1;
        public $p2;
        public $media;
        public $situacao;


        public function MostrarAtributos(){
            echo "RA: ".$this->ra."<hr> Nome: ".$this->nome." <hr>nota P1: ".$this->p1."<hr> nota P2: ".$this->p2."<hr> Media do Aluno ".$this->media." Situação:".$this->situacao;
        }
        public function CalcularMedia(){
            $this->media = ( $this->p1 + $this->p2 ) / 2;
            if ($this->media >=6)
                $this->situacao = "aprovado";
            else
                $this->situacao = "reprovado";

        }
    }
$c1 = new Aluno(); //intancia o o objeto
$c1->ra = 15961;
$c1->nome ="Eduardo";
$c1->p1 = 6;
$c1->p2 = 10;
$c1->media ;
$c1->CalcularMedia();
$c1->MostrarAtributos();




?>