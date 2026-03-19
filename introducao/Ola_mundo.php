<?php
    echo "<h1>hello word </h1><br>";
    $PintoGrosso = 18;
    $CuLargo = 17;

    $Sexo = $PintoGrosso % $CuLargo;
    echo "<p1>Anal deu </p1>".$Sexo ;
    
    $media = 6;

    //exemplo de operador ternário
    $r = ($media >= 6) ? "Aprovado": "Reprovado";
    echo "<p>Ternário:".$r;

    if ($media >= 6)
        echo "<p>Aluno Aprovadoooo, vai dar a bunda!</p>";
    elseif($media == 0 ) 
    { 
        echo"<p>Esse aluno vai ter que dar a bunda 3 vezes pra passar</p>";
        echo"para sempre";
    }
        else
        echo"<p>Esse aluno vai ter que mamar pra passar</p>";

    

?>