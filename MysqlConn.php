<?php
    namespace ExerciseOne;
    use mysqli;
    class MysqlConn {
        private $conn;

        function connection(){
            $conn = new mysqli('mysql_exercise','root','root','exercise_one');
            return $conn;
        }
      }
?>