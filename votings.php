
<?php 

$conn=mysqli_connect("localhost","root","","mini");
$message="";


if(isset($_POST['vote']))

{

$id=$_POST['id'];
$sql3="SELECT *FROM votings where id='{$_POST['id']}'";
$result3=mysqli_query($conn,$sql3);
    
        if(mysqli_num_rows($result3))
        {
                $sql1="UPDATE votings SET votes=votes+1 WHERE id='{$id}'";
                $result1=mysqli_query($conn,$sql1) or die("query failed");
                
                session_start();
                $sql2="DELETE FROM users WHERE uname='{$_SESSION['uname']}'";
                $result2=mysqli_query($conn,$sql2);

             if($result2)
                   {
                    header("location:index.php");
                   }

        }

else {
         $message="please enter valid id";
      }

}

?>


<?php 
$msg=""; 


    $sql="SELECT * FROM votings order by id";
    $result=mysqli_query($conn,$sql);

   if(mysqli_num_rows($result)>0)  

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
<link rel="stylesheet" href="contact.css">
    <title>VOTINGS</title>
</head>
<body >
<h1 style="text-align:center;color:blue;">ONLINE VOTING</h1><br><br>
    
    <h3 style="color:black; text-align:center"><?php session_start(); echo "welcome ".$_SESSION['uname']."!"; ?></h3><br>

<div class="container">
<div class="table-responsive-sm styling">
  <table class="table  table-hover table-bordered table-dark ">
    <tr style="color:black">
    <th>ID</th>
    <th>NAME</th>
    <th>PARTY</th>
    </tr>

<?php
  
while($row=mysqli_fetch_assoc($result)){

?>

 <tr>
 <td><?php echo $row['id']; ?></td>
 <td ><?php echo $row['cname']; ?></td>
 <td><?php echo $row['party']; ?></td> 
 </tr>

<?php  } ?>
<?php  echo $msg;?>
</table>
</div>
</div><br>

<form method="post" style="text-align:center">
<input type="text" name="id" placeholder="enter candidate id">
<input type="submit" name="vote" value="vote here">
<br><p><?php echo $message; ?></p>
</form>

</body>
</html>


