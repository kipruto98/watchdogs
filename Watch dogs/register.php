<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <div class="header">
            <h2>Register</h2>	
        </div>

        <form action="register.php" method="post">
            <!-- display validation errors here -->
            <?php include('errors.php') ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" >
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password1" placeholder="Password">
            </div>
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="password2" placeholder="Confirm password">
            </div>
            <div>
                <input type="checkbox" name="terms" required="">
                <label>I accept terms and conditions</label>
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>
            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </body>
</html>