<?php

$server = "localhost";
$db_username = "root";
$db_password = "root";
$db_name ="gmc";

//create a connection
$conn = mysqli_connect($server, $db_username, $db_password, $db);
$db = mysqli_select_db($conn, 'gmc');
//check connection
//if (!$conn){
    //die("connection failed: " . mysqli_connect_error());
//}

//echo "connected succesfully!";


//$sql = "SELECT * FROM member";
//$result = mysqli_query($conn, $sql);

/* if(mysqli_num_rows($result) > 0 ){
    while($row= mysqli_fetch_assoc($result)){
    echo $row['username'];
    }
}else{
    echo "oops, no data";
} */

?>