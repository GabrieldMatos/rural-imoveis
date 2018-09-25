<?php $__env->startSection('title', 'Atualizar Proprietário'); ?>

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
    <form method="POST" action="<?php echo e(route('owner.update')); ?>">
    <?php echo csrf_field(); ?>

    <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class ="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Editar Proprietário</h3>
            </div>
            <div class="box-body">
                <label>Nome Completo:</label>
                <input class="form-control" value = "<?php echo e($owner->name); ?>" placeholder="Nome Completo" type="text" name= "fullName">
                <label>E-mail:</label>
                <input class="form-control" value = "<?php echo e($owner->email); ?>" placeholder="Email" type="email"  name= "email">
                <label>CPF:</label>
                <input name='cpf' disabled type="text" value = "<?php echo e($owner->cpf); ?>" class="form-control" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="">
                <label>Telefone:</label>
                <input name='phone' value= "<?php echo e($owner->phone); ?>" type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999-9999&quot;" data-mask="">
                <label>Celular:</label>
                <input name='cellphone' value= "<?php echo e($owner->cellphone); ?>" type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 99999-9999&quot;" data-mask="">
            </div>
        </div>
    </div>
    <div class ="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Endereço</h3>
            </div>
            <div class="box-body">
                <label>Rua:</label>
                <input class="form-control" value = "<?php echo e($owner->street); ?>" placeholder="Rua" type="text"  name= "street">
                <label>Cidade:</label>
                <input class="form-control" value = "<?php echo e($owner->city); ?>" placeholder="Cidade" type="text"  name= "city">
                <label>Estado:</label>
                <select class="form-control" id="state" name ="state" required>
                <?php if($owner->state == "AC"): ?>
                    <option value="AC" slected>Acre</option>
                <?php else: ?>
                    <option value="AC">Acre</option>
                <?php endif; ?>
                <?php if($owner->state == "AL"): ?>
                    <option value="AL" selected>Alagoas</option>
                <?php else: ?>
                    <option value="AL">Alagoas</option>
                <?php endif; ?>
                <?php if($owner->state == "AP"): ?>
                    <option value="AP" selected>Amapá</option>
                <?php else: ?>
                    <option value="AP">Amapá</option>
                <?php endif; ?>
                <?php if($owner->state == "AM"): ?>
                    <option value="AM" selected>Amazonas</option>
                <?php else: ?>
                    <option value="AM">Amazonas</option>
                <?php endif; ?>
                <?php if($owner->state == "BA"): ?>
                    <option value="BA" selected>Bahia</option>
                <?php else: ?>
                    <option value="BA">Bahia</option>
                <?php endif; ?>
                <?php if($owner->state == "CE"): ?>
                    <option value="CE" selected>Ceará</option>
                <?php else: ?>
                    <option value="CE">Ceará</option>
                <?php endif; ?>
                <?php if($owner->state == "DF"): ?>
                    <option value="DF" selected>Distrito Federal</option>
                <?php else: ?>
                    <option value="DF">Distrito Federal</option>
                <?php endif; ?>
                <?php if($owner->state == "ES"): ?>
                    <option value="ES" selected>Espírito Santo</option>
                <?php else: ?>
                    <option value="ES">Espírito Santo</option>
                <?php endif; ?>
                <?php if($owner->state == "GO"): ?>
                    <option value="GO" selected>Goiás</option>
                <?php else: ?>
                    <option value="GO">Goiás</option>
                <?php endif; ?>
                <?php if($owner->state == "MA"): ?>
                    <option value="MA" selected>Maranhão</option>
                <?php else: ?>
                    <option value="MA">Maranhão</option>
                <?php endif; ?>
                <?php if($owner->state == "MT"): ?>
                    <option value="MT" selected>Mato Grosso</option>
                <?php else: ?>
                    <option value="MT">Mato Grosso</option>
                <?php endif; ?>
                <?php if($owner->state == "MS"): ?>
                    <option value="MS" selected>Mato Grosso do Sul</option>
                <?php else: ?>
                    <option value="MS">Mato Grosso do Sul</option>
                <?php endif; ?>
                <?php if($owner->state == "MG"): ?>
                    <option value="MG" selected>Minas Gerais</option>
                <?php else: ?>
                    <option value="MG">Minas Gerais</option>
                <?php endif; ?>
                <?php if($owner->state == "PA"): ?>
                    <option value="PA" selected>Pará</option>
                <?php else: ?>
                    <option value="PA">Pará</option>
                <?php endif; ?>
                <?php if($owner->state == "PB"): ?>
                    <option value="PB" selected>Paraíba</option>
                <?php else: ?>
                    <option value="PB">Paraíba</option>
                <?php endif; ?>
                <?php if($owner->state == "PR"): ?>
                    <option value="PR" selected>Paraná</option>
                <?php else: ?>
                    <option value="PR">Paraná</option>
                <?php endif; ?>
                <?php if($owner->state == "PE"): ?>
                    <option value="PE" selected>Pernambuco</option>
                <?php else: ?>   
                    <option value="PE">Pernambuco</option>
                <?php endif; ?>
                <?php if($owner->state == "PI"): ?>
                    <option value="PI" selected>Piauí</option>
                <?php else: ?>
                    <option value="PI">Piauí</option>
                <?php endif; ?>
                <?php if($owner->state == "RJ"): ?>
                    <option value="RJ" selected>Rio de Janeiro</option>
                <?php else: ?>
                <option value="RJ">Rio de Janeiro</option>
                <?php endif; ?>
                <?php if($owner->state == "RN"): ?>
                    <option value="RN" selected>Rio Grande do Norte</option>
                <?php else: ?>
                    <option value="RN">Rio Grande do Norte</option>
                <?php endif; ?>
                <?php if($owner->state == "RS"): ?>
                    <option value="RS" selected>Rio Grande do Sul</option>
                <?php else: ?>
                    <option value="RS">Rio Grande do Sul</option>
                <?php endif; ?>
                <?php if($owner->state == "RO"): ?>
                    <option value="RO" selected>Rondônia</option>
                <?php else: ?>
                    <option value="RO">Rondônia</option>
                <?php endif; ?>
                <?php if($owner->state == "RR"): ?>
                    <option value="RR" selected>Roraima</option>
                <?php else: ?>
                    <option value="RR">Roraima</option>
                <?php endif; ?>
                <?php if($owner->state == "SC"): ?>
                    <option value="SC" selected>Santa Catarina</option>
                <?php else: ?>
                    <option value="SC">Santa Catarina</option>
                <?php endif; ?>
                <?php if($owner->state == "SP"): ?>
                    <option value="SP" selected>São Paulo</option>
                <?php else: ?>
                    <option value="SP">São Paulo</option>
                <?php endif; ?>
                <?php if($owner->state == "SE"): ?>
                    <option value="SE" slected>Sergipe</option>
                <?php else: ?>
                    <option value="SE">Sergipe</option>
                <?php endif; ?>
                <?php if($owner->state == "TO"): ?>
                    <option value="TO" selected>Tocantins</option>
                <?php else: ?>
                    <option value="TO">Tocantins</option>
                <?php endif; ?></select>
                <label>Número:</label>
                <input class="form-control" value = "<?php echo e($owner->number); ?>" placeholder="numero" type="text" min= '1'  name= "number" size='10' value='' onkeypress='return SomenteNumero(event)'>
                <label>Complemento:</label>
                <input class="form-control" value = "<?php echo e($owner->complement); ?>" placeholder="Complemento" type="text"  name= "complement">
                <input type="hidden" name="id" value="<?php echo e($owner->id); ?>" />
            </div>
        </div>
    </div>
        <button type="submit" class="col-md-3 btn btn-success">atualizar</button>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </form>     

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>