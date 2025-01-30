<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marks = [$_POST['marks1'], $_POST['marks2'], $_POST['marks3'], $_POST['marks4'], $_POST['marks5']];
    $cgpas = array_map(function($mark) {
        return $mark / 20;
    }, $marks);
    $average_cgpa = array_sum($cgpas) / count($cgpas);

    header("Location: show_cgpa.php?average_cgpa=$average_cgpa");
    exit;
}
?>
