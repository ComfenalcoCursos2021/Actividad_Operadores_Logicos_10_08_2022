<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    // $_DATA = ($_SERVER["REQUEST_METHOD"] == "POST") 
    //         ? json_decode(file_get_contents("php://input"), true)
    //         : (array) [];

    print_r(json_encode((object) [
        "Mensaje" => (string) "Actividad de operador de logicos",
        "Servidor" => $_SERVER["HTTP_HOST"],
        "Respuesta" => "Miguel"
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE ));
?>