
<?php $__env->startSection('title', 'teacher'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Create New Teacher</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::open(['route' => 'admin.teachers.store']); ?>

            <div class="form group">
                    <?php echo Form::label('id', 'Id'); ?>

                    <?php echo Form::number('id', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el id del teacher']); ?>


                    <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
                
                <br>
                <?php echo Form::submit('Crear teacher', ['class' => 'btn btn-primary']); ?>

            
                <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-ULI\resources\views/admin/teacher/create.blade.php ENDPATH**/ ?>