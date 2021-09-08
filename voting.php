
<?php
 
 
 $conn=mysqli_connect("localhost","root","","mini") ;
 $msg="";

 if(isset($_POST['candidate1']))
   {
   
      $vote_candidate1="UPDATE voting SET candidate1=candidate1+1";
      $run_candidate1=mysqli_query($conn,$vote_candidate1);
  
       if($run_candidate1)
          {
            
              $msg="you have voted for candidate1";
              session_start();
              $sql="DELETE FROM users WHERE uname='{$_SESSION['uname']}'";
              $result=mysqli_query($conn,$sql) or die('query Failed');
              if($result){
              header("location:index.php");}
          }
   }


  if(isset($_POST['candidate2']))
  {
   
    $vote_candidate2="UPDATE voting SET candidate2=candidate2+1";
    $run_candidate2=mysqli_query($conn,$vote_candidate2);
    
    if($run_candidate2)
    {   
      
         $msg="you have voted for candidate2";
         
         session_start();
         $sql="DELETE FROM users WHERE uname='{$_SESSION['uname']}'";
         $result=mysqli_query($conn,$sql) or die('query Failed');
         if($result){
         header("location:index.php");
        }
     
    }

  } 


     if(isset($_POST['candidate3']))
    {
   
      $vote_candidate3="UPDATE voting SET candidate3=candidate3+1";
      $run_candidate3=mysqli_query($conn,$vote_candidate3);
      
      if($run_candidate3)
      {    
        

          $msg="you have voted for candidate3";
          session_start();
          $sql="DELETE FROM users WHERE uname='{$_SESSION['uname']}'";
          $result=mysqli_query($conn,$sql) or die('query Failed');
          if($result){
          header("location:index.php");}
      }

    }

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voting</title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link  rel="stylesheet" href="voting.css">
</head>
<body>
    <h1 style="text-align:center;color:aqua;">ONLINE VOTING</h1><br><br>
    
<h5 style="color:white;"><?php session_start(); echo "Welcome ".$_SESSION['uname']."! Cast your vote here";?></h5>
     <form method="post" >
          
    <div class="container ">
          <div class="row justify-content-around ">   
            
             <div class="col-sm-3 m-1  p-sm-1  ">
                <div class="card" style="100%">
                    <h2>CANDIDATE1</h2>
                    <img class="styling img-fluid" src="messi.jfif" alt="candidate1">
                   
                    <div class="card-body " style="text-align:center">
                      <input  type="submit"name="candidate1" value="vote for candidate1">
                     
                    </div>
                </div>
             </div>  
      
            
            
             <div class="col-sm-3 m-1 p-sm-1 ">
                <div class="card" style="width:100%">
                    <h2 >CANDIDATE2</h2>
                    <img class="styling img-fluid" src="ronaldo.jfif" alt="ronaldo">
                    
                    <div class="card-body"  style="text-align:center">
                       <input type="submit"name="candidate2" value="vote for candidate2">
                       
                    </div>
                </div>
            </div>
                
           
           
            <div class="col-sm-3 m-1 p-sm-1   ">
                <div class="card" style="width:100%">
                      <h2>CANDIDATE3</h2>
                      <img class="styling img-fluid" src="naymer.jfif" alt="candidate3">
                      
                      <div class="card-body"  style="text-align:center">
                         <input type="submit" name="candidate3" value="vote for candidate3">
                       
                      </div>
                </div>
             </div>
    
     </div> 
    <br><br> <h4 style="text-align:center;color:white;"><?php echo $msg; ?></h4>
  </div>
       
  </form> 


</body>
</html>




