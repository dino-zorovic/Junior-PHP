<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>MySQL</title>

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
    
?>

</head>

<body>
<?php
    include 'connect.php';
    $user_id_form = $_POST['user_id'];
    
    $sql = "SELECT * FROM ma where user_id ='$user_id_form'";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));


while($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $age = $row['age'];
    $job_title = $row['job_title'];
    echo 'Name: ' . $name . '<br>Age: ' . $age . '<br>Job Title: ' . $job_title;
} 


mysqli_close($conn);
?>
</body>
</html>