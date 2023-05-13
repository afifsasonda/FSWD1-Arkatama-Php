<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            outline:none;
        }
        body{
            width:100%;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

    </style>
</head>
<body>
   <h2>Insert Product</h2>
   <br> 
<form method="post" action="create.php">
  <label for="id">Id:</label>
  <input type="text" id="id" name="id" required>
  <br>
  <label for="category_id">Category Id:</label>
  <input type="text" id="category_id" name="category_id" required>
  <br>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>
  <br>
  <label for="description">Description:</label>
  <input type="text" id="description" name="description" required>
  <br>
  <label for="price">Price:</label>
  <input type="text" id="price" name="price" required>
  <br>
  <label for="status">Status:</label>
  <input type="text" id="status" name="status" required>
  <br>
  <label for="created_at">Created at:</label>
  <input type="text" id="created_at" name="created_at" required>
  <br>
  <label for="updated_at">Updated at:</label>
  <input type="text" id="updated_at" name="updated_at" required>
  <br>
  <label for="created_by">Created by:</label>
  <input type="text" id="created_by" name="created_by" required>
  <br>
  <label for="verified_at">Verified at:</label>
  <input type="text" id="verified_at" name="verified_at" required>
  <br>
  <label for="verified_by">Verified by:</label>
  <input type="text" id="verified_by" name="verified_by" required>
  <br>
  <input type="submit" value="Simpan">
</form>
    <br>

<h2>Insert Categories</h2>
<br>
<form method="post" action="create_categories.php">
  <label for="id">Id:</label>
  <input type="text" id="id" name="id" required>
  <br>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>
  <br>
  <label for="created_at">Created at:</label>
  <input type="text" id="created_at" name="created_at" required>
  <br>
  <label for="updated_at">Updated at:</label>
  <input type="text" id="updated_at" name="updated_at" required>
  <br>
  <input type="submit" value="Simpan">
</form>

</body>
</html>