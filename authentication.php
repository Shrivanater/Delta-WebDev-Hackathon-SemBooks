<?php
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "phpSemBooks";  
          
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }       

    $roll_no = $_POST['roll_no'];  
    $password = $_POST['password'];    
      
    $sql = "select * from users where roll_no = '$roll_no' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){       
        session_start();
        $_SESSION["roll_no"] = $roll_no;
        $_SESSION["logged_in"] = true;    

        header("Location: Pain.php"); 
    }  
    else{  
        echo("Invalid Username or Password");   
    }                  
?>  