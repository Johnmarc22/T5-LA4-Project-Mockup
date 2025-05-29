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
    <title>User page</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <header>
        <div class="navbar">
            <a href="#" onclick="opennotif()">Notification</a>        
            <a href="#"onclick="openmessage()"> Messages</a>
            <a class="active" href="user.css"> Home</a>
            <span onclick="openNav()">Profile</span>
            <div class="logo">
                <img src="http://localhost/login/logo-transparent.png" alt="" class="imglogo">
            </div>
        </div> 
         <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="profile.php">Profile</a>
            <a href="about.php">About</a>
            <a href="logout.php">Logout</a>
        </div>
        <div id="notifs" class="notifs">
            <a href="javascript:void(0)" class="closenotifs" onclick="closenotif()">&times;</a>
            <a href="#">carlo likes your photo</a>
            <a href="#">john marc likes your photo</a>
        </div>
        <div id="msg" class="msg">
            <a href="javascript:void(0)" class="closenotifs" onclick="closemessage()">&times;</a>
            <a href="#"><h1>John Carlo:</h1> ang pogi mo lods</a>
            <a href="#"><h1>John Marc:</h1> mas pogi ako</a>
        </div>
    </header>          
    <main>
  

   
</div>
</div>
    <div class="content" id="content">
        <h1>Welcome to CO-nnect</h1>
        <p>main content</p>
           
</div>
    </div>
</main>
    
  
   <script src="user_page.js"></script>
</body>
</html>