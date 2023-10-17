<!DOCTYPE HTML>
<html>
    <head>
        <title>Daftar</title>
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
        <div class="daftar">
          <h2>Registrasi</h2>

            <form method="POST" action="register"> 
              <?php echo method_field('POST'); ?>
              <?php echo csrf_field(); ?>
                <input name="tujuan" type="hidden" value="Daftar" >
                <div class="Daftar">
               
                <label>Id</label>
                <br>
                <input name="id_petugas" type="text" required >
                <br>
                <label>Nama</label>
                <br>
                <input name="nama_petugas" type="text" required >
                <br>
                <label>Username</label>
                <br>
                <input name="username" type="text" required >
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password" required >
                <br>
                <label>Telp</label>
                <br>
                <input name="no_telp" type="text" required >
            
                
                 
                

                <button type="submit">Daftar</button>
                <a href="<?php echo e(url('login')); ?>"><button type="submit">Kembali </a> 
                </form><?php /**PATH C:\xampp\htdocs\example-app\resources\views/registrasi_petugas.blade.php ENDPATH**/ ?>