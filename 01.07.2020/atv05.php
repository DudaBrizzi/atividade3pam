<?php

    $numero = $_REQUEST["numero"];
    $msg;
    if($numero > 0){
        $msg = "seu número é MAIOR que zero";
    }else if($numero == ""){
        $msg = "parâmetro vazio";
    }else{
        $msg = "seu número é MENOR que zero";
    }

    $json["postivoNegativo"] = $msg;

    echo json_encode($json);
    ?>