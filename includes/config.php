<?php 
    define("TITLE", "GMC Login Page" ); 
 //connect to database
    include('connection.php') 
//check if form is submitted
 if(isset($_POST['login'])){
    //build a function to validate data
    function validateformdata($formdata){
        $formdata=trim(stripslashes(htmlspecialchars($formdata)));
        return $formdata;
    }
    //create variables
    //wrap the data with our function
    $formuser = validateformdata($_POST['username']);
    $formpass = validateformdata($_POST['password']);
    
     //create sql query
    $query = "SELECT username,email,password FROM users WHERE username='$formuser'";
     //store the result
     $result = mysqli_query ($conn, $query);
     //verify if result is returned
        if(mysqli_num_rows($result) > 0 ){
            //store basic user data in variables
            while($row = mysqli_fetch_assoc($result)){
                $user = $row['username'];
                $email = $row['email']
                $pass = $row['password']
            }
       //verify hashed password with the typed password
        if (Password_verify($formpass, $pass)){
            //correct login details
            //start the session
            session_start();
            //store data in session variable
            $_SESSION ['loggedinuser'] = $user;
             $_SESSION ['loggedinemail'] = $email;
            
            
            header ("location: profile.php");
        }else{
            $loginerror = "<div class='alert alert-danger'>Wrong username/password combination. try again.</div>";
        }
     }else{
            $loginerror =  "<div class='alert alert-danger'>Wrong username/password combination. try again.</div>
            <a class='close' data-dismiss = 'alert'>&times;</a>";
            
        }
mysqli_close($conn);     
}



?> 
