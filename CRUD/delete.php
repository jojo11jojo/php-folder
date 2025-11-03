<?php
include "connect.php";
include "navbar.php";
?>
 <?php
 $row['name']=$row['mob']=$row['email']=$row['pass']= $row['id']=".......................";
  if (isset($_POST['submit1'])){
    $i=$_POST['id1'];
    echo $i;
    $sql11="SELECT * FROM `student` Where `student`.`id`=$i";
    $result11=mysqli_query($con,$sql11);
    $row=mysqli_fetch_assoc($result11);
  }
 


?>
<?php
if(isset($_POST['submit2'])){
    $id11=$_POST['id2'];
     $n = $_POST['nam'];
  $m = $_POST['mobile'];
  $e = $_POST['email'];
  $p = $_POST['password'];
  $sql12="DELETE FROM `student` WHERE `student`.`id`='$id11'";
  $result12=mysqli_query($con,$sql12);
  if($result12){
 header("location:read.php");
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 20vh;">
        <form method="post" style="display: flex; align-items: center; gap: 15px; "  >
  <div class="mb-3" style="display: flex; align-items: center; gap: 10px; ">
    <label for="exampleInputEmail1" class="form-label"style="margin: 0;">Enter ID No: </label>
    <input type="number" name="id1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 200px;">
  </div>
  <button type="submit" name="submit1" style="hight:10vh;" class="btn btn-primary">Search</button>
</form>
    </div>   
   <div style=" display: flex; justify-content: center; width: 100%; align-items: center; height: 60vh;">
    <form method="post" style="width: 400px; padding: 20px; border: 1px solid #ccc; border-radius: 10px; background-color: #f9f9f9;">
        <input type="hidden" name="id2" value="<?php echo $row['id']; ?>" >

         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" name="nam"  value="<?php  echo $row['name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">MOB</label>
    <input type="number" name="mobile"   value="<?php  echo $row['mob']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" value="<?php  echo $row['email']; ?> " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type=" " name="password"  value="<?php  echo $row['pass']; ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="submit2"  style="justify-content: center; width:100%;"class="btn btn-primary">DELETE</button>
</form>
</div>
</body>
</html>
