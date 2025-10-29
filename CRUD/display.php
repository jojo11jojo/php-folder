<?php
include 'connect.php';
include 'navbar.php';
?>
<?php
$dname=$dpass=$dmobile=$did=$demail="...........................";

 if(isset($_POST['submit'])){
    $input=$_POST['einput'];

    $sql = "SELECT * FROM student where mob=$input";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
            $did="Id: ".$row['id'];
             $dname="Name: ".$row['name'];
             $dmobile="Mobile: ".$row['mob'];
              $demail="Email: ".$row['email'];
            $dpass="Password: ".$row['pass'];
           

    }
} else {
    echo "0 results";
}

$con->close();
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container px-5 my-5">
    <form class="d-flex justify-content-center text-aligne-center" id="contactForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div class="mb-3 w-100 mx-5">
            <label for="">MOB</label>
            <input class="form-control" type="number" name="einput" placeholder="Enter Mobile no ,here..."/>
        </div>
        <div class="mb-3 w-12.5">
            <input class="btn btn-primary" type="submit" value="Submit" name=submit>
        </div>
    </form>
</div>
<div class="card w-50" style="margin-left: 25%;">
  <div class="card-header bg-primary text-light">
    Your Information
  </div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item"><?php echo $did;?></li> 
  <li class="list-group-item"><?php echo $dname;?></li>
  <li class="list-group-item"><?php echo $dmobile;?></li>
  <li class="list-group-item"><?php echo $demail;?></li>
    <li class="list-group-item"><?php echo $dpass;?></li>
  </ul>
</div>

    
</body>
</html>

