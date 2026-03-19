<?php
    class Conta
    {
        private $numero;
        private $titular;
        private $saldo;
        public function setNumero($numero)
        {
            $this->numero = $numero;
        }
        public function getNumero()
        {
            return $this->numero = $numero;
        }
        public function setTitutar($titular)
        {
            $this->titular;
        }
        public function getTitular()
        {
            return $this->$titular;
        }
        public function setSaldo($saldo)
        {
            $this->$titular;
        }
        public function getSaldo()
        {
            return $this->$saldo;
        }
    }
$c1 = new Conta();
$c1->setNumero(1);
echo "numero".$c1->getNumero();
if ($c1->getSaldo() > 50)
    echo"numero".$c1->getNumero()."nome: ".$c1->getTitular();
$total = $c1->getSaldo() * 2;

//criar a clase produto encapsulada (codigo, nome, preco)
//crie um vetor de 2 elementos