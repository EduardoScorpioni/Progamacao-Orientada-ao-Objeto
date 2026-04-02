<?php
 require_once "Fabricante.php";
 require_once "Produto.php";


 $fabricante = new Fabricante("Intelbras", "FATEC", "1232123");


 $produto = new Produto("Câmera", 69, 190.83, $fabricante);

 echo "<pre>";
 var_dump($produto);
 echo "</pre>";