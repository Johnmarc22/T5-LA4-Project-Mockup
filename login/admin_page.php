<?php

session_start();
if(!isset($_SESSION['email'])){
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="socialmedia.css">
</head>
<body style="align-items:center; justify-contents:center;">
    <div class="box"style="margin-right:30%">
        <h1>Welcome to<span>CO-nnect</span></h1>
        <p>This is an <span>Admin</span> page</p>
        <form action="logout.php">
            <button type="submit" >Logout</button>
        </form>
    </div>
</body>
</html>