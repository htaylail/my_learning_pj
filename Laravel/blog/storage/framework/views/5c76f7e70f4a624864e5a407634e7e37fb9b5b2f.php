

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="card">
      <div class="card-header">Contents
      </div>
      <div class="card-body">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>          
          <div>
          <h5 class="card-title"><?php echo e($post->title); ?></h5>
          <p class="card-text"><?php echo e($post->description); ?></p>
          <a href="#" class="btn btn-primary">View</a>
          </div><hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Apache\Apache24\htdocs\myLearning\my_learning_pj\Laravel\blog\resources\views/home.blade.php ENDPATH**/ ?>