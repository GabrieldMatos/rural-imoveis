<?php $__env->startSection('title', 'Contatos'); ?>

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
        <h3 class="box-title" >Contatos</h3>
        </div>
        <div class = 'box-body'>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1"><i class="fa text-blue fa-inbox"></i></th>    
                        <th class="col-md-4">Nome</th>
                        <th class="col-md-4">E-mail</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php if($contact->visualized == 1): ?>
                        <td>
                            <i class="fa text-green fa-check-square-o"></i>
                        </td>
                            
                        <?php else: ?>
                        <td>
                            <i class="fa text-red fa-envelope-square"></i>
                        </td>
                        <?php endif; ?>
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->email); ?></td>
                        <form action="<?php echo e(route('contact.details')); ?>" method = "POST" >
                        <?php echo csrf_field(); ?>

                            <input type="hidden" name="id" value=<?php echo e($contact->id); ?> />                      
                            <td class="col-md-1"><button type="submit" class="btn btn-block btn-xs btn-info">Ver</button></td>
                        </form>
                        <form action="<?php echo e(route('contact.delete')); ?>" method = "POST" >
                        <?php echo csrf_field(); ?>

                            <td class="col-md-1"><button type="submit" class="btn btn-block btn-xs btn-danger">Deletar</button></td>
                            <input type="hidden" name="id" value=<?php echo e($contact->id); ?> />                      
                        </form>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <?php if(isset($dataForm)): ?>
            <?php echo $contacts->appends($dataForm)->links(); ?>

        <?php else: ?>
            <?php echo $contacts->links(); ?>

        <?php endif; ?>
    </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>