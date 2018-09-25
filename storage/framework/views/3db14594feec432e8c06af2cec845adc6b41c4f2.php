

<?php $__env->startSection('title', 'Fotos'); ?>

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
    <form method="POST" action="<?php echo e(route('photo.update')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Fotos</h3>
            </div>
            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="hidden" name="id" value=<?php echo e($photo->immobile_id); ?> /> 
            <?php if($loop->index == 0): ?>
                <div class="box-body col-md-4">
                    <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                    <label>
                        <input class="icheckbox_flat" style="margin-left:75px;" name= "delete1" type="checkbox"> Deletar 
                        <input type="hidden" name="photo1_image" value=<?php echo e($photo->image); ?> /> 
                    </label>
                </div>
            <?php elseif($loop->index == 1): ?>
                <div class="box-body col-md-4">
                    <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                    <label>
                        <input class="icheckbox_flat" style="margin-left:75px;" name= "delete2" type="checkbox"> Deletar
                        <input type="hidden" name="photo2_image" value=<?php echo e($photo->image); ?> />
                    </label>
                </div>
            <?php elseif($loop->index == 2): ?>
                <div class="box-body col-md-4">
                    <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                    <label>
                        <input class="icheckbox_flat" style="margin-left:75px;" name= "delete3" type="checkbox"> Deletar
                        <input type="hidden" name="photo3_image" value=<?php echo e($photo->image); ?> />
                    </label>
                </div>
            <?php elseif($loop->index == 3): ?>
                <div class="box-body col-md-4">
                    <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                    <label>
                        <input class="icheckbox_flat" style="margin-left:75px;" name= "delete4" type="checkbox"> Deletar
                        <input type="hidden" name="photo4_image" value=<?php echo e($photo->image); ?> />
                    </label>
                </div>
            <?php elseif($loop->index == 4): ?>
                <div class="box-body col-md-4">
                    <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                    <label>
                        <input class="icheckbox_flat" style="margin-left:75px;" name= "delete5" type="checkbox"> Deletar
                        <input type="hidden" name="photo5_image" value=<?php echo e($photo->image); ?> />
                    </label>
                </div>
            <?php elseif($loop->index == 5): ?>
                <div class="box-body col-md-4">
                    <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                    <label>
                        <input class="icheckbox_flat" style="margin-left:75px;" name= "delete6" type="checkbox"> Deletar
                        <input type="hidden" name="photo6_image" value=<?php echo e($photo->image); ?> />
                    </label>
                </div>
            <?php elseif($loop->index == 6): ?>
                <div class="box-body col-md-4">
                    <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                    <label>
                        <input class="icheckbox_flat" style="margin-left:75px;" name= "delete7" type="checkbox"> Deletar
                        <input type="hidden" name="photo7_image" value=<?php echo e($photo->image); ?> />
                    </label>
                </div>
            <?php elseif($loop->index == 7): ?>
                <div class="box-body col-md-4">
                    <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                    <label>
                        <input class="icheckbox_flat" style="margin-left:75px;" name= "delete8" type="checkbox"> Deletar
                        <input type="hidden" name="photo8_image" value=<?php echo e($photo->image); ?> />
                    </label>
                </div>
            <?php elseif($loop->index == 8): ?>
                <div class="box-body col-md-4">
                    <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                    <label>
                        <input class="icheckbox_flat" style="margin-left:75px;" name= "delete9" type="checkbox"> Deletar
                        <input type="hidden" name="photo9_image" value=<?php echo e($photo->image); ?> />
                    </label>
                </div>
            <?php elseif($loop->index == 9): ?>
                <div class="box-body col-md-4">
                    <img class="img-thumbnail center-block" style='height:200px;' src=<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image )); ?>>
                    <label>
                        <input class="icheckbox_flat" style="margin-left:75px;" name= "delete10" type="checkbox"> Deletar
                        <input type="hidden" name="photo10_image" value=<?php echo e($photo->image); ?> />
                    </label>
                </div>
                <?php endif; ?>
                <?php if($loop->last): ?>
                <?php if($loop->index < 9): ?>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto1">     
                        <input id="fileUpload1" name="image01" type="file" class="form-control">
                        <div id="image-holder1"></div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($loop->index < 8): ?>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto2" style="visibility: hidden;">
                        <input id="fileUpload2"  name="image02" type="file" class="form-control">
                        <div id="image-holder2"></div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($loop->index < 7): ?>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto3"style="visibility: hidden;">
                        <input id="fileUpload3"  name="image03" type="file" class="form-control">
                        <div id="image-holder3"></div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($loop->index < 6): ?>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto4"style="visibility: hidden;">
                        <input id="fileUpload4"  name="image04" type="file" class="form-control">
                        <div id="image-holder4"></div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($loop->index < 5): ?>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto5"style="visibility: hidden;">
                        <input id="fileUpload5"  name="image05" type="file" class="form-control">
                        <div id="image-holder5"></div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($loop->index < 4): ?>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto6"style="visibility: hidden;">     
                        <input id="fileUpload6"  name="image06" type="file" class="form-control">
                        <div id="image-holder6"></div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($loop->index < 3): ?>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto7"style="visibility: hidden;">
                        <input id="fileUpload7"  name="image07" type="file" class="form-control">
                        <div id="image-holder7"></div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($loop->index < 2): ?>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto8" style="visibility: hidden;">
                        <input id="fileUpload8"  name="image08" type="file" class="form-control">
                        <div id="image-holder8"></div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($loop->index < 1): ?>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto9" style="visibility: hidden;">
                        <input id="fileUpload9"  name="image09" type="file" class="form-control">
                        <div id="image-holder9"></div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($loop->index < 0): ?>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto10" style="visibility: hidden;">
                        <input id="fileUpload10"  name="image010" type="file" class="form-control">
                        <div id="image-holder10"></div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="box-footer">
                <button type="submit" class="col-md-12 btn btn-success">Confirmar</button>
            </div>

            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


            
    
         
    </form>  
       

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>