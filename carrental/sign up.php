<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="ss.css">
</head>
<body>
      <div class="registerbox">
        <h2>SIGN UP</h2>
        <form action="ulog.php"  method="POST">

            <input type="text" placeholder="Username" name="username">
            <input type="email" placeholder="Email" name="email">
            <input type="number" placeholder="Phone No" name="phone_no">
            <input type="password"  placeholder="password" name="password">
            <button class="registerbtn"  type="submit"  name="registerbtn">Register</button>

            <div  class="loginlink">
                <span>If You already registered ? </span><a href="sign in.php">Click Here <b>to go Sign In </b></a>
            </div>



        </form>

      </div>


    
</body>
</html>