<!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <header>
        <div class="navbar">
            <a href="#" onclick="opennotif()">Notification</a>        
            <a href="#" onclick="openmessage()"><i class="envelope"></i> Messages</a>
            <a class="active" href="user_page.php"><i class="home"></i> Home</a>
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
            <h2>Messages</h2>
            <a href="#"><h2>John Carlo:</h2> ang pogi mo lods</a>
            <a href="#"><h2>John Marc:</h2> mas pogi ako</a>
        </div>
    </header>
    <div class="profile-section">
    <img id="profile-pic" src="http://localhost/login/logo.png" alt="Profile Picture">

    <div class="content" id="content">
        
        <h1>Welcome to Co-nnect </h1>
        <p>Let our world full of connection with Co-nnect</p><br>
        <p>This is your social media companion</p>
    </div>
</div>
    <script src="about.js"></script>
</body>
</htm