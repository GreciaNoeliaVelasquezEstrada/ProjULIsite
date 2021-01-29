

<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
           
                    <div class="card">
                     <div class="card-header"><?php echo e(__('Lista de Asistencia')); ?></div>
           
                         <div class="car-body">
                              
            
                                  <table class="table">
                                     
                                        <thead >
                                            <tr>
                                                    <td>Id</td>
                                                    <td>Date</td>
                                                    <td>Actions</td>
                                            </tr>

                                        </thead> 
                                            <tbody>
                                            <?php $__currentLoopData = $assistances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assistance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($assistance->id); ?></td>
                                                <td><?php echo e($assistance->date); ?></td>

                                                <td>
                                                   <div class="d-flex align-items-center">
                                                        <a href="<?php echo e(route('assistance.edit',$assistance)); ?>" class="badge badge-success mr-3">Editar</a>
                                                        <form action="<?php echo e(route('assistance.destroy',$assistance)); ?>" method="POST">
                                                            <?php echo csrf_field(); ?> 
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button class="badge badge-danger" style="border: none;">Eliminar</button>
                                                        </form>
                                                   </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                     </table>
                                    
                         </div>
                    </div>  

                </div>
        </div>
</div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-ULI\resources\views/admin/assistance/index.blade.php ENDPATH**/ ?>