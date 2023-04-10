<?php
    $d1 = array ();

    $d1 [0][0] = "Roberto";
    $d1 [0][1] = "34";
    $d1 [0][2] = "M";
    $d1 [0][3] = "Casado";
    $d1 [0][4] = "Engenheiro";

    $d1 [1][0] = "Julia";
    $d1 [1][1] = "14";
    $d1 [1][2] = "F";
    $d1 [1][3] = "Solteira";
    $d1 [1][4] = "Estudante";

    $d1 [2][0] = "Paula";
    $d1 [2][1] = "65";
    $d1 [2][2] = "F";
    $d1 [2][3] = "Viúva";
    $d1 [2][4] = "Aposentada";

    $d1 [3][0] = "Leonardo";
    $d1 [3][1] = "23";
    $d1 [3][2] = "M";
    $d1 [3][3] = "Solteiro";
    $d1 [3][4] = "Farmacêutico";

    $d1 [4][0] = "Luiz Bonfim";
    $d1 [4][1] = "45";
    $d1 [4][2] = "M";
    $d1 [4][3] = "Divorciado";
    $d1 [4][4] = "Advogado";

    $d1 [5][0] = "Marcos";
    $d1 [5][1] = "78";
    $d1 [5][2] = "M";
    $d1 [5][3] = "Separado";
    $d1 [5][4] = "Aposentado";

    $d1 [6][0] = "Sophia";
    $d1 [6][1] = "19";
    $d1 [6][2] = "F";
    $d1 [6][3] = "Solteira";
    $d1 [6][4] = "Estudante";

    $d1 [7][0] = "Pedro";
    $d1 [7][1] = "25";
    $d1 [7][2] = "M";
    $d1 [7][3] = "Casado";
    $d1 [7][4] = "Programador";

    $d1 [8][0] = "Vanessa";
    $d1 [8][1] = "45";
    $d1 [8][2] = "F";
    $d1 [8][3] = "Divorciada";
    $d1 [8][4] = "Influencer";

    $d1 [9][0] = "Thaís";
    $d1 [9][1] = "37";
    $d1 [9][2] = "F";
    $d1 [9][3] = "Casada";
    $d1 [9][4] = "Engenheira";


    foreach ($d1 as $indice => $valor){
        foreach ($valor as $indice_1 => $valor_1){
            echo "[$indice] [$indice_1] $valor_1 <br/>";
        }

    }

?>