<?php
session_start();
header('location:data5.php');
?>
<html>
    <head>
        <title>Profile page</title>
    </head>
    <body> 
        <h1>Welcome <?php echo $_SESSION['username'] ?> </h1>

</body>
</html>