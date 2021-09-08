

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato"> -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="hello.css">
    <title>mini</title>
</head>
<body>
  
    <!-- <img class="mr-3" src="rdpr-1588574171.jpg" alt="logo" height="100px" width="100px"> -->
    
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="header.jpg" alt="img"  class="opacity" width="100%" height="500">
      <div class="carousel-caption">
        <h1  style="color:white">PANCHAYAT MANAGEMENT SYSTEM</h1>
       
      
      </div>   
    </div>
    <div class="carousel-item">
      <img src="header2.jpg" alt="Chicago" width="100%" height="500">
   
    </div>
    <div class="carousel-item">
      <img src="header3.jpg" alt="New York" width="100%" height="500">
       
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    
   



    <div class="container-fluid pl-0 pr-0">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
    <a class="navbar-brand" href="#">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon bg-dark"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="members_table.php">MEMBERS</a>
    </li>


    <!-- <li class="nav-item">
      <a class="nav-link" href="general_details_table.php">GENERAL DETAILS</a>
    </li> -->

    <li class="nav-item">
      <a class="nav-link" href="votings.php">VOTING</a>
    </li>
    <!-- Dropdown -->

  
    <li class="nav-item">
      <a class="nav-link" href="plantable.php">SCHEMES</a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href="complaint.php">COMPLAINTS</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="workers_table.php">EMPLOYEES</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="about_us.php">ABOUT US</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="contact_us.php">CONTACT ADMIN</a>
    </li>

  </ul>


 
  
</div>
    </nav>
    </div>
   <h1 style="color:green;text-align:center;margin-top:5px;">RECENT POSTS</h1>
    <?php 
   
   
   $conn=mysqli_connect("localhost","root","","mini");
   $sql="SELECT * FROM posts order by id";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){

?>
  <hr> <div class="container-fluid  mt-2" style="background-color:linen;">
       <div class="row ">
             <div class="col-sm-4  p-auto align-self-center ">
                 <?php echo '<img src="admin/upload/'.$row['pfile'].'" alt="img" width="340px;" height="250px;"  class="img-fluid justify-items-stretch">'?>
             </div>
                
             <div class="col-sm-8 align-self-center ">
                      <h4 style="text-align:center" class="mb-4"> <?php echo $row['ptitle']; ?></h4>
          
              
                      <?php echo $row['pdescription']; ?>
             </div> 
        </div>
   </div>
        
    
   <?php  
   
  }

?>
  

<?php
   }

   else{
     echo "no posts found";
   }
    
      ?>
 
</body>
</html>


