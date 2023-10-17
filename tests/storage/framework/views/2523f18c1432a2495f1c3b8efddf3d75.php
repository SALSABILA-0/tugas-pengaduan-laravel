

<?php $__env->startSection('content'); ?>
<body>
  <style>
    body{
      background-color: rgb(253, 222, 135);
    }
  </style>

<div class = "container">
  <br>
<table class="table table-dark table-striped">
  
  <thead>
    <tr>
      <th scope="col">Nik</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $masyarakat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $masyarakat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($masyarakat->nik); ?></td>
      <td><?php echo e($masyarakat->nama); ?></td>
      <td><?php echo e($masyarakat->username); ?></td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/table_masyarakat.blade.php ENDPATH**/ ?>