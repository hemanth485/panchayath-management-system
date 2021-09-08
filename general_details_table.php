 <?php 
$msg=""; 
$conn=mysqli_connect("localhost","root","","mini");

if(isset($_POST['submit'])){

$valuetosearch=$_POST['search'];
$sql="SELECT * FROM details WHERE village LIKE'%$valuetosearch%'";
$result=mysqli_query($conn,$sql);
 
 
}


else {

    $sql="SELECT * FROM details order by village";
    $result=mysqli_query($conn,$sql);

}



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
    <title>general details</title>
</head>
<body>
<h2 >GENERAL DETAILS</h2><br>
<div class="container">
<div class="row justify-content-around m-auto">
<form method="POST" >
<input type="text" name="search" placeholder="search by village">
<input type="submit" name="submit">
</form>
</div>
</div><br>
<div class="container">
<div class="table-responsive-sm styling">
  <table class=" table  table-hover table-dark grey table-striped">
    <tr>
    <th>VILLAGE</th>
    <th>AREA(in hectare)</th>
    <th>ELECTRIFIED</th>
    <th>WELLS</th>
    <th>PONDS</th>
    <th>BRIDGES</th>
    <th>SCHOOLS</th>
    <th>FARMING AREA(in hectare)</th>
    <th>FOREST AREA(in hectare)</th>
    </tr>
<?php
  
while($row=mysqli_fetch_assoc($result)){






?>
 <tr>
 <td><?php echo $row['village']; ?></td>
 <td><?php echo $row['area']; ?></td> 
 <td><?php echo $row['electrical']; ?></td> 
 <td><?php echo $row['wells']; ?></td>
 <td><?php echo $row['ponds']; ?></td>
 <td><?php echo $row['bridges']; ?></td>
 <td><?php echo $row['schools']; ?></td>
 <td><?php echo $row['farming']; ?></td>
 <td><?php echo $row['forest']; ?></td>
 
 </tr>
<?php  } ?>
<?php  echo $msg;?>
</table>
</div>
</div>
</body>
</html>