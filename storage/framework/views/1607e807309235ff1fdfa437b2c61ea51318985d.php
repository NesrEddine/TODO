<?php $__env->startSection('title'); ?> 
	<title>Accueil</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('categories'); ?>
    <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="#" class="list-group-item active">CATEGORIES</a>
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="#" class="list-group-item"><?php echo e($categorie->categorie); ?></a>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="<?php echo e(asset('images/todo.jpg')); ?>" alt="">
          <div class="card-body">
            <?php $__currentLoopData = $taches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tache): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h3 class="card-title"><?php echo e($tache->title); ?></h3>
              <p class="card-text"><?php echo e($tache->tache); ?></p>  
              <small class="text-muted">Posted by <?php echo e(Auth::user()->name); ?> on <?php echo e($tache->created_at); ?></small>
              <hr>
              <a href="#" class="btn btn-success"> Update</a>
              <a href="#" class="btn btn-success"> Delete</a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <br>

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DAR\Desktop\ME\Laravel\work_todo\resources\views/index.blade.php ENDPATH**/ ?>