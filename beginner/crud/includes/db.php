<?php 

    $mysqli = new mysqli("localhost", "root", "", "crud");

    if($mysqli->connect_error) {
        exit("Error connecting to database.");
    }