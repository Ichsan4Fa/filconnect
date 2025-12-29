<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Unggahan</title>
    <link rel="stylesheet" href="css/detail-style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1"><span style="color: white">FIL<span>CONNECT</span></span></span>
      <form class="d-flex" role="logout">
        <a href="daftarAkun.blade.php"><button class="btn logout" method='get'>Log out</button></a>
      </form>
    </div>
  </nav>

<a href="/halamanUtama" class="backtoposts"><img src="img/back-btn.png" alt=""> <span>Posts</span></a>  
<div class="container-view-posts">
    <img src="img/profile-icon.jpg" alt="profileIcon">
    <div class="container-view-posts2">
      <h6>Username</h6>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus enim cum deserunt, 
      placeat beatae non veniam blanditiis voluptatibus,
       nihil delectus quia iure adipisci quibusdam vitae unde accusamus? Ad, eveniet harum.</p>
       <div class="reactions">
        <button class="btn-comment" method='get'><img src="img/comment-btn.png" alt=""><span>777</span></button>
        <button class="btn-upvote" method='get'><img src="img/upvote-btn-removebg-preview.png" alt=""><span>123</span></button>
      </div>
    </div>
  </div>
  <div class="container-comment">
      <img src="img/profile-icon.jpg" alt="profileIcon">
      <textarea name="inputComment" id="inputComment" cols="30" rows="2" placeholder="Write Your Comment"></textarea>
      <a href="daftarAkun.blade.php"><button class="btn post" method='get'>Post</button></a>   
  </div>
  <div class="view-comments">
    <img src="img/profile-icon.jpg" alt="profileIcon">
    <div class="container-view-comments2">
      <h6>Username35</h6>
      <p>Hai Juga.</p>
      <div class="reactions">
        <button class="btn-comment" method='get'><img src="img/comment-btn.png" alt=""><span>777</span></button>
        <button class="btn-upvote" method='get'><img src="img/upvote-btn-removebg-preview.png" alt=""><span>123</span></button>
      </div>
    </div>
  </div>  
</body>
</html>
<?php /**PATH D:\MyPrograms\laravel projects\filconnect\resources\views/detailUnggahan.blade.php ENDPATH**/ ?>