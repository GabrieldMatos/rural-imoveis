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
    <form method="POST" action="<?php echo e(route('immobile.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class ="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Cadastro de Parceiro</h3>
            </div>
                <div class="box-body">
                    <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label>Nome da Propriedade:</label>
                    <input disabled class="form-control" value="<?php echo e($registration->registration_name); ?>" placeholder="Nome da propriedade" type="text" name= "registration_name">
                    <label>nome do proprietário:</label>
                    <input  name='owner_name' type="text" class="form-control" value="<?php echo e($registration->owner_name); ?>" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="">
                    <label>Valor:</label>
                    <input required class="form-control"  value="<?php echo e($registration->value); ?>"  placeholder="Valor" type="text"  name= "value" size='10' value='' onkeypress='return SomenteNumero(event)'>
                    <label>Cidade:</label>
                    <input required class="form-control" value="<?php echo e($registration->city); ?>" placeholder="Tamanho da propriedade" type="text"  name= "size" size='10' value='' onkeypress='return SomenteNumero(event)'>
                    <label>Estado:</label>
                    <select class="form-control" id="state" name ="state" required>
                        <?php if($registration->state == "AC"): ?>
                            <option value="AC" slected>Acre</option>
                        <?php else: ?>
                            <option value="AC">Acre</option>
                        <?php endif; ?>
                        <?php if($registration->state == "AL"): ?>
                            <option value="AL" selected>Alagoas</option>
                        <?php else: ?>
                            <option value="AL">Alagoas</option>
                        <?php endif; ?>
                        <?php if($registration->state == "AP"): ?>
                            <option value="AP" selected>Amapá</option>
                        <?php else: ?>
                            <option value="AP">Amapá</option>
                        <?php endif; ?>
                        <?php if($registration->state == "AM"): ?>
                            <option value="AM" selected>Amazonas</option>
                        <?php else: ?>
                            <option value="AM">Amazonas</option>
                        <?php endif; ?>
                        <?php if($registration->state == "BA"): ?>
                            <option value="BA" selected>Bahia</option>
                        <?php else: ?>
                            <option value="BA">Bahia</option>
                        <?php endif; ?>
                        <?php if($registration->state == "CE"): ?>
                            <option value="CE" selected>Ceará</option>
                        <?php else: ?>
                            <option value="CE">Ceará</option>
                        <?php endif; ?>
                        <?php if($registration->state == "DF"): ?>
                            <option value="DF" selected>Distrito Federal</option>
                        <?php else: ?>
                            <option value="DF">Distrito Federal</option>
                        <?php endif; ?>
                        <?php if($registration->state == "ES"): ?>
                            <option value="ES" selected>Espírito Santo</option>
                        <?php else: ?>
                            <option value="ES">Espírito Santo</option>
                        <?php endif; ?>
                        <?php if($registration->state == "GO"): ?>
                            <option value="GO" selected>Goiás</option>
                        <?php else: ?>
                            <option value="GO">Goiás</option>
                        <?php endif; ?>
                        <?php if($registration->state == "MA"): ?>
                            <option value="MA" selected>Maranhão</option>
                        <?php else: ?>
                            <option value="MA">Maranhão</option>
                        <?php endif; ?>
                        <?php if($registration->state == "MT"): ?>
                            <option value="MT" selected>Mato Grosso</option>
                        <?php else: ?>
                            <option value="MT">Mato Grosso</option>
                        <?php endif; ?>
                        <?php if($registration->state == "MS"): ?>
                            <option value="MS" selected>Mato Grosso do Sul</option>
                        <?php else: ?>
                            <option value="MS">Mato Grosso do Sul</option>
                        <?php endif; ?>
                        <?php if($registration->state == "MG"): ?>
                            <option value="MG" selected>Minas Gerais</option>
                        <?php else: ?>
                            <option value="MG">Minas Gerais</option>
                        <?php endif; ?>
                        <?php if($registration->state == "PA"): ?>
                            <option value="PA" selected>Pará</option>
                        <?php else: ?>
                            <option value="PA">Pará</option>
                        <?php endif; ?>
                        <?php if($registration->state == "PB"): ?>
                            <option value="PB" selected>Paraíba</option>
                        <?php else: ?>
                            <option value="PB">Paraíba</option>
                        <?php endif; ?>
                        <?php if($registration->state == "PR"): ?>
                            <option value="PR" selected>Paraná</option>
                        <?php else: ?>
                            <option value="PR">Paraná</option>
                        <?php endif; ?>
                        <?php if($registration->state == "PE"): ?>
                            <option value="PE" selected>Pernambuco</option>
                        <?php else: ?>   
                            <option value="PE">Pernambuco</option>
                        <?php endif; ?>
                        <?php if($registration->state == "PI"): ?>
                            <option value="PI" selected>Piauí</option>
                        <?php else: ?>
                            <option value="PI">Piauí</option>
                        <?php endif; ?>
                        <?php if($registration->state == "RJ"): ?>
                            <option value="RJ" selected>Rio de Janeiro</option>
                        <?php else: ?>
                        <option value="RJ">Rio de Janeiro</option>
                        <?php endif; ?>
                        <?php if($registration->state == "RN"): ?>
                            <option value="RN" selected>Rio Grande do Norte</option>
                        <?php else: ?>
                            <option value="RN">Rio Grande do Norte</option>
                        <?php endif; ?>
                        <?php if($registration->state == "RS"): ?>
                            <option value="RS" selected>Rio Grande do Sul</option>
                        <?php else: ?>
                            <option value="RS">Rio Grande do Sul</option>
                        <?php endif; ?>
                        <?php if($registration->state == "RO"): ?>
                            <option value="RO" selected>Rondônia</option>
                        <?php else: ?>
                            <option value="RO">Rondônia</option>
                        <?php endif; ?>
                        <?php if($registration->state == "RR"): ?>
                            <option value="RR" selected>Roraima</option>
                        <?php else: ?>
                            <option value="RR">Roraima</option>
                        <?php endif; ?>
                        <?php if($registration->state == "SC"): ?>
                            <option value="SC" selected>Santa Catarina</option>
                        <?php else: ?>
                            <option value="SC">Santa Catarina</option>
                        <?php endif; ?>
                        <?php if($registration->state == "SP"): ?>
                            <option value="SP" selected>São Paulo</option>
                        <?php else: ?>
                            <option value="SP">São Paulo</option>
                        <?php endif; ?>
                        <?php if($registration->state == "SE"): ?>
                            <option value="SE" slected>Sergipe</option>
                        <?php else: ?>
                            <option value="SE">Sergipe</option>
                        <?php endif; ?>
                        <?php if($registration->state == "TO"): ?>
                            <option value="TO" selected>Tocantins</option>
                        <?php else: ?>
                            <option value="TO">Tocantins</option>
                        <?php endif; ?>
                        </select>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <button type="submit" class="btn btn-success col-md-3">Salvar</button>
    </form>  
       

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>