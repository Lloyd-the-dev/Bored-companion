<?php
        session_start();
        if (!isset($_SESSION["user_id"])) {
            header("Location: login.html");
            exit();
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/fav-icon.png">
    <link rel="stylesheet" href="../CSS/landingPage.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h1>Hello, <?php echo $_SESSION["name"]?></h1>
        <h3>With the Boredom Companion, bored days become a thing of the distant past😁</h3>
        <a href="./chat.html" class="start-btn">Start Chatting</a>
    </div>
    
</body>
</html>