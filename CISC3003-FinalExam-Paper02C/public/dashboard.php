<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard - Scenario C</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Welcome back, <?= htmlspecialchars($_SESSION["user_name"]) ?>!</h1>
    <div style="background: #333; padding: 20px; border-radius: 8px; color: #fff;">
        <h3>Your Account Information:</h3>
        <p><strong>User ID:</strong> <?= $_SESSION["user_id"] ?></p>
        <p><strong>Member Since:</strong> <?= $_SESSION["created_at"] ?></p>
        <p>You have successfully accessed the member-only area.</p>
    </div>
    
    <br>
    <a href="logout.php" style="color: #ff5555;">Logout</a>

    <footer style="margin-top: 50px; border-top: 1px solid #ccc;">
        <p>CISC3003 Web Programming: CHANG I WAI + DC325420 + 2026</p>
    </footer>
</body>
</html>