

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

    <div class ="col-md-102">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Editar Parceiro</h3>
            </div>
            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->index == 0): ?>
                <div class="box-body">
                <div class="col-md-4">
                <div class="box box-primary" id="foto1">
                    <input id="fileUpload1" type="file" name="image1"  class="form-control"><br />
                <div id="image-holder1"></div>
                <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                </div>
                </div>
            <?php elseif($loop->index == 1): ?>
                <div class="col-md-4">
                <div class="box box-primary" id="foto2">
                    <input id="fileUpload2" type="file" name="image2"  class="form-control"><br />
                <div id="image-holder2"></div>
                <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                </div>
                </div>
            <?php elseif($loop->index == 2): ?>
                <div class="col-md-4">
                <div class="box box-primary" id="foto3">
                    <input id="fileUpload3" type="file" name="image3"  class="form-control"><br />
                <div id="image-holder3"></div>
                <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                </div>
                </div>
            <?php elseif($loop->index == 3): ?>
                <div class="col-md-4">
                <div class="box box-primary" id="foto4">
                    <input id="fileUpload4" type="file" name="image4"  class="form-control"><br />
                <div id="image-holder4"></div>
                <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                </div>
                </div>
            <?php elseif($loop->index == 4): ?>
                <div class="col-md-4">
                <div class="box box-primary" id="foto5">
                    <input id="fileUpload5" type="file" name="image5"  class="form-control"><br />
                <div id="image-holder5"></div>
                <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                </div>
                </div>
            <?php elseif($loop->index == 5): ?>
                <div class="col-md-4">
                <div class="box box-primary" id="foto6">
                    <input id="fileUpload6" type="file" name="image6"  class="form-control"><br />
                <div id="image-holder6"></div>
                <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                </div>
                </div>
            <?php elseif($loop->index == 6): ?>
                <div class="col-md-4">
                <div class="box box-primary" id="foto7">
                    <input id="fileUpload7" type="file" name="image7"  class="form-control"><br />
                <div id="image-holder7"></div>
                <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                </div>
                </div>
            <?php elseif($loop->index == 7): ?>
                <div class="col-md-4">
                <div class="box box-primary" id="foto8">
                    <input id="fileUpload8" type="file" name="image8"  class="form-control"><br />
                <div id="image-holder8"></div>
                <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                </div>
                </div>
            <?php elseif($loop->index == 8): ?>
                <div class="col-md-4">
                <div class="box box-primary" id="foto9">
                    <input id="fileUpload9" type="file" name="image9"  class="form-control"><br />
                <div id="image-holder9"></div>
                <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                </div>
                </div>
            <?php elseif($loop->index == 9): ?>
                <div class="col-md-4">
                <div class="box box-primary" id="foto10">
                    <input id="fileUpload10" type="file" name="image10"  class="form-control"><br />
                <div id="image-holder10"></div>
                <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                </div>
                </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success col-md-3">Salvar</button>
                </div>
            
        </div>
    </div>
    
         
    </form>  
       

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>