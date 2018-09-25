<?php $__env->startSection('title', 'Novo Proprietário'); ?>

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
    <form method="POST" action="<?php echo e(route('owner.store')); ?>">
    <?php echo csrf_field(); ?>

    <div class ="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Cadastro de Proprietário</h3>
            </div>
                <div class="box-body">
                    <label>Nome Completo:</label>
                    <input class="form-control"  type="text" name= "fullName">
                    <label>E-mail:</label>
                    <input class="form-control"  type="email"  name= "email">
                    <label>CPF:</label>
                    <input name='cpf' type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="">
                    <label>Telefone:</label>
                    <input name='phone' type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999-9999&quot;" data-mask="">
                    <label>Celular:</label>
                    <input name='cellphone' type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 99999-9999&quot;" data-mask="">
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
                <input class="form-control"  type="text"  name= "street">
                <label>Cidade:</label>
                <input class="form-control"  type="text"  name= "city">
                <label>Estado:</label>
                <select class="form-control" name ="state" required>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG" selected>Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                  </select>
                <label>Numero:</label>
                <input class="form-control"  type="text"  name= "number">
                <label>Complemento:</label>
                <input class="form-control"  type="text"  name= "complement">
            </div>
        </div>
    </div>
         <button type="submit" class="btn btn-success col-md-3">Salvar</button>
    </div>
    </form>  
       

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>