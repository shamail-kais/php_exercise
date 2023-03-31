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
        <h1 class="text-center">Login</h1>
        <br>
        <?php
        if(!empty($_GET) && isset($_GET['message']) && $_GET['message'] == "success"){   
        ?>
        <div class="row justify-content-md-center">
            <div class="alert alert-primary col col-sm-4" role="alert">
                Login Success
            </div>
        </div>
        <?php
        }
        if(!empty($_GET) && isset($_GET['user']) && $_GET['user'] == "success"){   
        ?>
        <div class="row justify-content-md-center">
            <div class="alert alert-primary col col-sm-4" role="alert">
                User Created Successfully
            </div>
        </div>
        <?php
        }
        elseif (!empty($_GET) && isset($_GET['user']) && $_GET['user'] == "fail"){   
        ?>
        <div class="row justify-content-md-center">
            <div class="alert alert-danger col col-sm-4" role="alert">
                User Creation Failed
            </div>
        </div>
        <?php
        }
        ?>
        <br>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>