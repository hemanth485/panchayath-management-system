<?php

$msg="";
$conn=mysqli_connect("localhost","root","","mini") or die("connection failed");





if(isset($_POST['signup'])){

 
  $name=mysqli_real_escape_string($conn,$_POST['uname']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $phone=mysqli_real_escape_string($conn,$_POST['phone']);
  $address=mysqli_real_escape_string($conn,$_POST['uaddress']);
  $pass=mysqli_real_escape_string($conn,$_POST['pass']);
  $cpass=mysqli_real_escape_string($conn,$_POST['cpass']);

 $sql1="SELECT * FROM users WHERE uname='$name'";
 $sql2="SELECT * FROM users WHERE email='$email'";

 $result1=mysqli_query($conn,$sql1) or die("query 1 failed");
 $result2=mysqli_query($conn,$sql2) or die("query 2 failed");

 
 if(mysqli_num_rows($result1)>0){
   $msg="sorry username already taken";
 }
 
 else if(mysqli_num_rows($result2)>0){
$msg="sorry email already taken";
                
 }
 
 
 else if($pass!==$cpass){

  $msg="password missmatch";

 }
 else

 { 
  $sql="INSERT  INTO users(uname,email,phone,uaddress,pass,cpass) VALUES('$name','$email',  '$phone', '$address','$pass',  '$cpass')";
  $result=mysqli_query($conn,$sql) or die("query failed");
  
  $msg= " registered successfully ";
}


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
    <link rel="stylesheet" href="register.css">
    <title>Document</title>
</head>
<body>

 <div class="container ">
    <div class="block">
        <div class="item">
            <h2>signup</h2><br>
              <form method='post'>
                  
               <div class="form-group">
               <label for="uname">NAME</label><br>
               <input type="text" name="uname" placeholder="Enter name.." required><br>
               </div>

               <div class="form-group">
               <label for="email">EMAIL</label><br>
               <input type="text" name="email" placeholder="Enter email.." required><br>
               </div>

               <div class="form-group">
               <label for="phone">PHONE</label><br>
               <input type="text" name="phone" placeholder="Enter phone.."required><br>
               </div>
               
               <div class="form-group">
               <label for="address">ADDRESS</label><br>
               <input type="text" name="uaddress" placeholder="Enter address..." required><br>
               </div>

               <div class="form-group">
               <label for="pass">PASSWORD</label><br>
               <input type="text" name="pass" placeholder="Enter password."required><br>
               </div>


               
               <div class="form-group">
               <label for="cpass">CONFIRM PASSWORD</label><br>
               <input type="text" name="cpass" placeholder="confirm password."required><br>
               </div>


              <button type="submit" name="signup"  class="btn btn-success" style="border-radius:20px; padding:2px 15px 2px 15px; margin-bottom:3px;">SIGNUP</button>
             
           <p>Already have an account?<a href="index.php"> login</a></p>
           <?php echo $msg; ?>
          
            
          
           </form>
          
           </div>
          
           </div>
           </div>
</body>
</html>