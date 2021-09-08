<?php

if(isset($_POST['cancel'])){
    header("Location:hello.php");
}

$conn=mysqli_connect("localhost","root","","mini") or die("connection failed");

$msg="";
$result="";
$mail="";
if(isset($_POST['submit']))
{
   $name=mysqli_real_escape_string($conn,$_POST['uname']);
   $email=mysqli_real_escape_string($conn,$_POST['email']);
   $phone=mysqli_real_escape_string($conn,$_POST['phone']);
   $address=mysqli_real_escape_string($conn,$_POST['uaddress']);
   $comment=mysqli_real_escape_string($conn,$_POST['comment']);
   $sql="INSERT INTO complaint(uname,email,phone,uaddress,comment) VALUES ('$name','$email','$phone','$address','$comment')";
   $result=mysqli_query($conn,$sql);
   if($result){
   $msg="complaint raised successfully"; 
   }
    else{
        $msg="failed";
    }
    $email=$_POST['email'];
   $to='weengineers3@gmail.com';
   $subject='testing sendmail.exe';
   $message="<html><body>";
   $message .="<p>".$_POST['uname']."</p>";
   $message .="<p>".$_POST['email']."</p>";
   $message .="<p>".$_POST['phone']."</p>";
   $message .="<p>".$_POST['uaddress']."</p>";
   $message .="<p>Comment:".$_POST['comment']."</p>";
   $message .="</body></html>";
   $headers ='From:[weengineers3@gmail.com]'."\r\n".'MIME-Version:1.0'."\r\n".'Content-type: text/html; charset=utf-8';
 

   if(mail($to, $subject, $message, $headers))

   $mail="mail sent";
   else
   $mail="email sending failed";









}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="complaintform.css">
    <title>complaint</title>
</head>
<body>
<div class="container">
    <div class="block">
        <div class="item">
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <h2>COMPLAINTS</h2><br>

    <div class="form-group">
    <label for="fname" >NAME</label><br>
    <input type="text" placeholder="Enter  name..." name="uname"><br>
    </div>


    <div class="form-group">
    <label for="email">EMAIL</label><br>
    <input type="text" placeholder="Enter email..." name="email"><br>
    </div>

    <div class="form-group">
    <label for="phone">PHONE</label><br>
    <input type="text" placeholder="Enter phone..." name="phone"><br>
    </div>

    <div class="form-group">
    <label for="address">ADDRESS</label><br>
    <input type="text" placeholder="Enter address..." name="uaddress"><br>
    </div>

    <div class="form-group">
    <label for="comment">COMMENT</label><br>
    <textarea id="comment" name="comment"placeholder="enter comment..."></textarea><br>
    </div>

     <button type="submit"  id="submit" class="btn btn-success" style="padding:5px;" name="submit">submit</button>
     <button type="submit"  id="cancel" class="btn btn-danger" style="padding:5px;"  name="cancel">cancel</button><br>
        <span><?php  echo $msg; echo "<br>"; echo $mail; ?></span>
        <!-- <span><?php  echo $result ?></span> -->
    </form>
    </div>
    </div> 
    </div> 
</body>
</html>