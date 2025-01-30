<!DOCTYPE html>
<html>
<head>
    <title>CGPA Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        .result {
            font-size: 18px;
            text-align: center;
            margin-top: 20px;
        }
        .cgpa {
            font-size: 24px;
            color: #4CAF50;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CGPA Result</h1>
        <div class="result">
            <?php
            if (isset($_GET['average_cgpa'])) {
                echo "<p>Your Average CGPA: <span class='cgpa'>" . number_format($_GET['average_cgpa'], 2) . "</span></p>";
            } else {
                echo "<p>No CGPA calculated.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
