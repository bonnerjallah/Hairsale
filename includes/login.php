<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login/signup</title>
    <link rel="stylesheet" href="../style2.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        include_once(__DIR__ . "/../header.php");
    ?>    
    
    <div class="logincontainer">
        <h1>Login Or Create An Account</h1>
        <div class="login-signup">
            <div class="login">
                <form action="">
                    <h2>Login</h2>
                    <label for="uid">Username:</label>
                    <input type="text" class="uid" name="uid" id="uid" placeholder="Username">
                    <br>
                    <label for="pwd">Password:</label>
                    <input type="password" class="pwd" name="pwd" id="pwd" placeholder="Password">
                    <br>
                    <button class="bttn2" type="submit" id="submit" name="submit">Login Now</button>
                </form>
            </div>
            <div class="singup">
                <form action="">
                    <h2>Create Account</h2>
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
                    <br>
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
                    <br>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" required>
                    <br>
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" id="pwd" placeholder="Password" required>
                    <br> 
                    <label for="pwdrepeat">Confirm Password</label>
                    <input type="password" name="pwdrepeat" id="pwdrepeat" placeholder="Password" required>
                    <br>
                    <label for="terms">I have accepted the <em><a href="/Projects/Hair/links/termsandconditions.php">terms and conditions</a></em></label>
                    <input type="checkbox" name="terms" id="terms" required>
                    <br>
                    <button class="bttn2" type="submit" id="submit" name="submit">Create Account</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        include_once (__DIR__ . "/../footer.php");
    ?>
</body>
</html>