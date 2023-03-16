<?php
require("./layout/db.php");

$id = $_POST['id'];

$sql = "DELETE FROM program WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/program.php?page=1&msg=Program detail Deleted Successfully !");
    die();
} else {
    header("Location: //admin/program.php?page=1&err=Something went Wrong!");
    die();
}


?>