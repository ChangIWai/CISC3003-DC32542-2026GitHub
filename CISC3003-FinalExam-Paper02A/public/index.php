<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scenario A: Site Report Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Scenario A - Student Information Form</h1>
    
    <form action="php/process.php" method="post">
        
        <label for="project_name">Ful Name:</label>
        <input type="text" id="project_name" name="project_name" required>

        <label for="site_location">Email:</label>
        <input type="text" id="site_location" name="site_location" required>

        <label for="site_location">Age:</label>
        <input type="text" id="site_location" name="site_location" required>

        <label for="description">Self Introduction:</label>
        <textarea id="description" name="description" rows="4"></textarea>

        <label for="priority">Programme：</label>
        <select id="priority" name="priority">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select>

        <fieldset>
            <legend>Study Mode:</legend>
            <input type="checkbox" id="service1" name="services[]" value="Surveying">
            <label for="service1">Full time</label><br>
            <input type="checkbox" id="service2" name="services[]" value="Excavation">
            <label for="service2">Part time</label><br>

        </fieldset>

        <button type="submit">Submit Report</button>
    </form>

    <footer style="margin-top: 50px; border-top: 1px solid #ccc;">
        <p>CISC3003 Web Programming: [CHANG I WAI] + [DC325420] + 2026</p>
    </footer>
</body>
</html>