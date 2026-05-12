<?php
session_start();
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/php/connect.php";
    
    $sql = sprintf("SELECT * FROM users WHERE email = '%s'",
        $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    
    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {
            session_regenerate_id();
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_name"] = $user["username"];
            $_SESSION["created_at"] = $user["created_at"];
            header("Location: dashboard.php");
            exit;
        }
    }
    $is_invalid = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Scenario C</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>User Login</h1>
    <?php if ($is_invalid): ?>
        <p style="color: #ff5555;">Login failed: Invalid email or password.</p>
    <?php endif; ?>

    <form method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Log In</button>
    </form>
    <p>Don't have an account? <a href="signup.php">Register now</a></p>

    <footer style="margin-top: 50px; border-top: 1px solid #ccc;">
        <p>CISC3003 Web Programming: CHANG I WAI + DC325420 + 2026</p>
    </footer>
</body>
</html>