<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Detail Unggahan</title>
    <link rel="stylesheet" href="{{ asset("css/detail-style.css") }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      img[src=""]{display: none}
      video[src=""]{display: none}
    </style>
  </head>
<body>
{{-- Navbar --}}
<nav class="navbar">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1"><span style="color: white">FIL<span>CONNECT</span></span></span>
      <form class="d-flex" role="logout" action="/logout" method="post" onsubmit="return confirm('Anda yakin ingin logout?')">
        @csrf<button class="btn logout" type="submit">Log out</button>
      </form>
    </div>
  </nav>
{{-- End Of Navbar --}}
<a href="/halamanUtama" class="backtoposts"><img src="{{ asset("img/back-btn.png") }}" alt=""> <span>Posts</span></a>  
<div class="container-view-posts">
    <img src="{{ asset("img/profile-icon.jpg") }}" alt="profileIcon">
    <div class="container-view-posts2">
      <h6>User{{ $post->student_id }}</h6>
      <video controls autoplay loop>
        <source src="{{ asset($post->video) }}">
      </video><br>
      <img class="content-image" src="{{ asset($post->foto) }}" alt="content-image">
      <br><p>{{ $post->konten }}</p>
      <br>
      <p>Posted at {{ $post->created_at }}</p>
       <div class="reactions">
        <button class="btn-comment"><img src="{{ asset("img/comment-btn.png") }}" alt=""><span>0</span></button>
        <button class="btn-upvote"><img src="{{ asset("img/upvote-btn-removebg-preview.png") }}" alt=""><span>0</span></button>
      </div>
    </div>
  </div>
  <div class="container-comment">
    <img src="{{ asset("img/profile-icon.jpg") }}" alt="profileIcon">
    <form action="{{ url("/halamanDetailUnggahan") }}" method="post">
      @csrf
      <textarea name="komentar" id="komentar" cols="30" rows="2" placeholder="Write Your Comment"></textarea> 
      <button class="btn post" type="submit">Post</button>
    </form>   
  </div> 

  <div class="view-comments">
    <img src="{{ asset("img/profile-icon.jpg") }}"  alt="profileIcon">
    <div class="container-view-comments2">
      <h6>User+id</h6>
      <p>Template Komentar</p>
    </div>
  </div>    
    
</body>
</html>
