<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="css/login-style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
  </head>
  <body>
    
      <nav class="navbar">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1"><span style="color: white">FIL<span>CONNECT</span></span></span>
          <form class="d-flex" role="search">
            <a href="/loginpage" style="margin-top: 5px">Login</a>
            <a href="/halamanregister"><button class="btn sign-up" method='get'>Sign Up</button></a>
          </form>
        </div>
      </nav>
    
    
      <div class="container">
        <div class="container-left">
          <img src="img/login-image.png" alt="">
      </div>
      <div class="container-right">
              <h4>Login</h4>
              <p>Email</p>
              <form action="" method="post">
                <input type="text" name="emaillogin" id="emaillogin">
              </form>
              <p>Password</p>
              <form action="" method="post">
                <input type="password" name="loginpass" id="loginpass">
              </form>
               <button class="btn sign-in">Sign in</button>
               <p>Don't have an account?<a href="/halamanregister">Sign up</a></p>
      </div>
      </div>
        
    
    <footer></footer>
    <script>
      var logIn = document.getElementById("logIn");
      if (logIn) {
        logIn.addEventListener("click", function (e) {
          // Please sync "Login" to the project
        });
      }
      
      var rectangleButton1 = document.getElementById("signu-button");
      if (rectangleButton1) {
        rectangleButton1.addEventListener("click", function (e) {
          // Please sync "Sign Up" to the project
        });
      }
      </script>
      
  </body>
</html>
<?php /**PATH D:\MyPrograms\laravel projects\filconnect\resources\views/loginpage.blade.php ENDPATH**/ ?>