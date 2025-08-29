<?php
include 'conn.php';

$sql = "select * from info";
$result = mysqli_query($conn, $sql);

echo '<table>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Operations</th>
            </tr>';

while($row = mysqli_fetch_assoc($result)){
    echo '
        
            <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['passwd'].'</td>
                <td>
                    <a href="update.php?updateid='.$row['id'].'"><button class="update">Update</button></a>
                    <a href="delete.php?deleteid='.$row['id'].'"><button class="delete">Delete</button></a>
            </tr>

    ';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude Operation Center</title>

    <style>
        .container{
            width: 80%;
            margin: auto;
            text-align: center;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .add{
            padding: 10px 20px;
            background-color: blueviolet;
            color: white;
            border-radius: 5px;
            border: none;

        }

        .update{
            padding: 10px 10px;
            background-color: green;
            color: white;
            border-radius: 5px;
            border: none;

        }

        .delete{
            padding: 10px 10px;
            background-color: red;
            color: white;
            border-radius: 5px;
            border: none;

        }
        table{
            width: 80%;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: 20 auto;
        }
        table, th, td{
            padding: 10px;
            text-align: center;
        }
        </style>
</head>
<body>
    <div class="container">
        <a href="add.php"><button class="add">Add User</button></a>



    </div>
    
</body>
</html>