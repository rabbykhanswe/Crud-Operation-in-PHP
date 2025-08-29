<?php
include 'conn.php';

$id = $_GET['deleteid'];

$sql = "delete from info where id = $id";
$result = mysqli_query($conn, $sql);

if($result){

    header('location: index.php');

}

?>