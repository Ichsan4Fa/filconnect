<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="css/register-style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1"><span style="color: white">FIL<span>CONNECT</span></span></span>
          <form class="d-flex" role="search">
            <a href="{{ url("/") }}" style="margin-top: 5px">Login</a>
            <a href="{{ url("/halamanRegister") }}"><button class="btn sign-up" method='get'>Sign Up</button></a>
          </form>
        </div>
      </nav>
    {{-- End Of Navbar --}}
    {{--  --}}
    <div class="container">
      @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
      <div class="container-left">
        <h3>Join the FILCONNECT Comunity</h3>
        <li>Stuck? Discuss with each other</li>
        <li>Get important information from the filconnect discussion app</li>
        <li>Connecting with fellow computer science students at University of Brawijaya</li>
    </div>
    <div class="container-right">
            <h4>Sign Up</h4>
            <form action="{{ url("halamanRegister") }}" method="post">
              @csrf
              <label for='nama'>Nama</label><br>
              <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" required value="{{ old('nama') }}"><br>
              @error('nama')
              <div class="invalid-feedback">
               Data tidak boleh ada yang kosong
              </div>
              @enderror
              <label for="email">Email</label><br>
              <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}"><br>
              @error('email')
                <div class="invalid-feedback">
                   Email telah digunakan atau tidak valid
                </div>
              @enderror
              <label for = 'pass'>Password</label><br>
              <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror"><br>
              @error('password')
                <div class="invalid-feedback">
                  Data tidak boleh ada yang kosong
                </div>
              @enderror
              <button class="btn sign-in" type="submit">Sign up</button>
            </form>
    </div>
    </div>
    {{--  --}}
    <footer></footer>
</body>
</html>