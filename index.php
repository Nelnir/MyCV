<?php
require_once 'functions.php';
$info = get_personal_info();
//$personal_info_data = $info->fetch(PDO::FETCH_ASSOC);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Marcin Dzieciątkowski</title>
</head>
<body>
    <h1><?php echo htmlspecialchars($info['first_name']) . " " . htmlspecialchars($info['last_name']); ?></h1>
    <p>
        [Phone Number] <br>
        [Email Address] <br>
        [LinkedIn Profile URL (optional)]
    </p>
    
    <h2>Professional Summary</h2>
    <div class="dashes"></div>
    <p>
        Highly-motivated [Job Title] with [Number] years of experience in [Industry]. Proven track record of [Key Achievement or Skill]. Seeking a challenging [Desired Job Title] position at [Company Name] to contribute to its growth and success.
    </p>

    <h2>Work Experience</h2>
    <div class="dashes"></div>
    <h3>[Job Title 1], [Company Name 1]</h3>
    <p>[Dates of Employment, e.g., Jan 2018 - Present]</p>
    <ul>
        <li>[Responsibility/Achievement 1]</li>
        <li>[Responsibility/Achievement 2]</li>
        <li>[Responsibility/Achievement 3]</li>
    </ul>

    <h3>[Job Title 2], [Company Name 2]</h3>
    <p>[Dates of Employment, e.g., Jun 2016 - Dec 2017]</p>
    <ul>
        <li>[Responsibility/Achievement 1]</li>
        <li>[Responsibility/Achievement 2]</li>
        <li>[Responsibility/Achievement 3]</li>
    </ul>
    <h2>Education</h2>
    <div class="dashes"></div>
    <h3>[Degree/Certificate], [Major/Field of Study]</h3>
    <p>[Institution Name], [Year of Completion]</p>

    <h2>Skills</h2>
    <div class="dashes"></div>
    <ul>
        <li>[Skill 1]</li>
        <li>[Skill 2]</li>
        <li>[Skill 3]</li>
        <li>[Skill 4]</li>
    </ul>

    <h2>Achievements</h2>
    <div class="dashes"></div>
    <ul>
        <li>[Achievement 1]</li>
        <li>[Achievement 2]</li>
        <li>[Achievement 3]</li>
    </ul>
</body>
</html>