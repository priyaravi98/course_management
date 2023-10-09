
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="<?php echo e(url('coursedetails')); ?>" enctype="multipart/form-data" method="post">
        <?php echo csrf_field(); ?>

        <label>Course Id</label></br>
        <input type="text" name="course_id" id="course_id" class="form-control"></br>
        <label>Course Type</label></br>
        <input type="text" name="course_type" id="course_type" class="form-control"></br>
        <label>Session Id</label></br>
        <input type="text" name="session_id" id="session_id" class="form-control"></br>

        <label>Course Title</label></br>
        <input type="text" name="title" id="course_title" class="form-control"></br>
        <label>Course description</label></br>
        <input type="text" name="descep" id="descep" class="form-control"></br>
        <label>Incharge_Email</label></br>
        <input type="text" name="incharge_email" id="incharge_email" class="form-control"></br>

        <label>Segment Start Time</label></br>
        <input type="text" name="start_time" id="start_time" class="form-control"></br>
        <label>Segment End Time</label></br>
        <input type="text" name="end_time" id="end_time" class="form-control"></br>
        <label>Instuctor Email</label></br>
        <input type="text" name="instuctor_email" id="instuctor_email" class="form-control"></br>

        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" class="form-control"></br>
        <label>Credit Hours</label></br>
        <input type="text" name="credit_hour" id="credit_hour" class="form-control"></br>
        <label>CPE Hours</label></br>
        <input type="text" name="cpe_hour" id="cpe_hour" class="form-control"></br>
        <label>Contact Hours</label></br>
        <input type="text" name="contact_hour" id="contact_hour" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\course\resources\views/coursedetails/create.blade.php ENDPATH**/ ?>