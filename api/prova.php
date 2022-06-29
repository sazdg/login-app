<?php

# http://localhost/login-app/build/api/prova.php

//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
// definisco il metodo consentito per la request
header("Access-Control-Allow-Headers: *");


$response = array("success" => true, "benvenuto" => "hello world");
echo json_encode($response);
?>
