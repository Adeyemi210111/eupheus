<?php session_start(); 
include('connection.php');


if(isset($_POST["Submit1"]))
{
    $_SESSION['yourname']= $_POST['str1'];
    $_SESSION['yourid']=$_POST['put'];
    $you = $_SESSION['yourname'];
    $id = $_SESSION['yourid'];
    
    $query= "SELECT * FROM profile_info WHERE mem_id='$id'";
    $ans = mysqli_query($conn, $query);
             if(mysqli_num_rows($ans) > 0 ){
                    echo "user already exist";

                }else{
                   $sql = "INSERT INTO profile_info (full_name, mem_id)
                    VALUES ('$you', '$id')";
                        $result= mysqli_query($conn, $sql);
                    }
}

?>


  
   





<html>
<head>
<title>PHP isset() example</title>
</head>
<body>
 
<form method="post">
 
name :<input type="text" name="str1"><br/>
           id: <input name="put">
    <button type="submit" value="Sum" name="Submit1">sum</button><br/><br/>
 

 
</form>
</body>
</html>