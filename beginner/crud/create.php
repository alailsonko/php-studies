<?php
include('includes/functions.php');
 if (isset($_POST['btninsert'])) :
     insert($_POST["fname"], $_POST["lname"], $_POST["phoneNumber"]);
 endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('theme/header-scripts.php'); ?>

    <title>CRUD project</title>
</head>
<body>
<div class="container fluid">
<a href="http://localhost:3333/beginner/crud/index.php">Home</a>
    <h1>Insert</h1>
    <form action="" method="POST">
    <label for="">
    First Name: <input type="text" class="form-control" name="fname">
    </label>
    <label for="">
    Last Name: <input type="text" class="form-control" name="lname">
    </label>
    <label for="">
    Phone Number: <input type="text" class="form-control" name="phoneNumber">
    </label>
    <button type="submit" name="btninsert">SUBMIT</button>
    </form>
</div>
</body>
</html>
