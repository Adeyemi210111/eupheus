<?php

include('includes/navbar.php');
session_start();
$error = '';
if(isset($_POST['login'])){
   
    function validateformdata($formdata){
        $formdata = trim( stripslashes( htmlspecialchars( $formdata) ) );
        return $formdata;
    }
       $userid = validateformdata( $_POST['userid']);
        $pass = validateformdata( $_POST['password']);
    
   
        
        include('connection.php');
        
        $query = "SELECT * FROM member";
        $result = mysqli_query($conn, $query);
  
    if(mysqli_num_rows($result) > 0 ){
    while($row= mysqli_fetch_assoc($result) ) {
    if(($row['mem_id']) == $userid){
        
        if(Password_verify($pass, $row['password'])){
           $_SESSION ['loggedinuser'] = $userid;
             $_SESSION ['loggedinemail'] = $email;
           $_SESSION ['loggedin'] = true;
           header('location: dash.php');
        }else{
             $error = "<div class = 'alert alert-danger'>wrong username/password combination. try again.<a class = 'close' data-dismiss='alert'>&times;</a></div>";
        }
        
    }else{ 
        $error = "<div class = 'alert alert-danger'>wrong username/password combination. try again.<a class = 'close' data-dismiss='alert'>&times;</a></div>";
    }
        mysqli_close($conn);
    }
}
}



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Adeyemi Oluwatobi Joseph, GMC Contributors">
    <meta name="generator" content="Jekyll v3.8.5">
   

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      
  </head>
<title>Login</title>

    <!-- Custom styles for this template -->
    <link href="login.css" rel="stylesheet">

  <body class="text-center">
      
    <form class="form-signin" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post">
  <?php echo $error; ?>
        <img class="mb-4" src="/images/logo.png" alt="" width="72" height="72">
  <label for="username" class="sr-only">username</label>
  <input type="text" name="userid" id="username" class="form-control" placeholder="Membership ID" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Log-in</button>
    <small class="text-center">Not a member? <a href="bam.php">Become a member</a></small>
  <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>
</body>
</html>