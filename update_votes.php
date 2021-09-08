<?php
$conn=mysqli_connect("localhost","root","","mini") or die("connection failed");
$sql="UPDATE voting SET votes=votes+1 WHERE id={$_GET['id']}";
$result=mysqli_query($conn,$sql) or die("query failed");
// if($result){
//     header("Location:workers_table_admin.php");
// }

?>