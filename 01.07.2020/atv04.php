<?
    $numero1 = $_REQUEST["numero1"];
    $numero2 = $_REQUEST["numero2"];
    $resultado;

    if($numero2 == 0){
        $resultado = "Não é possivel uma divisão por 0"; 
    }
    else if($numero1 == "" || $numero2 == ""){
        $resultado = "Informe os parâmetros";
    }
    else{
        $resultado = $numero1 / $numero2;
    }

    $json["divisao"] = $resultado;

    echo json_encode(round($json));
?>