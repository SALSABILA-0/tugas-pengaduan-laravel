<!DOCTYPE HTML>
<html>
    <head>
        <title> Login</title>
        <link rel="stylesheet" href="css/style1.css">
    </head>
   
    <body>
        <div class="login">
          <h2>Login</h2>
            <form action="proses_login.php" method="POST">
                <div class="mb-3">
                    <label for="username"class="form-label">Username</label><br>
                    <input type="username"class="form-control"id="username" name="username"><br>
                </div>
                <div class="mb-3">
                    <label for="password"class="form-label">Password</label><br>
                    <input type="password"class="form-control"id="password" name="password"><br>
                </div>
                    <button type="submit" name="" class="login-btn" style="margin-bottom: 15px;">Login</button>
                    <a href="<?php echo e(url('register_petugas')); ?>"> Registrasi Petugas</a></button></a>
            </form>
        </div>     
    </body>
</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/login.blade.php ENDPATH**/ ?>