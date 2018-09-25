<?php $__env->startSection('title', 'Pré-Cadastro'); ?>

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
    <div class='box box-info'>
        <div class = 'box-header'>
        <h3 class="box-title" >Pré-Cadastros</h3>
        </div>
        <div class = 'box-body'>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome do Proprietário</th>    
                        <th>Nome da fazenda</th>
                        <th>valor</th>
                        <th>Localidade</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($registration->owner_name); ?></td>
                        <td><?php echo e($registration->immobile_name); ?></td>
                        <td>R$ <?php echo e(number_format($registration->value, 2, ',', '.')); ?></td>
                        <td><?php echo e($registration->city); ?>/<?php echo e($registration->state); ?></td>
                        <form action="<?php echo e(route('registration.details')); ?>" method = "POST" >
                        <?php echo csrf_field(); ?>

                            <input type="hidden" name="id" value=<?php echo e($registration->id); ?> />                      
                            <td class="col-md-1"><button type="submit" class="btn btn-block btn-xs btn-info">Editar</button></td>
                        </form>
                        <form action="<?php echo e(route('registration.delete')); ?>" method = "POST" >
                        <?php echo csrf_field(); ?>

                            <td class="col-md-1"><button type="submit" class="btn btn-block btn-xs btn-danger">Deletar</button></td>
                            <input type="hidden" name="id" value=<?php echo e($registration->id); ?> />                      
                        </form>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <?php if(isset($dataForm)): ?>
            <?php echo $registrations->appends($dataForm)->links(); ?>

        <?php else: ?>
            <?php echo $registrations->links(); ?>

        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>