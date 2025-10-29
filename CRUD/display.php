<?php
include 'connect.php';
include 'navbar.php';
?>
<?php

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
        <select class="form-select w-50 h-25 mx-5 bg-primary text-light" aria-label="Default select example" name="selected">
            <option value="Name" selected>Name</option>
            <option value="Mobile No.">Mobile</option>
        </select>
        <div class="mb-3 w-100 mx-5">
            <input class="form-control" type="text" name="einput" placeholder="Enter here..."/>
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