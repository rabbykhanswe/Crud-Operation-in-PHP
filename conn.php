<?php

$conn = new mysqli("localhost", "root", "", "crud");

if(!$conn){
    die("Connection Failed: ". $conn->connect_error);
}
?>