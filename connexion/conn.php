<?php 
$conn = new mysqli("localhost:3306", "root", "root", "db_task");
    if(!$conn){
        die("Error : Cannot connect to the database.");
    }
?>