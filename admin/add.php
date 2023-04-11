<?php
require("./layout/db.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$program = test_input($_POST['program']);
$sheet = test_input($_POST['sheet']);
$fees = test_input($_POST['fees']);
$mark = test_input($_POST['mark']);

$sql = "INSERT INTO program (program,sheet,fees,mark)
VALUES ('$program','$sheet','$fees','$mark')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/program.php?page=1&msg=Program detail Added Successfully !");
    die();
} else {
    header("Location: //admin/program.php?page=1&err=Something went Wrong!");
    die();
}


?>