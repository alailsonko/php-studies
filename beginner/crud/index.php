<?php include('includes/functions.php') ?>
<?php $allEmployees = selectAll(); ?>

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
    <?php include('theme/header.php'); ?>
<div class="container fluid">
<a href="http://localhost:3333/beginner/crud/index.php">Reload</a>
<a href="http://localhost:3333/beginner/crud/create.php">Create</a>
<a href="http://localhost:3333/beginner/crud/update.php">Update</a>

    <h1> <em class="fa fa-check-circle"></em> Welcome to the CRUD project</h1>
    <table class="table datatable">
      <thead>
         <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th></th>
         </tr>
      </thead>
      <tbody>
      <?php
         foreach ($allEmployees as $employee):
            echo '
               <tr>
               <td>'.$employee['id'].'</td>
               <td>'.$employee['fname'].'</td>
               <td>'.$employee['lname'].'</td>
               <td>'.$employee['phoneNumber'].'</td>
               <td class="text-right">
                 <a href="/beginner/crud/update.php?id='.$employee['id'].'">Update</a>
                 <a href="/beginner/crud/delete.php?id='.$employee['id'].'">Delete</a>
               </td>
               </tr>
            ';
         endforeach;
      ?>
      </tbody>
    </table>
</div>
<?php include('theme/footer-scripts.php'); ?>
</body>
</html>
