<?php

    $numero = $_REQUEST["numero"];
    $msg;

    if($numero % 2 == 1){
        $msg = "número ÌMPAR";
    }else if($numero == ""){
        $msg = "parâmetro vazio";
    }else{
        $msg = "número PAR";
    }

    $json["parImpar"] = $msg;

    echo json_encode($json);
?>