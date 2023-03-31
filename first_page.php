<?php
    namespace ExerciseOne;
    require('MysqlConn.php');
    use ExerciseOne\MysqlConn;
    $mysql = new MysqlConn;
    if(!empty($_POST)){
        $user_name = $_POST['user_name'];
        $password = sha1($_POST['password']);

        $sql = "SELECT * FROM user WHERE email='{$user_name}'";
        $conn = $mysql->connection();
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if($password == $row['password']){
                header('Location: /success.php?message=success');
            }
            else {
                header('Location: /kais.php?message=fail');
            }

        }
    }
?>