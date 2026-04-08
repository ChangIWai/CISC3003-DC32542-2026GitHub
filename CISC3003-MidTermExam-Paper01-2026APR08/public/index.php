<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joey Chang I Wai - DC32542</title> 
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <h1>Join Us</h1>
                <div class="social-icons">
                    <a href="#">f</a>
                    <a href="#">G+</a>
                    <a href="#">in</a>
                </div>
                <span>Use your email to sign up</span>
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Create Password" required>
                <button type="submit" class="btn-main">REGISTER</button>
            </form>
        </div>

        <div class="form-container sign-in">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <h1>Log In</h1>
                <div class="social-icons">
                    <a href="#">f</a>
                    <a href="#">G+</a>
                    <a href="#">in</a>
                </div>
                <span>Use your account to sign in</span>
                <input type="email" name="login_email" placeholder="Email" required>
                <input type="password" name="login_password" placeholder="Password" required>
                <a href="#" class="forgot">Forgot Password??</a>
                <button type="submit" class="btn-main">SIGN IN</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hello, Again!</h1>
                    <img src="images/website_7376495.png" alt="user icon" width="150">
                    <p>Log in to stay connected with us</p>
                    <button class="hidden" id="login">SIGN IN</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome!</h1>
                    <img src="images/unsecure_10399884.png" alt="lock icon" width="150">
                    <p>Enter your details to start your journey</p>
                    <button class="hidden" id="register">SIGN UP</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer">
        CISC3003 Web Programming: DC32542 Joey Chang I Wai 2026
    </footer>

    <script src="js/script.js"></script>
</body>
</html>