<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="<?php echo e(asset("css/main-style.css")); ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      img[src=""]{display: none}
      video[src=""]{display: none}
    </style>
  </head>
<body>
    
    <nav class="navbar">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1"><span style="color: white">FIL<span>CONNECT</span></span></span>
          <form action="/logout" method='post' class="d-flex" onsubmit="return confirm('Anda yakin ingin logout?')" role="logout">
            <?php echo csrf_field(); ?><button type="submit" class="btn logout">Log out</button>
          </form>
        </div>
      </nav>
    
    

      <div class="container-latest">
        <a href=""><h2>Latest</h2></a>
      </div>
      <div class="container-upvote">
        <a href=""><h2>Upvote</h2></a>
      </div>  
      <?php if(session()->has('success')): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php endif; ?>
      <div class="container-post">
        <img src="img/profile-icon.jpg" alt="profileIcon">
        <form action="<?php echo e(url("/halamanUtama")); ?>" method="post">
          <?php echo csrf_field(); ?>
          <textarea name="konten" id="konten" cols="30" rows="2" class="form-control <?php $__errorArgs = ['konten'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Share what you're up to!"></textarea>
          <?php $__errorArgs = ['konten'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="invalid-feedback">
            Unggahan terdiri dari maksimal 500 karakter
          </div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <br>
          <label for="foto"><img src="img/image-input.png" alt="imageIcon"></label>
          <input type="file" name="foto" class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="foto" style="display: none">
          <?php $__errorArgs = ['foto'];
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
          <label for="video"><img src="img/video-input.png" alt="videoIcon"></label>
          <input type="file" name="video" id="video" class="form-control <?php $__errorArgs = ['video'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="display: none">
          <?php $__errorArgs = ['video'];
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
          <button type="submit" class="btn post" method='get'>Post</button>
        </form>
      </div>
         <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          <div class="container-view-posts">
            <img src="img/profile-icon.jpg" alt="profileIcon">
            <div class="container-view-posts2">
            <h6>User<?php echo e($post->student_id); ?></h6>
              <video controls autoplay loop>
                <source src="<?php echo e(asset($post->video)); ?>">
              </video><br>
              <img class="content-image" src="<?php echo e(asset($post->foto)); ?>" alt="content-image">
            <p><?php echo e($post->konten); ?></p>
             <div class="reactions">
              <form action="<?php echo e(url("/halamanDetailUnggahan/{$post->id}")); ?>"><button class="btn-comment" method='get'><img src="img/comment-btn.png" alt=""><span>0</span></button></form>
              <form action="<?php echo e(url("/halamanDetailUnggahan/{$post->id}")); ?>"><button class="btn-upvote" method='get'><img src="img/upvote-btn-removebg-preview.png" alt=""><span>0</span></button></form>
            </div>
            </div>
          </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
</body>
</html><?php /**PATH D:\MyPrograms\laravel projects\filconnect\resources\views/halamanUtama.blade.php ENDPATH**/ ?>