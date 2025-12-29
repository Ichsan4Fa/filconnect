<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="css/login-style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Alfa Slab One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Jua:wght@400&display=swap"
    /> --}}
  </head>
  <body>
    {{-- Navbar --}}
      <nav class="navbar">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1"><span style="color: white">FIL<span>CONNECT</span></span></span>
          <form class="d-flex" role="search">
            <a href="/halamanLogin" style="margin-top: 5px">Login</a>
            <form action="/halamanRegister" method='get'><button type="submit" class="btn sign-up" >Sign Up</button></form>
          </form>
        </div>
      </nav>
    {{-- End Of Navbar --}}
    {{--  --}}
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
      <div class="container">
        <div class="container-left">
          <img src="img/login-image.png" alt="">
      </div>
      <div class="container-right">
              <h4>Login</h4>
              <form action="{{ route("halamanLogin") }}" method="post">
                @csrf
                <label for = "email">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}"><br>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <label for = "password">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required><br>
                <button class="btn sign-in" type="submit">Sign in</button>
                
              </form>
               <p>Don't have an account?<a href="/halamanRegister">Sign up</a></p>
      </div>
      </div>
        
    {{--  --}}
    <footer></footer>
      
  </body>
</html>
