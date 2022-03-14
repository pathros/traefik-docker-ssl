<?php

$array = [
    "name" => "John",
    "lastname" => "Doe",
    "age" => empty($_GET["age"]) ? 41 : intval($_GET["age"]),
    "servers" => [
        "server_ip" => $_SERVER["SERVER_ADDR"],
        "remote_ip" => $_SERVER["REMOTE_ADDR"]
    ],
    "action" => "If you're reading this, you're on the good track!"
];

header('Content-Type: application/json');

echo json_encode($array, true);
