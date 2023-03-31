<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Form</title>
</head>
<body>
    <form action="/form_view.php" method="<?php if (!empty($_GET['method'])) echo $_GET['method'] ?>">
        <input type="text" name="name" id="name">
        <input type="password" name="pwd" id="pwd">
        <input type="submit">
    </form>
</body>
</html>