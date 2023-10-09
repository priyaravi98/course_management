
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="<?php echo e(url('userdetails/' .$userdetails->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($userdetails->id); ?>" id="id" />
        <label>User Id</label></br>
        <input type="text" name="user_id" id="mobile" value="<?php echo e($userdetails->user_id); ?>" class="form-control"></br>
        <label>FirstName</label></br>
        <input type="text" name="firstname" id="firstname" value="<?php echo e($userdetails->firstname); ?>" class="form-control"></br>
        <label>LasttName</label></br>
        <input type="text" name="lastname" id="lastname" value="<?php echo e($userdetails->lastname); ?>" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="<?php echo e($userdetails->email); ?>" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="mobile" value="<?php echo e($userdetails->country); ?>" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\course\resources\views/userdetails/edit.blade.php ENDPATH**/ ?>