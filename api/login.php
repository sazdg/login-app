<?php
require './config.php';
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
// definisco il formato della risposta (json)
header("Content-Type: application/json; charset=UTF-8");
// definisco il metodo consentito per la request
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
echo "ciao";
$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata, true);
    $username = $request->username;
    $password = $request->password;
  

    if(empty($username) && empty($password)) die();

        $query = "SELECT username, password FROM users WHERE username = " . $username;
        if(mysqli_query($db,$sql)){
            http_response_code(200);
            echo json_encode(["login" => true, "message" => "ricevuti! " . $username]);
        } else {
            echo json_encode(["login" => false, "message" => "non andato a buon fine"]);
        }



?>
}
