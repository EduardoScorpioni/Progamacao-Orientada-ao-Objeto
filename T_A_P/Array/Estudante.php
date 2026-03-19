<?php

class Aluno {
    private $ra;
    private $nome;
    private $p1;
    private $p2;
    private $media;
    private $situacao;

   
    public function setRa($ra) {
        $this->ra = $ra;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setP1($p1) {
        $this->p1 = $p1;
    }

    public function setP2($p2) {
        $this->p2 = $p2;
    }

    public function getRa() {
        return $this->ra;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMedia() {
        return $this->media;
    }

    public function getSituacao() {
        return $this->situacao;
    }


    public function calcularMedia() {
        $this->media = ($this->p1 + $this->p2) / 2;

        if ($this->media >= 6) {
            $this->situacao = "Aprovado";
        } else {
            $this->situacao = "Reprovado";
        }
    }

    public function mostrarAtributos() {
        echo "RA: " . $this->ra . "<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Nota P1: " . $this->p1 . "<br>";
        echo "Nota P2: " . $this->p2 . "<br>";
        echo "Média: " . $this->media . "<br>";
        echo "Situação: " . $this->situacao . "<br>";
    }
}

?>