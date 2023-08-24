<?php 
    include "config.php";


    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT user_id, Username, Email, Password FROM user_details WHERE Username = '$username' AND Password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        session_start();
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["name"] = $row["Username"];
        $_SESSION["mail"] = $row["Email"];
        
        header("Location: landingPage.php"); // Redirect to user dashboard 
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>"; 

    }     

    $con->close();
   
?>