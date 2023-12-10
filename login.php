<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="form-container">
    <h1>Login</h1>

    <form method="post" action="login_submit.php">
      <label>Username</label><input type="text" name="username" required>
      <label>Password</label><input type="password" name="password" required>
      <button type="submit" name="login">Login</button>
    </form>

    <form method="get" action="register.php">
      <button type="submit">Sign up</button>
    </form>
  </div>
</body>
</html>
