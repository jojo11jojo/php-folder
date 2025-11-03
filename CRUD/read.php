<?php
include "connect.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Email Id</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $s="SELECT * FROM `student`";
    $result=mysqli_query($con,$s);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
   
    ?>
    <tr>
      <th scope="row"><?php  echo $row['id']?></th>
      <td><?php  echo $row['name']?></td>
      <td><?php  echo $row['mob']?></td>
      <td><?php  echo $row['email']?></td>
      <td><?php  echo $row['pass']?></td>
    </tr>
    <?php
        }
         }
    ?>
  </tbody>
</table>
    
</body>
</html>