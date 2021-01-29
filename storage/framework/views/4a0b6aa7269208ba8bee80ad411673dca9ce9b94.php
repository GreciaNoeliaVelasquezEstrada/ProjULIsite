
 <?php $__env->startSection('title', 'IndexRole'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>List de role</h1>
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
            <a class="btn btn-secondary" href="<?php echo e(route('admin.roles.create')); ?>">Add Role</a>
        </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead> 
            <tr>
               <th>id</th>
               <th>name</th>
               <th colspan="2">Actions</th>
             </tr>
            </thead>
            <tbody >
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($role->id); ?></td>
                <td><?php echo e($role->description); ?></td>
                <td width="10px">
                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.roles.edit', $role)); ?>" >Edit</a>
                </td>
                <td width="10px">
                    <form action="<?php echo e(route('admin.roles.destroy',$role)); ?>" method="POST">
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


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-ULI\resources\views/admin/role/index.blade.php ENDPATH**/ ?>