<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Seller Panel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form method="post" action="seller_submit.php">
          <h1>Add item</h1>
          <label>Property Address:</label><input type="text" name="item" required>
          <label>price:</label><input type="text" name="price" required>
          <button type="submit" name="add">Add</button>
        </form>
    </div>
</body>
</html>
