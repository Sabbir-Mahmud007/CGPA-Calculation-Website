<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
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
        p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Details</h1>
        <?php
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'student_data');

        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Query to get the most recent student record
        $sql = "SELECT * FROM students ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
                echo "<p><strong>ID:</strong> " . $row['id'] . "</p>";
                echo "<p><strong>Age:</strong> " . $row['age'] . "</p>";
                echo "<p><strong>Department:</strong> " . $row['department'] . "</p>";
                echo "<p><strong>Section:</strong> " . $row['section'] . "</p>";
            }
        } else {
            echo "<p>No data found.</p>";
        }

        // Close the database connection
        $conn->close();
        ?>

        <!-- Link to the next page -->
        <a href="enter_marks.php">Next</a>
    </div>
</body>
</html>
