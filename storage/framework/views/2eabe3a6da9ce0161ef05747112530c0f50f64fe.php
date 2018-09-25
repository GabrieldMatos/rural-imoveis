<?php $__env->startSection('title', 'Mensagem'); ?>

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
    <form method="POST" action="<?php echo e(route('contact.update')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class ="col-md-9">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Mensagem</h3>
                <span class="mailbox-read-time pull-right"><?php echo e($contact->created_at); ?></span>
            </div>
            <div class="box-body no-padding">
                <div class="mailbox-read-info">
                    
                    <input type="hidden" name="id" value="<?php echo e($contact->id); ?>" />
                        <h3>Nome: <?php echo e($contact->name); ?><h3>
                        <h5>E-mail: <?php echo e($contact->email); ?>

                                <span class="mailbox-read-time pull-right"><?php echo e($contact->phone); ?></span>
                        </h5>
                    </div>
                    <div class="mailbox-read-message">
                        <p><?php echo e($contact->message); ?></p>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info">Comfirmar</button>
                        <div class="pull-right">
                            <?php if($contact->visualized == 1): ?>
                                <label style="padding-left:20px;">
                                    <input checked="checked" name= "visualized" class="icheckbox_flat" type="checkbox"> Visualizado
                                </label>
                            <?php else: ?>
                                <label style="padding-left:20px;">
                                    <input name= "visualized" class="icheckbox_flat" type="checkbox"> Visualizado
                                </label>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>  
       

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>