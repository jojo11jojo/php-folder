<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $a = $_POST['nam'];
  $b = $_POST['mobile'];
  $c = $_POST['email'];
  $d = $_POST['password'];

  // Always quote your SQL query string
$sql = "INSERT INTO student (id, name, mob, email, pass) VALUES (NULL, '$a', '$b', '$c', '$d')";
  $result=mysqli_query($con,$sql);
  if ($result==true) {
    echo "<br><br>Sign up Successfully Occured";
  }
   else {
    echo "Error: ";
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <form method="post">
         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" name="nam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">MOB</label>
    <input type="number" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>