<?php
$mysqli = require __DIR__ . "/connect.php";

$sql = sprintf("SELECT * FROM users WHERE email = '%s'",
               $mysqli->real_escape_string($_GET["email"]));

$result = $mysqli->query($sql);

// 如果沒找到，代表可以使用 (available: true)
$is_available = ($result->num_rows === 0);

header("Content-Type: application/json");
echo json_encode(["available" => $is_available]);