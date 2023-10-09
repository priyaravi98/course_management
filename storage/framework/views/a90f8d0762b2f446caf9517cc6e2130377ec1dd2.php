
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">User details</div>
  <div class="card-body">
        <div class="card-body">
        
        <h5 class="card-title">FirstName : <?php echo e($userdetails->firstname); ?></h5>
        <p class="card-text">User Id : <?php echo e($userdetails->user_id); ?></p>
        <p class="card-text">LastName : <?php echo e($userdetails->lastname); ?></p>
        <p class="card-text">Email : <?php echo e($userdetails->email); ?></p>
        <p class="card-text">Country : <?php echo e($userdetails->country); ?></p>
  </div>
    </hr>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\course\resources\views/userdetails/show.blade.php ENDPATH**/ ?>