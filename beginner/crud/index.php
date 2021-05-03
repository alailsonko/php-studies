<?php include('includes/functions.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD project</title>
</head>
<body>
<a href="http://localhost:3333/beginner/crud/index.php">Reload</a>
<a href="http://localhost:3333/beginner/crud/create.php">Create</a>
<a href="http://localhost:3333/beginner/crud/update.php">Update</a>

    <h1>Welcome to the CRUD project</h1>
    <?php
       formatcode(selectAll());
       formatcode(selectSingle(1));
       $user = selectSingle(1);
       echo "Welcome"." ".$user["fname"]." ".$user["lname"];
    ?>
</body>
</html>