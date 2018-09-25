<?php $__env->startSection('title', 'editar Parceiro'); ?>

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
    <form method="POST" action="<?php echo e(route('partner.update')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class ="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Editar Parceiro</h3>
            </div>
                <div class="box-body">
                    <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label>Nome da Empresa:</label>
                    <input required type="hidden" name="id" value="<?php echo e($partner->id); ?>" />
                    <input required class="form-control" value="<?php echo e($partner->name); ?>"  type="text" name= "name">
                <label>Logo:</label> 
                <input id="fileUpload" type="file" name="image"  class="form-control"><br />
                <div id="image-holder"><img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($partner->name)."/".$partner->image )); ?>></div>
                <label>Número:</label>
                    <input required class="form-control" value="<?php echo e($partner->number); ?>" type="text" name= "number">
                <div class="box-footer">
                    <button type="submit" class="btn btn-success col-md-3">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
    </form>  
       

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>