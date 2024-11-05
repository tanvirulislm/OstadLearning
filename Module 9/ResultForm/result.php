<?php
session_start();

$studentName = $_SESSION['name'];
$regNumber = $_SESSION['regNumber'];
$science = $_SESSION['science'];
$technology = $_SESSION['technology'];
$english = $_SESSION['english'];
$math = $_SESSION['math'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submission Result</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #74ebd5, #acb6e5);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .result-container {
      background: #ffffff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      width: 400px;
      max-width: 90%;
      text-align: center;
      transition: transform 0.3s;
    }
    .result-container:hover {
      transform: scale(1.05);
    }
    .result-container h2 {
      color: #4A4A4A;
      font-size: 1.8em;
      margin-bottom: 20px;
      border-bottom: 3px solid #f0f0f0;
      padding-bottom: 10px;
    }
    .result-item {
      display: flex;
      justify-content: space-between;
      font-size: 16px;
      color: #5a5a5a;
      padding: 12px 0;
      border-bottom: 1px solid #eaeaea;
    }
    .result-item:last-child {
      border-bottom: none;
    }
    .label {
      font-weight: bold;
      color: #333;
    }
    .value {
      text-align: right;
      color: #333;
      transition: color 0.3s;
    }
    .value:hover {
      color: #4CAF50;
    }
    .total-score {
      font-size: 20px;
      font-weight: bold;
      color: #4CAF50;
      margin-top: 20px;
      padding-top: 20px;
      border-top: 2px solid #f0f0f0;
    }
    .button-container {
      margin-top: 20px;
    }
    .button-container a {
      background-color: #4CAF50;
      color: #ffffff;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 20px;
      transition: background-color 0.3s;
      font-size: 16px;
    }
    .button-container a:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <div class="result-container">
    <h2>Submission Result</h2>
    <div class="result-item">
      <span class="label">Name:</span>
      <span class="value"><?php echo $studentName ?></span>
    </div>
    <div class="result-item">
      <span class="label">Registration Number:</span>
      <span class="value"><?php echo $regNumber ?></span>
    </div>
    <div class="result-item">
      <span class="label">Science:</span>
      <span class="value"><?php echo $science ?></span>
    </div>
    <div class="result-item">
      <span class="label">Technology:</span>
      <span class="value"><?php echo $technology ?></span>
    </div>
    <div class="result-item">
      <span class="label">English:</span>
      <span class="value"><?php echo $english ?></span>
    </div>
    <div class="result-item">
      <span class="label">Math:</span>
      <span class="value"><?php echo $math ?></span>
    </div>
    <div class="total-score">
      Total Score: <?php echo $science + $technology + $english + $math ?>
    </div>
    <div class="button-container">
      <a href="new.php">Make a New Result</a>
    </div>
  </div>
</body>
</html>
