<?php session_start(); 
include('connection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Adeyemi Oluwatobi Joseph, GMC Contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>DashBoard</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      
   
  </head>
  
    <body>
    
      <?php 
        $logid = $_SESSION['loggedinuser'];
       $sql = "SELECT * FROM profile_info WHERE mem_id='$logid'";
$result = mysqli_query($conn, $sql);

 if(mysqli_num_rows($result) > 0 ){
    while($row= mysqli_fetch_assoc($result) ) {
        $info = "Welcome". " ". $row["full_name"];
    }
}
     ?> 
        <div id="welcome">
        <?php  
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   echo $info ; 
    
   
} else {
   header ('location: login.php');
   
}

?>
           
           
        </div> 
        
       <br>
        
        <div class="container">
            <div class="row">
            <div class="col-md-3 side"><br>
               <?php include_once('includes/dashside.php');?>
                </div>
                <div class="col-md-9 main">
                
                </div>
            
            </div>
        
        </div>
       
        
        <style>
            
            div.main{
                background:white;
                border:solid 1px grey;
            }
        
        </style>
        
        
         <script src="/jquery/jquery-3.3.1.js"></script>
        <script src="script.js"></script>
    </body>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
