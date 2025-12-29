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
    
    <nav class="navbar">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1"><span style="color: white">FIL<span>CONNECT</span></span></span>
          <form class="d-flex" role="search">
            <a href="loginpage.blade.php" style="margin-top: 5px">Login</a>
            <a href="daftarAkun.blade.php"><button class="btn sign-up" method='get'>Sign Up</button></a>
          </form>
        </div>
      </nav>
    
    
    <div class="container">
      <div class="container-left">
        <h3>Join the FILCONNECT Comunity</h3>
        <li>Stuck? Discuss with each other</li>
        <li>Get important information from the filconnect discussion app</li>
        <li>Connecting with fellow computer science students at University of Brawijaya</li>
    </div>
    <div class="container-right">
            <h4>Sign Up</h4>
            <p>Nama</p>
            <form action="" method="post">
              <input type="text" name="emaillogin" id="emaillogin">
            </form>
            <p>Email</p>
            <form action="" method="post">
              <input type="text" name="loginpass" id="loginpass">
            </form>
            <p>Password</p>
            <form action="" method="post">
              <input type="password" name="emaillogin" id="emaillogin">
            </form>
            <p>Confirm Password</p>
            <form action="" method="post">
              <input type="password" name="emaillogin" id="emaillogin">
            </form>
            <button class="btn sign-in">Sign up</button>
    </div>
    </div>
    
    <footer></footer>
</body>
</html><?php /**PATH D:\MyPrograms\laravel projects\filconnect\resources\views/daftarAkun.blade.php ENDPATH**/ ?>