<?php
namespace ExerciseOne;
require('MysqlConn.php');
use ExerciseOne\MysqlConn;
$mysql = new MysqlConn;

$sql = "SELECT * FROM user";
$conn = $mysql->connection();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
}
else {
    $rows = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>shamail kais</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Users</h1>
        <br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">Number</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created On</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 1;
                foreach($rows as $row){
                ?>
                <tr>
                <td><?php echo $number; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                </tr>
                <?php
                $number++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>