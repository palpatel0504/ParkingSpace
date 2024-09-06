<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login form</title>
    <link rel="stylesheet" href="user.css" >
</head>
<body>
<h1><b>Park It Smart </b></h1>
    <div class="form">
        <div class="login-form">
            <h1>Login User Form</h1>
            <form action="validate1.php" method="post">
                <label for="">Username:</label>
                <input type="text" name="username" placaholder="username"> <br><br>
                <label for="">Password:</label>
                <input type="password" name="password" placaholder="Password"> <br><br>
                <input type="submit" class="submit" value="Login">
                <button class="button"><a href="newuser.php">New User</a></button>
                </form>
        </div>
    </div>

</body>
</html>