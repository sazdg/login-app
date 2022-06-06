<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
// definisco il metodo consentito per la request
header("Access-Control-Allow-Methods: POST");

header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Headers: Content-Type");
//header("Access-Control-Allow-Headers: Accept");
//header("Access-Control-Allow-Headers", "Access-Control-Allow-Headers, Origin, Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");
$restJson = file_get_contents("php://input");
$_POST = json_decode($restJson, true);
echo "ciao";

if(empty($_POST["username"]) && empty($_POST["password"])) die();

if ($_POST){
    http_response_code(200);
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo json_encode(["login" => true, "message" => "ricevuti! " . $username]);


} else {
    echo json_encode(["login" => false, "message" => "non andato a buon fine"]);
}

?>