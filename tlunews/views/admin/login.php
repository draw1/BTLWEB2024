<?php require_once __DIR__ . '/../../controllers/AdminController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <legend>Log-in</legend>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="" placeholder="Username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="" placeholder="Password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="log-in">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>