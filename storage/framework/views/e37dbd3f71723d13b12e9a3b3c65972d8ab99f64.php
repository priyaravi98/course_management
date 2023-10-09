<?php if($errors->any()): ?>
<ul>
<?php echo implode('',$errors->all('<li>:message</li>')); ?>

</ul>

<?php endif; ?>


<?php $__env->startSection('content'); ?>

    <session>
    <div class="container-fluid">
    <div class="row ">
<h3 class="fw-normal text-center mt-5" style="letter-spacing: 1px;">Register</h3>
            
            
  <!--Grid column-->
  <div class="col-md-6 col-lg-8 d-flex justify-content-center" style="margin-left:200px;">
  <form method='POST' action='/store' style="width: 20rem;">
  <div class="form-outline mb-2">
  <label class="form-label" for="form2Example1">Name</label>
    <input type="text" name="name" id="form2Example1" class="form-control justify-content-center" />
    
  </div>

  <div class="form-outline mb-2">
  <label class="form-label" for="form2Example1">Email address</label>
    <input type="email" name="email" id="form2Example1" class="form-control justify-content-center" />
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-2">
  <label class="form-label" for="form2Example2">Password</label>
    <input type="password" name="password" id="form2Example2" class="form-control" />
    
  </div>

  <div class="form-outline mb-2">
  <label class="form-label" for="form2Example2">Password</label>
    <input type="password" name="password_confirmation" id="form2Example2" class="form-control" />
    
  </div>

    <button type="submit" class="btn btn-primary btn-block mb-2">Sign in</button>

    <?php echo csrf_field(); ?> </form></div></div></div>
  
</session>
 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\course\resources\views/auth/register.blade.php ENDPATH**/ ?>