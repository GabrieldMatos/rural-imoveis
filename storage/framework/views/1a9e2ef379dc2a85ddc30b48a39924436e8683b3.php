<?php $__env->startSection('title', 'Novo Imóvel'); ?>

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

<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('immobile.store')); ?>"  enctype="multipart/form-data" >
    <?php echo csrf_field(); ?>

     <div class ="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title"style="padding-bottom:5px;" >Cadastro de Propriedade</h3>
            </div>
            <div class="box-body">
           
                <label>Nome da Propriedade:</label>
                <?php if(isset($registrations)): ?>
                <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input required class="form-control" value="<?php echo e($registration->immobile_name); ?>" type="text" name= "immobile_name">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <input required class="form-control" type="text" name= "immobile_name">
                <?php endif; ?>
                <label>CPF do proprietário:</label>
                <?php if(isset($registrations)): ?>
                <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input required  name='cpf' type="text" value="<?php echo e($registration->cpf); ?>" class="form-control" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="">
                    <input required type="hidden" name="registration_id" value="<?php echo e($registration->id); ?>" />
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php elseif(isset($owners)): ?>
                <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input required  name='cpf' type="text" value="<?php echo e($owner->cpf); ?>" class="form-control" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <input required name='cpf' type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="">
                <?php endif; ?>
                
                
                <label>Valor:</label>
                <?php if(isset($registrations)): ?>
                <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input required class="form-control" type="text" value="<?php echo e($registration->value); ?>"  name= "value" size='10' value='' onkeypress='return SomenteNumero(event)'>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <input required class="form-control" type="text"  name= "value" size='10' value='' onkeypress='return SomenteNumero(event)'>
                <?php endif; ?>
                <label>Tamanho da propriedade:</label>
                <input required class="form-control" type="text"  name= "size" size='10' value='' onkeypress='return SomenteNumero(event)'>
                <label>Tipo de pagamento:</label>
                <input required class="form-control" type="text"  name= "type_of_payment" size='10' value='' onkeypress='return SomenteNumero(event)'>
            </div>
        </div>
    </div>
    <div class ="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Principais Característica</h3>
            </div>
            <div class="box-body">
                <label class='col-md-6'>
                <input class="icheckbox_flat" name= "cafeicultura" type="checkbox"> Cafeicultura
                </label>
                <label class='col-md-6'>
                <input class="icheckbox_flat" name= "lavoura_branca" type="checkbox"> Lavoura-branca
                </label>
                <label class='col-md-6'>
                <input class="icheckbox_flat" name= "cria" type="checkbox"> Cria
                </label>
                <label class='col-md-6'>
                <input class="icheckbox_flat" name= "recrio" type="checkbox"> Recrio
                </label>
                <label class='col-md-6'>
                <input class="icheckbox_flat" name= "gado_de_corte" type="checkbox"> Gado de corte
                </label>
                <label class='col-md-6'>
                <input class="icheckbox_flat" name= "gado_de_leite" type="checkbox"> Gado de leite
                </label>
                <label class='col-md-6'>
                <input class="icheckbox_flat" name= "reflorestamento" type="checkbox"> Reflorestamento
                </label>
                <label class='col-md-6'>
                <input class="icheckbox_flat" name= "reserva_legal" type="checkbox"> Reserva legal
                </label>
                <label class='col-md-6'>
                <input class="icheckbox_flat" name= "turismo" type="checkbox"> Turismo
                </label>
                <label class='col-md-6'>
                <input class="icheckbox_flat" name= "lazer" type="checkbox"> Lazer
                </label>
                <label>Outra Característica:</label>
                <input class="form-control" type="text"  name= "main_char_name">
                <label>Descrição:</label>
                <textarea required class="form-control" rows="3"  placeholder="Digite aqui..."  name= "description"></textarea>
            </div>
        </div>
    </div>
   <div class ="col-md-12">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Endereço</h3>
            </div>
                <div class="box-body">
                    <label>Rua:</label>
                    <input required class="form-control" type="text"  name= "street">                  
                    <label>Estado:</label>
                    <?php if(isset($registrations)): ?>
                    <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
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
                    <?php endif; ?>
                    <label>Cidade:</label>
                    <?php if(isset($registrations)): ?>
                    <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input required class="form-control" value="<?php echo e($registration->city); ?>" type="text"  name= "city">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <input required class="form-control" type="text"  name= "city">
                    <?php endif; ?>
                    <label>Número:</label>    
                    <input class="form-control"  type="text" min= '1'  name= "number" size='10' value='' onkeypress='return SomenteNumero(event)'>
                    <label>Complemento:</label>
                    <input class="form-control"  type="text"  name= "complement">
                </div>
            </div>
        </div>
         <div class ="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title" >Fotos</h3>
                </div>
                <div class="box-body">
                <div class="col-md-4">
                    <div class="box box-primary" id="foto1">     
                        <input id="fileUpload1" required name="image1" type="file" class="form-control"><br />
                        <div id="image-holder1"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto2" style="visibility: hidden;">
                        <input id="fileUpload2"  name="image2" type="file" class="form-control"><br />
                        <div id="image-holder2"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto3"style="visibility: hidden;">
                        <input id="fileUpload3"  name="image3" type="file" class="form-control"><br />
                        <div id="image-holder3"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto4"style="visibility: hidden;">
                        <input id="fileUpload4"  name="image4" type="file" class="form-control"><br />
                        <div id="image-holder4"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto5"style="visibility: hidden;">
                        <input id="fileUpload5"  name="image5" type="file" class="form-control"><br />
                        <div id="image-holder5"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto6"style="visibility: hidden;">     
                        <input id="fileUpload6"  name="image6" type="file" class="form-control"><br />
                        <div id="image-holder6"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto7"style="visibility: hidden;">
                        <input id="fileUpload7"  name="image7" type="file" class="form-control"><br />
                        <div id="image-holder7"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto8" style="visibility: hidden;">
                        <input id="fileUpload8"  name="image8" type="file" class="form-control"><br />
                        <div id="image-holder8"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto9" style="visibility: hidden;">
                        <input id="fileUpload9"  name="image9" type="file" class="form-control"><br />
                        <div id="image-holder9"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary" id="foto10" style="visibility: hidden;">
                        <input id="fileUpload10"  name="image10" type="file" class="form-control"><br />
                        <div id="image-holder10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn  btn-ms btn-success" >Salvar</button>    
    <label style="padding-left:20px;">
        <input class="icheckbox_flat" name= "featured" type="checkbox"> Destaque
    </label>
    </form>     

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>