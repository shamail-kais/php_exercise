<?php
if(!empty($_GET)){
    //echo "Get";
    //echo "</br>";
    //print_r($_GET);
    if (empty($_GET['name'])){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
if(!empty($_POST)){
    //echo "Post";
    //echo "</br>";
    if (empty($_GET['name'])){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
?>