<?php $__env->startSection('title','Modifier Produits'); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page Heading title produit -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Edit this Tache</h2>
        </div>
    </div>

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

    <form method="post" action="<?php echo e(url('tache_update/'.$taches->id)); ?>" enctype="multipart/form-data" >
        <?php echo e(csrf_field()); ?>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tache">Titre du Produit</label>
                <input type="text" name="title" class="form-control" id="produit" placeholder="Add a title for this tache ..." value="<?php echo e($taches->title); ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputState">Categorie</label>
                <select name="categorie_id" id="inputState" class="form-control">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($categorie->id); ?>" ><?php echo e($categorie->categorie); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="descriptionP">Tache Description</label>
            <textarea name="textareaP" class="form-control" id="descriptionP" rows="6"><?php echo e($taches->tache); ?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Update This Tache</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DAR\Desktop\ME\Laravel\work_todo\resources\views/taches/update.blade.php ENDPATH**/ ?>