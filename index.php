<?php


$conn=mysqli_connect("localhost","root","","mini");
$msg="";
if (isset($_POST['submit'])){

    $name=$_POST['uname'];
    $pass=$_POST['pass'];
    if($name=='admin' && $pass=='qwertyuiopmnbvcxz@123'){
              
           header("location:admin\admin.php");
    }
    else{
            
             $sql="SELECT * FROM users WHERE uname='$name' && pass='$pass'";
             $result=mysqli_query($conn,$sql);
                    
            if(mysqli_num_rows($result))
            {     session_start();
                $_SESSION['uname']=$name;
                
                header("location:hello.php");
            }

            else
            {
                $msg="user not exist";
            }

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
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
    
</head>
<body>
            
                 <div class=" col-sm-6 col-md-3 container ">
                    <div class="item">
                          <form method="POST">
                        <h2 style="text-decoration:underline;">LOGIN</h2><br>
                        <label for="name">NAME</label><br>
                        <input class="uname" type="text" name="uname" placeholder="Enter name..." required><br><br>
                        <label for="pass">PASSWORD </label><br>
                        <input  class="email" type="password" name="pass" placeholder="Enter password..." required><br><br>
                        <button type="submit"  name="submit"class="btn btn-success" style="border-radius:20px; padding:2px 15px 2px 15px">LOGIN</button>
 
                        <p> Don't have an account?<a href="register.php"> sign up</a></p>
                        <?php  echo $msg; ?>
                          </form>
                    </div>
                </div>
    
        

</body>
</html>


