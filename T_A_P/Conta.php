<?php
class Conta{
    //declaração de atributos
    public  $numero;
    public  $titular;
    public  $saldo;
   
     //declaração de metodos
     public function MostrarDados(){
        echo "<br> Numero: ".$this->numero." titular: ".$this->titular." Saldo: ".$this->saldo, "<br>";
     }
     public function Sacar($valorSaque){
        //$this->saldo = $this-> saldo - $valorSaque;
        $this->saldo -= $valorSaque;   
     }
     
     public function Transferir($valorDeTransferencia,Conta $contaDestino){

         //c1
         $this->saldo -= $valorDeTransferencia;
         // c2
         $contaDestino->saldo += $valorDeTransferencia;


     }
     public function Depositar(){

     }

}
$c1 = new Conta(); //intancia o o objeto
$c1->numero = 10;
$c1->titular ="fatec";
$c1->saldo = 100;
$c1->MostrarDados();
$c1->Sacar(15);
$c1->MostrarDados();

$c2 = new Conta();
$c1->Transferir(20,$c2);
$c2->MostrarDados();
$c2->Sacar(10);
$c2->MostrarDados();


?>