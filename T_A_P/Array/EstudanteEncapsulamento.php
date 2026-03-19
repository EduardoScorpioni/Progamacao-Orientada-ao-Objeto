<?php

class Estudante {
    private $nome;
    private $media;

  
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setMedia($media) {
        if ($media >= 0 && $media <= 10) {
            $this->media = $media;
        } else {
            echo "Erro: A média deve estar entre 0 e 10 <br>";
        }
    }

    
    public function getNome() {
        return strtoupper($this->nome); 
    }

    public function getMedia() {
        return $this->media;
    }

    
    public function MostrarAtributos() {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Média: " . $this->getMedia() . "<br>";
    }

    
    public function EstaAprovado() {
        return $this->media >= 6;
    }

   
    public function ExibirInformacoes() {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Média: " . $this->getMedia() . "<br>";
        echo "Status: ";

        if ($this->EstaAprovado()) {
            return true;
        } else {
           return false;
        }

        echo "<hr>";
    }
}


$e1 = new Estudante();
$e1->setNome("Eduardo");
$e1->setMedia(8);


$e2 = new Estudante();
$e2->setNome("Igor Burro");
$e2->setMedia(5);


$e1->ExibirInformacoes();
$e2->ExibirInformacoes();


?>