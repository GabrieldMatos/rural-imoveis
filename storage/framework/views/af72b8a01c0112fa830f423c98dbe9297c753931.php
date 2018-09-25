<?php $__env->startSection('title', 'Proprietários'); ?>

<?php $__env->startSection('content_header'); ?>

    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>   

    <?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <div class="box box-info">
    <div class="box-header">
        <h3 class="box-title"style="padding-bottom:5px;" >Proprietários</h3>
    </div>
        <div class="box-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th >Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="col-md-3"><?php echo e($owner->name); ?></td>
                        <td class="col-md-3"><?php echo e($owner->email); ?></td>
                        <td class="col-md-2"><?php echo e($owner->phone); ?></td>
                        <td class="col-md-2"><?php echo e($owner->cellphone); ?></td>
                        <form action="<?php echo e(route('owner.details')); ?>" method = "POST" >
                            <?php echo csrf_field(); ?>

                            <input type="hidden" name="id" value=<?php echo e($owner->id); ?> /> 
                        <td class="col-md-1">                  
                            <button type="submit" class="btn btn-block btn-info btn-xs">Editar</button></td>
                        </form>
                            <form action="<?php echo e(route('owner.delete')); ?>" method = "POST" >
                            <?php echo csrf_field(); ?>

                            <td class="col-md-1"> 
                            <button type="submit" class="btn btn-danger btn-block btn-xs">Deletar</button>
                        </td>
                        
                            <input type="hidden" name="address_id" value=<?php echo e($owner->owner_address_id); ?> />
                            <input type="hidden" name="id" value=<?php echo e($owner->id); ?> />                      
                        </form>
                    </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <?php echo $owners->links(); ?>

        </div>
    </div>
                        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>