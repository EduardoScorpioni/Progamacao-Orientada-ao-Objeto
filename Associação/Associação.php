<?php
    require_once "Fabricante.php";
    require_once "Produto.php";

    $produto = new produto ("pinto","69","190.83","intelbras");

    $fabricante = new fabricante ("PORNHUB","FATEC","1232123");

    <?php
require_once "Fabricante.php";
require_once "Produto.php";

// cria fabricante
$fabricante = new Fabricante("Intelbras", "FATEC", "1232123");

// cria produto passando o OBJETO fabricante
$produto = new Produto("Câmera", 69, 190.83, $fabricante);

echo "<pre>";
var_dump($produto);
echo "</pre>";