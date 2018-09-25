<?php $__env->startSection('title', 'dashboard'); ?>

<?php $__env->startSection('content_header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box-body">
    <div class="col-md-4">
    <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php echo e($immobile); ?></h3>
              <p>Propriedades</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="<?php echo e(route('admin.immobile')); ?>" class="small-box-footer">Ver Mais <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>
    <div class="col-md-4">
    <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo e($owner); ?></h3>
              <p>porprietários</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo e(route('admin.owner')); ?>" class="small-box-footer">Ver Mais <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>
    <div class="col-md-4">
    <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo e($featured); ?></h3>
              <p>Destaques</p>
            </div>
            <div class="icon">
              <i class="fa fa-star"></i>
            </div>
            <a href="<?php echo e(route('immobile.featured')); ?>" class="small-box-footer">Ver Mais <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>
    <div class="col-md-4">
    <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo e($partner); ?></h3>
              <p>Parceiros</p>
            </div>
            <div class="icon">
              <i class="fa fa-bank"></i>
            </div>
            <a href="<?php echo e(route('admin.partner')); ?>" class="small-box-footer">Ver Mais <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>

    <div class="col-md-4">
    <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php echo e($contact); ?></h3>
              <p>Mensagens</p>
            </div>
            <div class="icon">
              <i class="fa fa-comments-o"></i>
            </div>
            <a href="<?php echo e(route('contact.unread')); ?>" class="small-box-footer">Ver Mais <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>
    <div class="col-md-4">
    <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo e($registration); ?></h3>
              <p>Pré-cadastros</p>
            </div>
            <div class="icon">
              <i class="fa fa-exclamation"></i>
            </div>
            <a href="<?php echo e(route('admin.registration')); ?>" class="small-box-footer">Ver Mais <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>