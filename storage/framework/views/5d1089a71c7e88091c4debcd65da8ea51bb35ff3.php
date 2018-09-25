<?php $__env->startSection('title', 'Novo Parceiro'); ?>

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
    <form method="POST" action="<?php echo e(route('partner.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class ="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Cadastro de Parceiro</h3>
            </div>
                <div class="box-body">
                    <label>Nome da Empresa:</label>
                    <input class="form-control"  type="text" name= "name">
                <label>Logo:</label>  
                <input id="fileUpload" type="file" name="image"  class="form-control"><br />
                <div id="image-holder"></div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success col-md-3">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    </form>  
       

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>