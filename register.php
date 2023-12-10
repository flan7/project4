<!DOCTYPE html>
<html class="general" lang="en">
<head>
  <meta charset="UTF-8"/>
  <title>Register</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="form-container">
    <h1>Register</h1>

    <form method="post" action="register_submit.php">
      <label>Username</label><input type="text" name="username" required>
      <label>Password</label><input type="password" name="password" required>
      <label>email</label><input type="text" name="email" required>
      <label>Buyer</label><input type="radio" name="buyer" value="buyer" checked required>
      <label>Seller</label><input type="radio" name="seller" value="seller" checked required>
      <button type="submit">Register</button>
    </form>

    <form method="get" action="login.php">
      <button type="submit">Login page</button>
    </form>
  </div>
</body>
</html>
