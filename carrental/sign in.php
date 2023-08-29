<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <link rel="stylesheet" href="ss.css">
</head>
<body>
    <div class="loginbox">
        <h2>Sign In </h2>
        <form action="dbh.php"  method="POST">
            <input type="text"  placeholder="email or username" name="email-user">
            <input type="password"  placeholder="password" name="password">
            <button class="loginbtn"  type="login"  name="login">LOGIN</button>


            <div class="registerlink">
                <span>Not Registered ? </span><a href="sign up.php">Click Here</a>
            </div>

        </form>
    </div>
</body>
</html>