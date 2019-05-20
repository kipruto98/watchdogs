<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <script language="javascript">
    window.alert("please login first");
  </script>
</head>
<body>
  <div class="header">
    <h2 align="center">Login</h2>
  </div>
  <form method="post" action="index.php">
    <?php include('errors.php'); ?>
    <div class="input-group" align="center">
      <label>Username</label>
      <input type="text" name="username" placeholder="Username" value="<?php echo $username ?>">
    </div>
    <div class="input-group" align="center">
      <label>Password</label>
      <input type="password" placeholder="Password" name="password">
    </div>
    <div class="input-group" align="center">
      <button type="submit" class="btn" name="login_user">Login</button>
      <button type="reset" class="btn" name="reset">Reset</button>
    </div>
    <p align="center">
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>
</html>