<?
    $numero1 = $_REQUEST["numero1"];
    $numero2 = $_REQUEST["numero2"];
    $msg;

    if($numero1 > $numero2){
        $msg = "$numero1 é maior que o $numero2";
    }else if($numero1 == $numero2 ){
        $msg = "$numero1 é igual ao $numero2";
    }else{
        $msg = "$numero2 é maior que o $numero1";
    }

    $json["maior"] = $msg;

    echo json_encode($json);
?>