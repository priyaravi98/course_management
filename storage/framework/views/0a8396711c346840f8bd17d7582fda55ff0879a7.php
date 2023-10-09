
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-title">Course Id : <?php echo e($coursedetails->course_id); ?></p>
        <p class="card-text">Course Type : <?php echo e($coursedetails->course_type); ?></p>
        <p class="card-text">Session Id : <?php echo e($coursedetails->session_id); ?></p>
        <p class="card-title">Course Title : <?php echo e($coursedetails->title); ?></p>
        <p class="card-text">Course description : <?php echo e($coursedetails->descep); ?></p>
        <p class="card-text">Incharge_Email : <?php echo e($coursedetails->incharge_email); ?></p>
        <p class="card-title">Segment Start Time : <?php echo e($coursedetails->start_time); ?></p>
        <p class="card-text">Segment End Time : <?php echo e($coursedetails->end_time); ?></p>
        <p class="card-text">Instuctor Email : <?php echo e($coursedetails->instuctor_email); ?></p>
        <p class="card-title">Duration : <?php echo e($coursedetails->duration); ?></p>
        <p class="card-text">Credit Hours : <?php echo e($coursedetails->credit_hour); ?></p>
        <p class="card-text">CPE Hours : <?php echo e($coursedetails->cpe_hour); ?></p>
        <p class="card-text">COntact Hours : <?php echo e($coursedetails->contact_hour); ?></p>
  </div>
    </hr>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\course\resources\views/coursedetails/show.blade.php ENDPATH**/ ?>