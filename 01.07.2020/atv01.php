<?
        $_numero1 = $_REQUEST["numero1"];
        $_numero2 = $_REQUEST["numero2"];
        $resultado;
    
        if($_numero1 == "" || $_numero2 == ""){
                $resultado = "Iforme o parâmetro";
        }else{
                $resultado = $_numero1 - $_numero2;
        }

        $json["subtracao"] = $resultado;
    
        echo json_encode($Json);
?>