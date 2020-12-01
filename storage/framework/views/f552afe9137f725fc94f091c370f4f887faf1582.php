<?php $__env->startSection('title'); ?>
    <title>Add Categorie</title>
<?php $__env->stopSection(); ?>

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

        <form method="post" action="<?php echo e(url('/addCategorie')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="addCategorie">Add a new category</label>
                <input name="addCategorie" type="text" class="form-control" id="addCategorie" aria-describedby="addCategorie" placeholder="Please enter your new category here ...">
            </div>
            <button type="submit" class="btn btn-success">Add a new Category </button>
        </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DAR\Desktop\ME\Laravel\work_todo\resources\views/categories/addCategorie.blade.php ENDPATH**/ ?>