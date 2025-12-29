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
            <a href="/halamanLogin" style="margin-top: 5px">Login</a>
            <form action="/halamanRegister" method='get'><button type="submit" class="btn sign-up" >Sign Up</button></form>
          </form>
        </div>
      </nav>
    
    
    <?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?php echo e(session('success')); ?>

      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <?php if(session()->has('loginError')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?php echo e(session('loginError')); ?>

      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
      <div class="container">
        <div class="container-left">
          <img src="img/login-image.png" alt="">
      </div>
      <div class="container-right">
              <h4>Login</h4>
              <form action="<?php echo e(route("halamanLogin")); ?>" method="post">
                <?php echo csrf_field(); ?>
                <label for = "email">Email</label>
                <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" required value="<?php echo e(old('email')); ?>"><br>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <label for = "password">Password</label>
                <input type="password" name="password" id="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required><br>
                <button class="btn sign-in" type="submit">Sign in</button>
                
              </form>
               <p>Don't have an account?<a href="/halamanRegister">Sign up</a></p>
      </div>
      </div>
        
    
    <footer></footer>
      
  </body>
</html>
<?php /**PATH D:\MyPrograms\laravel projects\filconnect\resources\views/halamanLogin.blade.php ENDPATH**/ ?>