
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg"> 
                        
                        <h5><a href="userdetails">User Module</a> | <a href="coursedetails">Course Module</a> </h5>
                    </div>
                    <div class="card-body">
                       <div class="col-6" style="float:left">
                        <a href="<?php echo e(url('/userdetails/create')); ?>" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        </div>
                        
                        <div class="col-6" style="float:right">
                        <form action="<?php echo e(route('userdetails')); ?>" method="post" enctype="multipart/form-data">
                        
                <?php echo csrf_field(); ?>
                          
                <input type="file" name="excel_file" class="form-control">
                
                <br>
                <button  type="submit" class="btn btn-primary">Import User Data</button>
            </form></div><br/>
                        
                        <div class="table-responsive col-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $userdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->firstname); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td><?php echo e($item->country); ?></td>
  
                                        <td>
                                            <a href="<?php echo e(url('/userdetails/' . $item->id)); ?>" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/userdetails/' . $item->id . '/edit')); ?>" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="<?php echo e(url('/userdetails' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<style>
.bg a:link, .bg a:visited {
  background-color:#0E69F5;
  color: white;
  padding: 12px 23px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.bg a:hover, .bg a:active {
  background-color: black;
}
</style>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\course\resources\views/userdetails/index.blade.php ENDPATH**/ ?>