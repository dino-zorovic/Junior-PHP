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
    <h1>insert</h1>
  <form action="insert.php" method="post">
Name: <input type="text" name="name"><br>
Age: <input type="number" name="age"><br>
Job Title: <input type="text" name="job_title"><br>

<input type="submit">
</form>
<br>
    <h1>fetch</h1>
    <?php
    include 'connect.php';
    $sql = "SELECT * FROM ma";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));


while($row = mysqli_fetch_array($result)) {
    $user_id = $row['user_id'];
   
    
} 
mysqli_close($conn);
?>
<form action="fetch.php" method="post">
<select name="user_id">
    <?php
    for ($i=1; $i <= $user_id; $i++){
        echo ' <option value="' . $i . '">' . $i . '</option>';
        
    }    
    ?>
   
  </select>


<input type="submit">
</form>
</body>
</html>