<?php
/*
Demonstrate using PHP how you would connect to a MySQL or

PostgreSQL database and query for a specific record with the following

fields: “id_user”, “name”, “age”, “job_title”, “inserted_on”,

“last_updated”) from a table called 'users', using the ‘id_user’ field.

Indicate how you would create the table taking into consideration that we

are going to access to the table data only by ‘id_user’. Provide an

example of how you would write a record in this same table with the user

data that comes from a form send by an HTTP POST request. Don’t need

to create the form, but you can create it if it helps you.*/
    
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "job";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }     
?>