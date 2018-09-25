<?php $__env->startSection('title', 'Perfil'); ?>

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
    <form method="POST" action="<?php echo e(route('profile.update')); ?>">
    <?php echo csrf_field(); ?>

    <div class ="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Editar Perfil</h3>
                </div>
                <div class="box-body">
                    <label for="name">Nome</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input required class="form-control" value="<?php echo e(auth()->user()->name); ?>" placeholder="Nome Completo" type="text"  name= "name">
                    </div>
                    <br>
                    <label for="user_email">E-mail</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input disabled class="form-control" value="<?php echo e(auth()->user()->email); ?>" placeholder="Email" type="email"  name= "user_email">
                    </div>
                    <br>
                    <label for="password">Senha</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-key"></i>
                        </div>
                        <input required class="form-control" placeholder="Senha" type="password"  name= "password">
                    </div>
                    <br>

                    <button type="submit" class="btn btn-info">Atualizar Perfil</button>
                </div>
            </div>
        </div>      
    </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>