<?php 

include("includes/functions.php");
$user = (isset($_GET["id"])) ? delete($_GET["id"]) : exit();