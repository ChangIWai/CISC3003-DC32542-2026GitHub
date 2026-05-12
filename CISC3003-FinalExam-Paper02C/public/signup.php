<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Signup - Scenario C</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="js/validation.js" defer></script>
</head>
<body>
    <h1>Create New Account</h1>
    <p>Please fill in the form below to register.</p>

    <form action="php/process-signup.php" method="POST" id="signup" novalidate>
        <div>
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">
        </div>

        <div>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="email@example.com">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Min. 8 characters">
        </div>

        <button type="submit">Sign Up</button>
    </form>

    <p>Already have an account? <a href="login.php">Log in here</a></p>

    <footer style="margin-top: 50px; border-top: 1px solid #ccc; padding-top: 10px;">
        <p>CISC3003 Web Programming: CHANG I WAI + DC325420 + 2026</p>
    </footer>
</body>
</html>