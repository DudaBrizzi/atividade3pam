<?
    $numero1 = $_REQUEST["numero1"];
    $numero2 = $_REQUEST["numero2"];
    $numero3 = $_REQUEST["numero3"];
    $resultado;

    if($numero1 == "" || $numero2 == "" & $numero3 == ""){
        $resultado = "parametro vazio";
    }else{
        $resultado = $numero1 + $numero2 + $numero3;
    }


    $json["soma"] = $resultado;

    echo json_encode($json);
?>