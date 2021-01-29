
 <?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>List de activitie</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(session('info')): ?>
<div class="alert alert-success">
    <strong >
        <?php echo e((session('info'))); ?>

    </strong>
</div>
<?php endif; ?>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="<?php echo e(route('admin.activities.create')); ?>">Add Activities</a>
        </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead> 
            <tr>
               <th>id</th>
               <th>title</th>
               <th>description</th>
               <th colspan="2">Actions</th>
             </tr>
            </thead>
            <tbody >
            <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activitie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($activitie->id); ?></td>
                <td><?php echo e($activitie->title); ?></td>
                <td><?php echo e($activitie->description); ?></td>
               

                <td width="10px">
                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.activities.edit', $activitie)); ?>" >Edit</a>
                </td>
                <td width="10px">
                    <form action="<?php echo e(route('admin.activities.destroy',$activitie)); ?>" method="POST">
                       <?php echo csrf_field(); ?> 
                    <?php echo method_field('delete'); ?>
                   <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-ULI\resources\views/admin/activitie/index.blade.php ENDPATH**/ ?>