
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Course Details</div>
  <div class="card-body">
       
      <form action="<?php echo e(url('coursedetails/' .$coursedetails->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($coursedetails->id); ?>" id="id" />
        <label>Course Id</label></br>
        <input type="text" name="course_id" id="course_id" value="<?php echo e($coursedetails->course_id); ?>" class="form-control"></br>
        <label>Course Type</label></br>
        <input type="text" name="course_type" id="course_type" value="<?php echo e($coursedetails->course_type); ?>" class="form-control"></br>
        <label>Session Id</label></br>
        <input type="text" name="session_id" id="session_id" value="<?php echo e($coursedetails->session_id); ?>" class="form-control"></br>

        <label>Course Title</label></br>
        <input type="text" name="title" id="title" value="<?php echo e($coursedetails->title); ?>" class="form-control"></br>
        <label>Course description</label></br>
        <input type="text" name="descep" id="descep" value="<?php echo e($coursedetails->descep); ?>" class="form-control"></br>
        <label>Incharge_Email</label></br>
        <input type="text" name="incharge_email" id="incharge_email" value="<?php echo e($coursedetails->incharge_email); ?>" class="form-control"></br>

        <label>Segment Start Time</label></br>
        <input type="text" name="start_time" id="name" value="<?php echo e($coursedetails->start_time); ?>" class="form-control"></br>
        <label>Segment End Time</label></br>
        <input type="text" name="end_time" id="address" value="<?php echo e($coursedetails->end_time); ?>" class="form-control"></br>
        <label>Instuctor Email</label></br>
        <input type="text" name="instuctor_email" id="mobile" value="<?php echo e($coursedetails->instuctor_email); ?>" class="form-control"></br>

        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" value="<?php echo e($coursedetails->duration); ?>" class="form-control"></br>
        <label>Credit Hours</label></br>
        <input type="text" name="credit_hour" id="address" value="<?php echo e($coursedetails->credit_hour); ?>" class="form-control"></br>
        <label>CPE Hours</label></br>
        <input type="text" name="cpe_hour" id="mobile" value="<?php echo e($coursedetails->cpe_hour); ?>" class="form-control"></br>
        <label>COntact Hours</label></br>
        <input type="text" name="contact_hour" id="mobile" value="<?php echo e($coursedetails->contact_hour); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\course\resources\views/coursedetails/edit.blade.php ENDPATH**/ ?>