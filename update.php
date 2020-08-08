<?php session_start(); ?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Adeyemi Oluwatobi Joseph, GMC Contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Default Format</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      
    
  </head>
  
    <body>
       
        
        <?php
        echo $_SESSION['color'];
       
       /* 
        $query = "SELECT * FROM profile_info WHERE full_name= 'John'";
        $result = mysqli_query($conn, $query);
  
    if(mysqli_num_rows($result) > 0 ){
        echo "name already exist";
        
    }else{
        $sql = "INSERT INTO profile_info (full_name, email)
VALUES ('joseph', 'your@email')";

if ($conn->query($sql) === TRUE) {
    
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    }
       */ 
        
        ?>
        
        
 <!--   <alert class="alert-success">Congratulations!! your info has been updated successfully</alert> -->
      
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
