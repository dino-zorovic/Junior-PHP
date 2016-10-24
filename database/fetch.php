<?php
    include 'connect.php';
    $user_id_form = $_POST['user_id'];
    
    $sql = "SELECT * FROM users where user_id ='$user_id_form'";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));


while($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $age = $row['age'];
    $job_title = $row['job_title'];
    echo 'Name: ' . $name . '<br>Age: ' . $age . '<br>Job Title: ' . $job_title;
} 


mysqli_close($conn);
?>
