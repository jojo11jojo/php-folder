<?php
include 'connect.php';
include 'insert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="insert.php">Dashbord</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Update</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Delete</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="display.php" tabindex="-1" aria-disabled="true">Basic Details</a>
  </li>
</ul>
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">SUBMIT</button>
</form>
</body>
</html>