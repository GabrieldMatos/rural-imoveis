<?php $__env->startSection('title', 'Parceiros'); ?>

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
        <h3 class="box-title"style="padding-bottom:5px;" >Parceiros</h3>
    </div>
        <div class="box-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th >Nome</th>
                        <th class="text-center">Logo</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="vertical-align: middle;"><?php echo e($partner->name); ?></td>
                        <td><img class="img-rounded center-block" style='height:100px;' src=<?php echo e(asset('storage/'.kebab_case($partner->name)."/".$partner->image )); ?>></td>
                        <form action="<?php echo e(route('partner.details')); ?>" method = "POST" >
                            <?php echo csrf_field(); ?>

                            <input type="hidden" name="id" value=<?php echo e($partner->id); ?> /> 
                        <td style="vertical-align: middle;" class="col-md-1 align-middle">                  
                            <button type="submit" class="btn btn-block btn-info btn-xs">Editar</button></td>
                        </form>
                            <form action="<?php echo e(route('partner.delete')); ?>" method = "POST" >
                            <?php echo csrf_field(); ?>

                        <td style="vertical-align: middle;" class="col-md-1"> 
                            <button type="submit" class="btn btn-danger btn-block btn-xs">Deletar</button>
                        </td>
                            <input type="hidden" name="id" value=<?php echo e($partner->id); ?> />                      
                        </form>
                    </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <?php echo $partners->links(); ?>

        </div>
    </div>
                        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>