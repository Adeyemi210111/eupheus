<?php session_start(); 
include('connection.php');
 $logid = $_SESSION['loggedinuser'];
?>

 <?php
if(isset($_POST["submit"]))
{
   
    $_SESSION['yourid']= $_POST['idno'];
$_SESSION['yourname']=$_POST['fullname'];
$_SESSION['youremail']=$_POST['email'];
$_SESSION['yourschool']=$_POST['school'];
$_SESSION['yourdept']=$_POST['department'];
$_SESSION['yourlevel']=$_POST['level'];
$_SESSION['yourcgpa']=$_POST['cgpa'];
$_SESSION['yourphone']=$_POST['phone'];
$_SESSION['yourabout']=$_POST['aboutme'];
$_SESSION['yourtwitter']=$_POST['twitter'];
$_SESSION['yourfacebook']=$_POST['facebook'];
$_SESSION['yourinstagram']=$_POST['instagram'];
$_SESSION['yourlinkedin']=$_POST['linkedin'];
   
$id = $_SESSION['yourid'];
$name = $_SESSION['yourname'];
$email = $_SESSION['youremail'];
$school = $_SESSION['yourschool'];
$dept = $_SESSION['yourdept'];
$level = $_SESSION['yourlevel'];
$cgpa = $_SESSION['yourcgpa'];
$phone = $_SESSION['yourphone'];
$about = $_SESSION['yourabout'];
$twitter =$_SESSION['yourtwitter'];
$facebook = $_SESSION['yourfacebook'];
$instagram = $_SESSION['yourinstagram'];
$linkedin = $_SESSION['yourlinkedin'];
    
    
     $query= "SELECT * FROM profile_info WHERE mem_id='$logid'";
    $ans = mysqli_query($conn, $query);
             if(mysqli_num_rows($ans) > 0 ){
                   $error = 'sorry, a user with the id already exists. Please contact the hr for help and support';

                }else{
                   $sql = "INSERT INTO profile_info (mem_id, full_name, email, institution, department, level, cgpa, phone, about, twitter, facebook, instagram, linkedin)
VALUES ('$id', '$name', '$email', '$school', '$dept', '$level', '$cgpa', '$phone', '$about', '$twitter', '$facebook', '$instagram', '$linkedin')";
    $result= mysqli_query($conn, $sql);
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
    <title>Account</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      
   
  </head>
  
    <body>
    
      <?php 
       
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
                
                <div class="form">
                    
                    
   
        
    <form method="post">
           <div class="alert alert-danger"><?php echo $error; ?></div>
            <h2>Basic Account Information</h2>
                <small>(These settings include basic information about your account.)<br>Note: all information's are regarded as confidential, and are treated as such.</small><br>
  
  <div class="form-group">           
      <label for="idno"> ID</label>
    <input type="text" class="form-control" value="<?php echo $logid; ?>" id="idno" name="idno">
      <small>(this id identifies you as a member of the community. <em>Note: you cannot change your id</em>)</small>
  </div>
 <div class="form-group">           
      <label for="fullname"> Full-name</label>
    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="input your fullname here">
      <small>(the  name that was used for your ID verfication <em>Note: this is the name that will be displayed on your certificate</em>)</small>
  </div>
<div class="form-group">           
      <label for="email"> Email Address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="input your email here">
      
  </div>

<div class="form-group">           
      <label for="school"> Institution</label>
    <input type="text" class="form-control" id="school" name="school" placeholder="input your institution of study">
      <small>(this is your current institution of study)</small>
  </div>
<div class="form-group">           
      <label for="department"> Department</label>
    <input type="text" class="form-control" id="department" name="department" placeholder="input your department">
      <small>(this is your current course of study)</small>
  </div>
  <div class="form-group">           
      <label for="level"> Level</label>
    <input type="text" class="form-control" id="level" name="level" placeholder="input your Level">
      <small>(this is your current level of study)</small>
  </div>  
<div class="form-group">           
      <label for="cgpa"> CGPA</label>
    <input type="text" class="form-control" id="cgpa" name="cgpa" placeholder="input your current CGPA">
      <small>(this is just to help us understand how to help you better. <em>Note: this is optional</em>)</small>
  </div>  
 <div class="form-group">           
      <label for="phone"> Phone Number</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="input your phone number">
  </div> 
  <div class="form-group">
    <label for="aboutme">About Me</label>
    <textarea class="form-control" id="aboutme" name="aboutme" rows="3" placeholder="Tell us a bit about yourself (maximum of 200 characters)"></textarea>
  </div>
    
     
            <!-- Gender -->
            <div class="form-group">
        <label for="gender1" class="col-sm-2 control-label">Gender</label>
        <div class="col-sm-2">
        <select class="form-control" id="gender1">
          <option>Male</option>
          <option>Female</option>
        </select>          
          
        </div>
</div>    
                        
<h2>Social Media Links</h2>
<div class="form-group">           
      <label for="twitter"> Twitter</label>
    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="e.g @Adeyemi tobi">
  </div>
<div class="form-group">           
      <label for="facebook"> Facebook</label>
    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="e.g Adeyemi tobi">
  </div>  
<div class="form-group">           
      <label for="instagram"> Instagram</label>
    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="e.g @Adeyemi tobi">
  </div> 
<div class="form-group">           
      <label for="linkedin">Linkedin</label>
    <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="e.g @Adeyemi tobi">
  </div>
<button class="btn btn-sm btn-success" type="submit" name="submit">Submit</button><br><br>
    </form>
 </div>
                    
                    
     
     
        
 <!-- file upload -->
<form action="upload.php" method="post" enctype="multipart/form-data">
 <span>CV Upload</span><br>
    Select file to upload:
   
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit"><br>
    <small>(Optional. Note: all data are regarded as private, and are treated as such)</small>
</form><br>
                   
<!--password reset -->
    <form method="post" action="/reset.php">
<span>Password Reset</span><br>
<button class="btn btn-danger">Reset Your Password</button><br>
      <small>(check your email account for procedures on how to reset your password)</small>
</form>                
                    
  
        
<!-- to delete account -->
<form method="post" action="/delete.php">
<h2>Delete My Account</h2>
<small>We're Sorry to See You Go<br></small>
<strong>Please note: Deletion of your account and personal data is permanent and cannot be undone. Eupheus Academy will not be able to recover your account or the data that is deleted.
Once your account is deleted, you cannot use it to take courses or enjoy any other benefit as a member of Eupheus Academy on the app; eupheusacademy.com or any other sites hosted by Eupheus Academy.</strong><br><br>

<div class="alert alert-danger" role="alert">Warning: Accounts Deletion is permanent. Please read the above carefully before proceeding. This is an irreversible action, and you will no longer be able to use the same email on this website.</div><br>

</form>
            <!-- button to activate modal window -->
            <div class="form-group">           
  <button class="btn btn-danger" data-toggle="modal" data-target="#Modal1">Delete My Account</button><br>
      
   
    <!-- Modal -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel1">Delete My Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are you sure you want to permanently delete your account?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger">Yes, delete my account</button>
      </div>
    </div>
  </div>
</div>
    
    
  </div>

        
        
        
        
       
                    
                    
                
                    
                    
                    
                </div>
                </div>
            
            </div>
      
       
       
       
       
        
        <style>
            
            div.main{
                background:white;
                border:solid 1px grey;
            }
        
             div.form{
            display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
padding-left:40px;
 
        }
            
            h2{
                text-decoration: underline;
            }
        
        
        #aboutme{
             width: 100%;
  width: 400px;
  padding: 15px;
  margin: auto;
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
