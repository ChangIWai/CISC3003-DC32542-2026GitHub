<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>Scenario B - Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Contact Us (Scenario B)</h1>
    <p>Please fill out the form below to send us a message.</p>

    <form action="php/send_email.php" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Email</button>
    </form>

    <footer style="margin-top: 50px; border-top: 1px solid #ccc; padding-top: 10px;">
        <p>CISC3003 Web Programming: CHANG I WAI + DC325420 + 2026</p>
    </footer>
</body>
</html>