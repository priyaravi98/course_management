

<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New User</div>
  <div class="card-body">
       
  <form action="<?php echo e(url('userdetails')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <label>UserId</label></br>
        <input type="text" name="user_id" id="user_id" class="form-control"></br>
        <label>FirstName</label></br>
        <input type="text" name="firstname" id="firstname" class="form-control"></br>
        <label>LastName</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control"></br> 
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\course\resources\views/userdetails/create.blade.php ENDPATH**/ ?>