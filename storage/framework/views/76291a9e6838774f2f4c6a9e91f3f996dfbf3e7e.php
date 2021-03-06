
<?php $__env->startSection('title', 'Uli'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Editar Datos del Estudiante</h1>
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
        <div class="card-body">

            <?php echo Form::model($student, ['route' => ['admin.students.update', $student], 'method'=>'POST']); ?>

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form group">
                    <?php echo Form::label('id', 'Id'); ?>

                    <?php echo Form::number('id', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el id del estudiante']); ?>


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
                <?php echo Form::submit('Actualizar Estudiante', ['class' => 'btn btn-primary']); ?>

            
                <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-ULI\resources\views/admin/student/edit.blade.php ENDPATH**/ ?>