<?php
session_start();

if (isset($_POST['name']) && isset($_POST['regNumber']) && isset($_POST['science']) && isset($_POST['technology']) && isset($_POST['english']) && isset($_POST['math'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['regNumber'] = $_POST['regNumber'];
    $_SESSION['science'] = $_POST['science'];
    $_SESSION['technology'] = $_POST['technology'];
    $_SESSION['english'] = $_POST['english'];
    $_SESSION['math'] = $_POST['math'];
    header("location:result.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #74ebd5, #9face6);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      width: 90%;
      max-width: 500px;
    }
    .form-container h2 {
      font-size: 1.8em;
      margin-bottom: 15px;
      color: #333;
      text-align: center;
      text-transform: uppercase;
      border-bottom: 2px solid #f0f0f0;
      padding-bottom: 10px;
    }
    .form-row {
      display: flex;
      justify-content: space-between;
      gap: 15px;
    }
    .form-group {
      flex: 1;
      margin-bottom: 15px;
      text-align: left;
    }
    label {
      display: block;
      font-size: 0.9em;
      color: #333;
      font-weight: bold;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 1em;
      background-color: #f9f9f9;
      transition: border 0.3s ease, box-shadow 0.3s ease;
    }
    input[type="text"]:focus,
    input[type="number"]:focus {
      border-color: #74ebd5;
      box-shadow: 0 0 6px rgba(116, 235, 213, 0.4);
      outline: none;
    }
    .submit-btn {
      display: inline-block;
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #74ebd5, #9face6);
      color: #ffffff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 1em;
      font-weight: bold;
      text-transform: uppercase;
      transition: background 0.3s ease, transform 0.3s ease;
    }
    .submit-btn:hover {
      background: linear-gradient(135deg, #9face6, #74ebd5);
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Student Registration</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="regNumber">Registration Number</label>
        <input type="number" id="regNumber" name="regNumber" required max="999999">
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="science">Science</label>
          <input type="number" id="science" name="science" required max="100">
        </div>
        <div class="form-group">
          <label for="technology">Technology</label>
          <input type="number" id="technology" name="technology" required max="100">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="english">English</label>
          <input type="number" id="english" name="english" required max="100">
        </div>
        <div class="form-group">
          <label for="math">Math</label>
          <input type="number" id="math" name="math" required max="100">
        </div>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>

</body>
</html>
