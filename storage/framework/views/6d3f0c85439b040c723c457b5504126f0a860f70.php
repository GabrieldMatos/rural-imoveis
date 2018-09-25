<?php $__env->startSection('title', 'Imóveis'); ?>

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
        <h3 class="box-title col-md-8" >Propriedades</h3>
            <div class="col-md-4">
            <form action="<?php echo e(route('immobile.search')); ?>" method = "POST" class="form form-inline">
                <?php echo csrf_field(); ?>

                <input type="text" name="immobile_name" class="form-control" placeholder="nome do imóvel">
                <button type="submit" class="btn btn-primary">pesquisar</button>
            </form>
            </div>
        </div>
        <div class = 'box-body'>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><i class="fa fa-star-o"></i></th>    
                        <th>Nome do imóvel</th>
                        <th>Nome do proprietario</th>
                        <th>Valor</th>
                        <th>Tamanho</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $immobiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php if($immobile->featured == 1): ?>
                        <td>
                            <i class="fa text-yellow fa-star"></i>
                        </td>
                            
                        <?php else: ?>
                        <td>
                            <i class="fa text-yellow fa-star-o"></i>
                        </td>
                        <?php endif; ?>
                        <td><?php echo e($immobile->immobile_name); ?></td>
                        <td><?php echo e($immobile->name); ?></td>
                        <td>R$ <?php echo e(number_format($immobile->value, 2, ',', '.')); ?></td>
                        <td><?php echo e($immobile->size); ?> ha</td>
                        <form action="<?php echo e(route('immobile.details')); ?>" method = "POST" >
                        <?php echo csrf_field(); ?>

                            <input type="hidden" name="id" value=<?php echo e($immobile->id); ?> />                      
                            <td class="col-md-1"><button type="submit" class="btn btn-block btn-xs btn-info">Editar</button></td>
                        </form>
                        <form action="<?php echo e(route('immobile.delete')); ?>" method = "POST" >
                        <?php echo csrf_field(); ?>

                            <td class="col-md-1"><button type="submit" class="btn btn-block btn-xs btn-danger">Deletar</button></td>
                            <input type="hidden" name="address_id" value=<?php echo e($immobile->immobile_address_id); ?> />
                            <input type="hidden" name="id" value=<?php echo e($immobile->id); ?> />                      
                        </form>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <?php if(isset($dataForm)): ?>
            <?php echo $immobiles->appends($dataForm)->links(); ?>

        <?php else: ?>
            <?php echo $immobiles->links(); ?>

        <?php endif; ?>
    </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>