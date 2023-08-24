<?php 
    include "config.php";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    $sql = "INSERT INTO `user_details` (`user_id`, `Username`, `Email`, `Password`) VALUES ('0', '$username', '$email', '$password')";

    $rs = mysqli_query($conn, $sql);

      if($rs)
      {

        header("Location: login.html");
      }

      mysqli_close($conn);
?>