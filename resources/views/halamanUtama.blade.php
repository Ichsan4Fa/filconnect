<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="{{ asset("css/main-style.css") }}" />
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
          <form action="/logout" method='post' class="d-flex" onsubmit="return confirm('Anda yakin ingin logout?')" role="logout">
            @csrf<button type="submit" class="btn logout">Log out</button>
          </form>
        </div>
      </nav>
    {{-- End Of Navbar --}}
    {{--  --}}

      <div class="container-latest">
        <a href=""><h2>Latest</h2></a>
      </div>
      <div class="container-upvote">
        <a href=""><h2>Upvote</h2></a>
      </div>  
      @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      <div class="container-post">
        <img src="img/profile-icon.jpg" alt="profileIcon">
        <form action="{{ url("/halamanUtama") }}" method="post">
          @csrf
          <textarea name="konten" id="konten" cols="30" rows="2" class="form-control @error('konten') is-invalid @enderror" placeholder="Share what you're up to!"></textarea>
          @error('konten')
          <div class="invalid-feedback">
            Unggahan terdiri dari maksimal 500 karakter
          </div>
          @enderror
          <br>
          <label for="foto"><img src="img/image-input.png" alt="imageIcon"></label>
          <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id="foto" style="display: none">
          @error('foto')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
          <label for="video"><img src="img/video-input.png" alt="videoIcon"></label>
          <input type="file" name="video" id="video" class="form-control @error('video') is-invalid @enderror" style="display: none">
          @error('video')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
          <button type="submit" class="btn post" method='get'>Post</button>
        </form>
      </div>
         @foreach ($posts as $post) 
          <div class="container-view-posts">
            <img src="img/profile-icon.jpg" alt="profileIcon">
            <div class="container-view-posts2">
            <h6>User{{ $post->student_id }}</h6>
              <video controls autoplay loop>
                <source src="{{ asset($post->video) }}">
              </video><br>
              <img class="content-image" src="{{asset($post->foto)}}" alt="content-image">
            <p>{{ $post->konten }}</p>
             <div class="reactions">
              <form action="{{url("/halamanDetailUnggahan/{$post->id}") }}"><button class="btn-comment" method='get'><img src="img/comment-btn.png" alt=""><span>0</span></button></form>
              <form action="{{url("/halamanDetailUnggahan/{$post->id}")}}"><button class="btn-upvote" method='get'><img src="img/upvote-btn-removebg-preview.png" alt=""><span>0</span></button></form>
            </div>
            </div>
          </div>
         @endforeach
          {{--  --}}
</body>
</html>