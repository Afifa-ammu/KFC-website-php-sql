<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>KFC login page</title>
</head>
<body>
    <form method="post" action="users.php" autocomplete="off">
    <div class="login-box" style="margin-top:100px ; padding:100px" >
        <div class="login-header">
            <header>SignIn Form</header>
        </div>
        <div class="input-box">
            <input type="text" name="ma" class="input-field" placeholder="Email" autocomplete="off" required="">
        </div>
        <div class="input-box">
            <input type="password" name="pa" class="input-field" placeholder="Password" autocomplete="off" required="">
        </div>
        <button class="btn btn-dark">Submit</button>
</form>
    </div>

</body>
</html>