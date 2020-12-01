<?php $__env->startSection('content'); ?>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong><?php echo e($message); ?></strong>
        </div>
        <!--
        <img src="images/<?php echo e(Session::get('image')); ?>">-->
    <?php endif; ?>

    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some issues with your contribution.
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

        <form method="post" action="<?php echo e(url('/updateCategorie/'.$categories->id)); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="updateCategorie">Edit this Category</label>
                <input name="updateCategorie" type="text" class="form-control" id="updateCategorie" aria-describedby="updateCategorie" value="<?php echo e($categories->categorie); ?>" >
            </div>
            <button type="submit" class="btn btn-success">Edit this Category </button>
        </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DAR\Desktop\ME\Laravel\work_todo\resources\views/categories/update.blade.php ENDPATH**/ ?>