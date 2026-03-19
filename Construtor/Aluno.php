<?php


    class Aluno{
        Private $ra;
        Private $nome;
        
    public static $contador = 1571432612000;

    private function __construct($nome) {
        self::$contador++;
        $this ->ra = self::$contador;
        $this ->nome = $nome;

    }

    public function setRa($ra) {
        $this->ra = $ra;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getRa() {
        return $this->ra;
    }

    public function getNome() {
        return $this->nome;
    }

    public static function getTotalAlunos(){
        
        return self::$contador - 157143261200;
    }

    public function MostrarTudo(){
        echo "Nome".$this->getNome()."<br>";
        echo "RA".$this->getRa()."<br>";
        echo "QTD".$this->getTotalAlunos()."<br>";
    }

    


      

    }

$e1 = new Aluno("edu");
$e1 ->MostrarTudo;

$e2 = new Estudante("igor");
$e2 ->MostrarTudo;

$e3 = new Estudante("TAO");
$e3 ->MostrarTudo;

?>