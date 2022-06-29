<?php
//stabilisco i permessi di lettura del file (anyone)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
// definisco il metodo consentito per la request
header("Access-Control-Allow-Headers: *");
require("config.php");

$query = "SELECT * FROM users WHERE username = 'sara'";
$result = mysqli_query($db,$query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        echo json_encode(["login" => true, "message" => "trovato risultato in db con nome:..." . $row["username"]]);
    } else {
        echo json_encode(["login" => false, "message" => "credenziali sbagliate"]);
    }

$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata, true);
    $username = $request->username;
    $password = $request->password;
  

    if(empty($username) && empty($password)) die();
//SELECT * FROM `users` WHERE `username` = 'sara'
//"INSERT INTO users (name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
    $query = "SELECT * FROM users WHERE username = 'sara'";

    if(mysqli_query($db,$query)){
        echo json_encode(["login" => true, "message" => "trovato risultato in db con nome: " . $username]);
    } else {
        echo json_encode(["login" => false, "message" => "credenziali sbagliate"]);
    }

} else {
    echo json_encode("non sono arrivati i dati che hai inviato");
}



?>

