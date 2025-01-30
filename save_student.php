<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $age = $_POST['age'];
    $department = $_POST['department'];
    $section = $_POST['section'];

    $conn = new mysqli('localhost', 'root', '', 'student_data');

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $sql = "INSERT INTO students (name, id, age, department, section) VALUES ('$name', '$id', '$age', '$department', '$section')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Data saved successfully. <a href='show_student.php'>Next</a></p>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
