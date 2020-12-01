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

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Taches</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php $__currentLoopData = $taches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tache): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($i++); ?></th>
                <td><?php echo e($tache->title); ?></td>
                <td>
                    <a href="<?php echo e('/tache_update/'.$tache->id); ?>"><button class="btn btn-success" > Update</button></a>
                    <a href="<?php echo e('/tache_delete/'.$tache->id); ?>"><button class="btn btn-danger" > Delete</button></a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DAR\Desktop\ME\Laravel\work_todo\resources\views/taches/listTache.blade.php ENDPATH**/ ?>