<?php
include 'connect.php';

$name = $_POST['name'];
$age = $_POST['age'];
$job_title = $_POST['job_title'];
$isql = "INSERT INTO users (name, age, job_title) VALUES ('".$name."', '".$age."', '".$job_title."')";
   
if (mysqli_query($conn, $isql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
    
?>
