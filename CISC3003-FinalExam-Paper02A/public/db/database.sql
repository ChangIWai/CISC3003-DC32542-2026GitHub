-- A.09: create a database and table
CREATE DATABASE IF NOT EXISTS cisc3003_exam_a;
USE cisc3003_exam_a;

CREATE TABLE IF NOT EXISTS site_reports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(100) NOT NULL,
    site_location VARCHAR(100) NOT NULL,
    description TEXT,
    priority_level VARCHAR(20),
    services_required SET('Surveying', 'Excavation', 'Structural'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- A.10: use an SQL INSERT INTO statement (Initial record)
INSERT INTO site_reports (project_name, site_location, description, priority_level) 
VALUES ('Main Bridge Alpha', 'Macau Tower District', 'Initial site inspection for foundation stability.', 'High');