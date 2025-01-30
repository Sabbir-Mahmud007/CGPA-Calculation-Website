<!DOCTYPE html>
<html>
<head>
    <title>Enter Marks</title>
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
        form {
            display: flex;
            flex-direction: column;
        }
        input, button {
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Enter Marks</h1>
        <form action="calculate_cgpa.php" method="POST">
            <input type="number" name="marks1" placeholder="Subject 1 Marks" required>
            <input type="number" name="marks2" placeholder="Subject 2 Marks" required>
            <input type="number" name="marks3" placeholder="Subject 3 Marks" required>
            <input type="number" name="marks4" placeholder="Subject 4 Marks" required>
            <input type="number" name="marks5" placeholder="Subject 5 Marks" required>
            <button type="submit">Calculate CGPA</button>
        </form>
    </div>
</body>
</html>
