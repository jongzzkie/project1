<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    color: #333;
}

ul {
    list-style-type: none;
    padding: 0;
}

footer {
    text-align: center;
    margin-top: 20px;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Curriculum Vitae</h1>

        <h2>Personal Information</h2>
        <p><strong>Name:</strong> Your Name</p>
        <p><strong>Address:</strong> Your Address</p>
        <p><strong>Email:</strong> your.email@example.com</p>
        <p><strong>Phone:</strong> (123) 456-7890</p>

        <h2>Education</h2>
        <ul>
            <li>Bachelor of Science in Computer Science, University Name, Year</li>
            <li>High School Diploma, School Name, Year</li>
        </ul>

        <h2>Work Experience</h2>
        <ul>
            <li>Job Title at Company Name (Year - Year)</li>
            <li>Job Title at Company Name (Year - Year)</li>
        </ul>

        <h2>Skills</h2>
        <ul>
            <li>Programming Languages: PHP, JavaScript, HTML, CSS</li>
            <li>Frameworks: Laravel, Bootstrap</li>
            <li>Database Management: MySQL, PostgreSQL</li>
        </ul>

        <h2>Projects</h2>
        <ul>
            <li>Project Title - Brief description of the project.</li>
            <li>Project Title - Brief description of the project.</li>
        </ul>

        <h2>References</h2>
        <p>Available upon request.</p>

        <a href="index.php">Back to Main Page</a>
    </div>
    <footer>
        <p>Created by Your Name | Date: <?= date('Y-m-d') ?></p>
    </footer>
</body>
</html>
