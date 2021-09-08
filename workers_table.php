<?php 
$msg=""; 
$conn=mysqli_connect("localhost","root","","mini");




    $sql="SELECT * FROM workers";
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

    <title>employees</title>
</head>
<body>
<h2 >EMPLOYEES</h2><br>

<div class="container">
<div class="table-responsive-sm styling">
  <table class=" table  table-hover table-dark gray table-striped">
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>ADDRESS</th>
    <th>GENDER</th>
    <th>CATEGORY</th>
    <th>ROLL</th>
    <th>EMAIL</th>
    <th>PHONE</th>
   
    </tr>
<?php
  
while($row=mysqli_fetch_assoc($result)){






?>
 <tr>
 <td><?php echo $row['id']; ?></td>
 <td><?php echo $row['wname']; ?></td> 
 <td><?php echo $row['waddress']; ?></td> 
 <td><?php echo $row['gender']; ?></td>
 <td><?php echo $row['category']; ?></td>
 <td><?php echo $row['roll']; ?></td>
 <td><?php echo $row['email']; ?></td>
 <td><?php echo $row['phone']; ?></td>
 
 
 </tr>
<?php  } ?>
<?php  echo $msg;?>
</table>
</div>
</div>
</body>
</html>