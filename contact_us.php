<?php

$conn=mysqli_connect("localhost","root","","mini");
$msg="";
$mail="";
if(isset($_POST['cancel'])){
    header("Location:hello.php");
}


if(isset($_POST['submit'])){

$name=mysqli_real_escape_string($conn,$_POST['uname']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$comment=mysqli_real_escape_string($conn,$_POST['comment']);

$sql="INSERT INTO contact(uname,email,phone,comment) VALUES('$name', '$email','$phone','$comment')";
$result=mysqli_query($conn,$sql);

if($result){
    $msg="Thank you ...We will get back to you soon ";



}
else{
    $msg="Opps..Something went wrong..Please try again";
}


$to='weengineers3@gmail.com';
$subject='testing sendmail.exe';
$message="<html><body>";
$message .="<p>".$_POST['uname']."</p>";
$message .="<p>".$_POST['email']."</p>";
$message .="<p>".$_POST['phone']."</p>";
$message .="<p>Comment:".$_POST['comment']."</p>";
$message .="</body></html>";
$headers ='From:[hegdenandana02@gmail.com]'."\r\n".'MIME-Version:1.0'."\r\n".'Content-type: text/html; charset=utf-8';

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
<link rel="stylesheet" href="contact_us.css">
    <title>Contact Admin</title>

</head>
<body>
<div class="container">
    <div class="block">
        <div class="item">
        
  <form method="post">
    <h1>CONTACT ADMIN</h1>
    <div class="container">
    <h3>WE'LL GET BACK TO YOU SOON</h3>
    </div>

    <div class="container">
        <div class="row justify-content-around mt-4">
       <div class="col-sm-5   "> <i class="fa fa-envelope" style="font-size:40px;color:yellow;"></i>
        <p>Email:
        weengineers3@gmail.com
        </p>
     </div>
    
    <div class="col-sm-5"> <i class="fa fa-phone" style="font-size:40px;color:yellow;"></i>
        <p>Phone:
      9980865436
       </p>
     </div>
   </div>
</div>

<div class="container  justify-content-stretch mt-2">
    <div class="form-group">
    <label for="uname" >NAME</label><br>
    <input type="text" placeholder="Enter  name..." name="uname" id="uname" ><br>
    </div>


    <div class="form-group">
    <label for="email">EMAIL</label><br>
    <input type="text" placeholder="Enter email..." name="email" id="email"><br>
    </div>

    <div class="form-group">
    <label for="phone">PHONE</label><br>
    <input type="text" placeholder="Enter phone..." name="phone" id="phone" ><br>
    </div>

    

    <div class="form-group">
    <label for="comment">COMMENT</label><br>
    <textarea id="comment" name="comment"placeholder="enter comment..."></textarea><br>
    </div>

     <button type="submit" id="submit" class="btn btn-success" style="padding:5px;" name="submit">submit</button>
     <button type="submit" id="cancel" class="btn btn-danger" style="padding:5px;" name="cancel">cancel</button><br>
     <?php  echo $msg ;echo"<br>"; echo $mail;?>
    </form>
    </div>
    </div> 
    </div> 
    </div>

</body>
</html>