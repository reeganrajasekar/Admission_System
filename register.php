<?php
require("./admin/layout/db.php");

$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);

$target_dir_sign = "./uploads/sign/";
$target_file_sign = $target_dir . basename($_FILES["sign"]["name"]);

$name = $_POST["name"];
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$email = $_POST["email"];
$address = $_POST["address"];
$mobile = $_POST["mobile"];
$sname = $_POST["sname"];
$com = $_POST["com"];
$course = $_POST["course"];
$img = basename($_FILES["img"]["name"]);
$sign = basename($_FILES["sign"]["name"]);

if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
    if(move_uploaded_file($_FILES["sign"]["tmp_name"], $target_file_sign)){
        $sql="INSERT INTO student(name,fname,mname,email,address,mobile,sname,com,course,img,sign) VALUE('$name','$fname','$mname','$email','$address','$mobile','$sname','$com','$course','$img','$sign')";
        $conn->query($sql);
        header("Location: /?msg=Your Details Stored Successfully! We will Contact You, Thank you");
        die();
    }else{
        header("Location: /?err=Something went Wrong!");
        die();
    }
}else{
    header("Location: /?err=Something went Wrong!");
    die();
}


?>