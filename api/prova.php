<?php
//http://localhost/login-app/build/api/prova.php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
// definisco il metodo consentito per la request
header("Access-Control-Allow-Headers: *");


$response = array("success" => true, "benvenuto" => "hello world");
echo json_encode($response);
?>
