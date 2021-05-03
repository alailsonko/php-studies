<?php 
include('includes/functions.php');
 if (isset($_POST['btnupdate'])) :
     update($_POST["fname"], $_POST["lname"], $_POST["phoneNumber"], $_POST["id"]);
 endif;
 $user = (isset($_GET["id"])) ? selectSingle($_GET["id"]) : false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD project</title>
</head>
<body>
<a href="http://localhost:3333/beginner/crud/index.php">Home</a>
    <?php if ($user != false) : ?>
    <h1>Update</h1>
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo $user["id"]; ?>" />
    <label for="">
    First Name: <input type="text" name="fname" value="<?php echo $user["fname"]; ?>">
    </label>
    <label for="">
    Last Name: <input type="text" name="lname" value="<?php echo $user["lname"]; ?>">
    </label>
    <label for="">
    Phone Number: <input type="text" name="phoneNumber" value="<?php echo $user["phoneNumber"]; ?>">
    </label>
    <button type="submit" name="btnupdate">SUBMIT</button>
    </form>
<?php else: ?>
  <h2>User is not set, try again.</h2>
<?php endif; ?>
</body>
</html>