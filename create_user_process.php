<?php
    namespace ExerciseOne;
    require('MysqlConn.php');
    use ExerciseOne\MysqlConn;
    $mysql = new MysqlConn;
    if(!empty($_POST)){
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $created_date = date("Y-m-d H:i:s");

        $sql = "INSERT INTO user (`name`,`email`,`password`,`created_at`) VALUES ('{$user_name}','{$email}','{$password}','{$created_date}')";
        $conn = $mysql->connection();
        $result = $conn->query($sql);

        if ($result) {
            header('Location: /success.php?user=success');
        }
        else {
            header('Location: /success.php?user=fail');
        }

    }
?>