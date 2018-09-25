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
                <input required class="form-control" type="text" name= "immobile_name">
                <label>CPF do proprietário:</label>
                <?php if(isset($owners)): ?>
                <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input  name='cpf' type="text" value="<?php echo e($owner->cpf); ?>" class="form-control" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <input name='cpf' type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="">
                <?php endif; ?>
                
                
                <label>Valor:</label>
                <input required class="form-control" type="text"  name= "value" size='10' value='' onkeypress='return SomenteNumero(event)'>
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
                <input required class="form-control" type="text"  name= "main_char_name">
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
                    <label>Cidade:</label> 
                    <input required class="form-control" type="text"  name= "city">
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
                <div class="col-md-2">
                    <div class="box box-primary" id="foto1">     
                        <input id="fileUpload1" name="image1" type="file" class="form-control"><br />
                        <div id="image-holder1"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box box-primary" id="foto2" style="visibility: hidden;">
                        <input id="fileUpload2"  name="image2" type="file" class="form-control"><br />
                        <div id="image-holder2"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box box-primary" id="foto3"style="visibility: hidden;">
                        <input id="fileUpload3"  name="image3" type="file" class="form-control"><br />
                        <div id="image-holder3"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box box-primary" id="foto4"style="visibility: hidden;">
                        <input id="fileUpload4"  name="image4" type="file" class="form-control"><br />
                        <div id="image-holder4"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box box-primary" id="foto5"style="visibility: hidden;">
                        <input id="fileUpload5"  name="image5" type="file" class="form-control"><br />
                        <div id="image-holder5"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box box-primary" id="foto6"style="visibility: hidden;">     
                        <input id="fileUpload6"  name="image6" type="file" class="form-control"><br />
                        <div id="image-holder6"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box box-primary" id="foto7"style="visibility: hidden;">
                        <input id="fileUpload7"  name="image7" type="file" class="form-control"><br />
                        <div id="image-holder7"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box box-primary" id="foto8" style="visibility: hidden;">
                        <input id="fileUpload8"  name="image8" type="file" class="form-control"><br />
                        <div id="image-holder8"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box box-primary" id="foto9" style="visibility: hidden;">
                        <input id="fileUpload9"  name="image9" type="file" class="form-control"><br />
                        <div id="image-holder9"></div>
                    </div>
                </div>
                <div class="col-md-2">
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