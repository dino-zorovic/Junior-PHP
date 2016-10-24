<?php
include 'connect.php';

$sql = "CREATE TABLE users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(60) NOT NULL,
age int(2) NOT NULL,
job_title VARCHAR(50),
inserted_on TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
last_updated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP 
                     ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
    
    
?>
