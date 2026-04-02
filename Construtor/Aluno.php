<?php 

class Aluno {
    private $ra;
    private $nome;

    public static $contador = 1571432612000;

    public function __construct($nome) {
        self::$contador++;
        $this->ra = self::$contador;
        $this->nome = $nome;
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
        return self::$contador - 1571432612000;
    }

    public function MostrarTudo(){
        echo "Nome: ".$this->getNome()."<br>";
        echo "RA: ".$this->getRa()."<br>";
        echo "Total de alunos: ".self::getTotalAlunos()."<br><br>";
    }
}

// Instâncias
$e1 = new Aluno("Edu");
$e1->MostrarTudo();

$e2 = new Aluno("Igor");
$e2->MostrarTudo();

$e3 = new Aluno("Tao");
$e3->MostrarTudo();

?>  