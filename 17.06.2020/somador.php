<?php
    $_numero1 = $_REQUEST["numero1"];
    $_numero2 = $_REQUEST["numero2"];

    $soma = $_numero1 + $_numero2;

    $retornoJson = array();
    $retornoJson["operacao"] = "soma";
    $retornoJson["numero1"] = $_numero1;
    $retornoJson["numero2"] = $_numero2;
    $retornoJson["resultado"] = $soma;

    echo json_encode($retornoJson);
?>
