<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="prof.css">
    
</head>
<body>
     <header>
        <div class="navbar">
            <a href="#" onclick="opennotif()">Notification</a>        
            <a href="#" onclick="openmessage()"> Messages</a>
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
        <div id="msg" class="msg">
            <a href="javascript:void(0)" class="closenotifs" onclick="closemessage()">&times;</a>
            <h2>Messages</h2>
            <a href="#"><h2>John Carlo:</h2> ang pogi mo lods</a>
            <a href="#"><h2>John Marc:</h2> mas pogi ako</a>
        </div>
        <div id="notifs" class="notifs">
            <a href="javascript:void(0)" class="closenotifs" onclick="closenotif()">&times;</a>
            <a href="#">carlo likes your photo</a>
            <a href="#">john marc likes your photo</a>
        </div>
    </header>
    <main>        
    <div class="profile-section">
  
        <img id="cover-pic" src="http://localhost/login/logo.png" alt="Cover Picture">
  
       
  <img id="profile-pic" src="http://localhost/login/logo.png" alt="Profile Picture">
    <label for="cover-pic-upload">Change Cover Picture</label>
    <input type="file" id="cover-pic-upload" accept="http://localhost/login/*">
    <label for="profile-pic-upload">Change Profile Picture</label>
  <input type="file" id="profile-pic-upload" accept="http://localhost/login/*">

  
  </div>
  <div class="pagyanan">
  <div class="postsection">
  <h2>Create a Post</h2>
    <form id="postForm" class="posts">
        <input type="text" id="title"name="title" placeholder="Post Title" required>
        <textarea id="content" name="content"placeholder="Post Content" required></textarea>
        <input type="file" name="image" id="image" accept="http://localhost/login/*">
        <button type="submit">Upload Post</button>
    </form>

   
</div>
<div class="uploadedposts">
 <h2>All Posts</h2>
    <div id="posts-container"></div>
</div>
</div>
</main>  
<script src="prof.js"></script>
</body>
</html>