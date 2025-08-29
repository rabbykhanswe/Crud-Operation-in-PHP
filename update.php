<?php
include 'conn.php';

$id = $_GET['updateid'];
$sql = "select * from info where id= $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$password = $row['passwd'];

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $sql = "update info set name= '$name', email = '$email', passwd = '$password' where id = $id";

$result = mysqli_query($conn, $sql);

if($result){

    header('location: index.php');

}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude Operation</title>

    <style>
        .container{
            width: 80%;
            margin: auto;
            text-align: center;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .add{
            padding: 10px 15px;
            background-color: green;
            color: white;
            border-radius: 5px;
            border: none;

        }

        form{
            margin-top: 20px;
            background-color: bisque;
            padding: 20px;
        }

        form input{
            padding:5px;
            border-radius: 5px;
            border: 1px solid gray;
        }
        input[type="submit"]{
            padding: 10px 15px;
            background-color: blueviolet;
            color: white;
            border-radius: 5px;
            border: none;
        }
    </style>
</head>
<body>

    <div class="container">

        <form method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required value="<?php echo $name ?>">
            <br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="<?php echo $email ?>">
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required value="<?php echo $password ?>">
            <br><br>
            <input type="submit" value="Update" name="update">
        </form>

    </div>
    
</body>
</html>