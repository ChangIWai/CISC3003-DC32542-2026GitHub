<?php
// C.02: Server-side validation
if (empty($_POST["name"])) { die("Name is required"); }
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { die("Valid email is required"); }
if (strlen($_POST["password"]) < 8) { die("Password must be at least 8 characters"); }

$mysqli = require __DIR__ . "/connect.php";

// C.03: Hash password and store
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) { die("SQL error: " . $mysqli->error); }

$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);

if ($stmt->execute()) {
    header("Location: ../login.php?signup=success");
    exit;
} else {
    if ($mysqli->errno === 1062) { die("Email already taken"); }
    else { die($mysqli->error); }
}