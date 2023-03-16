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

$sql = "INSERT INTO program (program,sheet)
VALUES ('$program','$sheet')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/program.php?page=1&msg=Program detail Added Successfully !");
    die();
} else {
    header("Location: //admin/program.php?page=1&err=Something went Wrong!");
    die();
}


?>