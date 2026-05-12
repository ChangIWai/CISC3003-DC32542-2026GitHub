<?php
// A.05: process the submitted form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/connect.php";

    // A.06: validate the form data using filter functions
    $project_name = filter_input(INPUT_POST, 'project_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $site_location = filter_input(INPUT_POST, 'site_location', FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
    $priority = $_POST['priority'];
    
    // Handle checkboxes (converting array to comma-separated string)
    $services = isset($_POST['services']) ? implode(", ", $_POST['services']) : "";

    // A.07 & A.08: Avoid SQL injection using prepared statements
    $sql = "INSERT INTO site_reports (project_name, site_location, description, priority_level, services_required) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql)) {
        die("SQL error: " . $mysqli->error);
    }

    // Bind parameters to the statement
    $stmt->bind_param("sssss", 
        $project_name, 
        $site_location, 
        $description, 
        $priority, 
        $services
    );

    if ($stmt->execute()) {
        echo "<h1>Success!</h1>";
        echo "<p>Record inserted successfully into the database.</p>";
        echo '<a href="../index.php">Back to Form</a>';
    } else {
        die("Error executing statement: " . $stmt->error);
    }

    echo '<footer style="margin-top: 50px; border-top: 1px solid #ccc;">';
    echo '<p>CISC3003 Web Programming: [CHANG I WAI] + [DC325420] + 2026</p>';
    echo '</footer>';
}
?>