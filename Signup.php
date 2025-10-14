<?php
$name=$email=$web=$com=$course="";
$nameerror=$emailerror=$websiteerror=$courseerror="";
function testing($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=HTMLspecialchars($data);
    return $data;
}
//First if Block
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['nam'])){
        $nameerror="Please enter your name";
    }
    else{
        $name=testing($_POST['nam']);
        if(!preg_match("/^[a-zA-Z-\s']*$/",$name)){
        $nameerror=" It contains only Alphabets & Space";
    }
}
    if(empty($_POST['email'])){
        $emailerror="Please enter your Email id";
    }
    else{
        $email=testing($_POST['email']);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailerror="Invalid Email Format";
    }
}
 if(empty($_POST['website'])){
        $web="";
    }
    else{
        $website=testing($_POST['website']);
        if(!filter_var($email,FILTER_VALIDATE_URL)){
        $websiteerror="Invalid Website Name";
    }
}
 if(empty($_POST['comment'])){
        $com="";
    }
    else{
        $com=testing($_POST['comment']);
        }
  if(empty($_POST['course'])){
        $courseerror="Please enter Course Name";
    }
    else{
        $course=testing($_POST['course']);
        }
       
}

?>
<html>
    <body>
        <form action="<?php echo HTMLSpecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
            NAME: <input type="text" name="nam"></input><br>
            <span class="error">*<?php echo $nameerror ?></span><br><br>
             EMAIL: <input type="text" name="email"></input><br>
            <span class="error">*<?php echo $emailerror ?></span><br><br>
             WEBSITE: <input type="text" name="website"></input><br>
            <span class="error"><?php echo $websiteerror ?></span><br><br>
             COMMENT: <textarea name="comment" rows="5" cols="15"></textarea><br><br>
             COURSE: <input type="radio" name="cource" value="BCA">BCA</input>
             <input type="radio" name="course" value="BBA">BBA</input><br>
             <span class="error">*<?php echo $courseerror ?></span><br><br>
             <input type="submit" name="submit" value="SUBMIT">
        </form>
    </body>
</html>