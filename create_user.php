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
        <h1 class="text-center">Create User</h1>
        <br>
        <form action="create_user_process.php" method="post">
            <div class="form-group">
                <div class="row justify-content-md-center">
                    <div class="col col-sm-2">
                        <label for="user_name">User Name</label>
                    </div>
                    <div class="col col-sm-3">
                        <input class="form-control" name="user_name" type="text" id="user_name" required>
                    </div>
                </div>
                <br>
                <div class="row justify-content-md-center">
                    <div class="col col-sm-2">
                        <label for="email">Email</label>
                    </div>
                    <div class="col col-sm-3">
                        <input class="form-control" name="email" type="email" id="user_name" required>
                    </div>
                </div>
                <br>
                <div class="row justify-content-md-center">
                    <div class="col col-sm-2">
                        <label for="password">Password</label>
                    </div>
                    <div class="col col-sm-3">
                        <input class="col col-sm-3 form-control" name="password" type="password" id="password" required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col col-sm-3 offset-sm-2">
                    <br><input class="form-control btn btn-primary" type="submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>