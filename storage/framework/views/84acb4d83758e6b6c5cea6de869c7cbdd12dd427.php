<?php $__env->startSection('title', ' Atualizar Imóvel'); ?>

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
    <form method="POST" action="<?php echo e(route('immobile.update')); ?>">
    <?php echo csrf_field(); ?>

    <?php $__currentLoopData = $immobiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class ="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Cadastro de Propriedade</h3>
                </div>
                <div class="box-body">
                    <label>Nome da Propriedade:</label>
                    <input disabled class="form-control" value="<?php echo e($immobile->immobile_name); ?>" placeholder="Nome da propriedade" type="text" name= "immobile_name">
                    <label>CPF do proprietário:</label>
                    <input disabled name='cpf' type="text" class="form-control" value="<?php echo e($immobile->cpf); ?>" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="">
                    <label>Valor:</label>
                    <input required class="form-control"  value="<?php echo e($immobile->value); ?>"  placeholder="Valor" type="text"  name= "value" size='10' value='' onkeypress='return SomenteNumero(event)'>
                    <label>Tamanho da propriedade:</label>
                    <input required class="form-control" value="<?php echo e($immobile->size); ?>" placeholder="Tamanho da propriedade" type="text"  name= "size" size='10' value='' onkeypress='return SomenteNumero(event)'>
                    <label>Tipo de pagamento:</label>
                    <input required class="form-control" value="<?php echo e($immobile->type_of_payment); ?>"placeholder="Tipo de Pagamento" type="text"  name= "type_of_payment" size='10' value='' onkeypress='return SomenteNumero(event)'>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class ="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title" style="padding-bottom:5px;" >Principais Características</h3>
                </div>
                <div class="box-body">
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($immobile_main_char->name == 'cafeicultura'): ?>
                            <label class="col-md-6">
                                <input checked="checked" name= "cafeicultura" class="icheckbox_flat" type="checkbox"> Cafeicultura
                            </label>
                            <?php break; ?>
                        <?php elseif($loop->last): ?>
                            <label class="col-md-6">
                                <input name= "cafeicultura" class="icheckbox_flat" type="checkbox"> Cafeicultura
                            </label>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($immobile_main_char->name == 'lavoura_branca'): ?>
                            <label class="col-md-6">
                                <input checked="checked" name= "lavoura_branca" class="icheckbox_flat" type="checkbox"> Lavoura Branca
                            </label>
                            <?php break; ?>
                        <?php elseif($loop->last): ?>
                            <label class="col-md-6">
                                <input name= "lavoura_branca" class="icheckbox_flat" type="checkbox"> Lavoura Branca
                            </label>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($immobile_main_char->name == 'cria'): ?>
                            <label class="col-md-6">
                                <input checked="checked" name= "cria" class="icheckbox_flat" type="checkbox"> Cria
                            </label>
                            <?php break; ?>
                        <?php elseif($loop->last): ?>
                            <label class="col-md-6">
                                <input name= "cria" class="icheckbox_flat" type="checkbox"> Cria
                            </label>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>               
                        <?php if($immobile_main_char->name == 'recrio'): ?>
                            <label class="col-md-6">
                                <input checked="checked" name= "recrio" class="icheckbox_flat" type="checkbox"> Recrio
                            </label>
                            <?php break; ?>
                        <?php elseif($loop->last): ?>
                            <label class="col-md-6">
                                <input name= "recrio" class="icheckbox_flat" type="checkbox"> Recrio
                            </label>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($immobile_main_char->name == 'gado_de_corte'): ?>
                            <label class="col-md-6">
                                <input checked="checked" name= "gado_de_corte" class="icheckbox_flat" type="checkbox"> Gado de Corte
                            </label>
                            <?php break; ?>
                        <?php elseif($loop->last): ?>
                            <label class="col-md-6">
                                <input name= "gado_de_corte" class="icheckbox_flat" type="checkbox"> Gado de Corte
                            </label>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($immobile_main_char->name == 'gado_de_leite'): ?>
                            <label class="col-md-6">
                                <input checked="checked" name= "gado_de_leite" class="icheckbox_flat" type="checkbox"> Gado de Leite
                            </label>
                            <?php break; ?>
                        <?php elseif($loop->last): ?>
                            <label class="col-md-6">
                                <input name= "gado_de_leite" class="icheckbox_flat" type="checkbox"> Gado de Leite
                            </label>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($immobile_main_char->name == 'reflorestamento'): ?>
                            <label class="col-md-6">
                                <input checked="checked" name= "reflorestamento" class="icheckbox_flat" type="checkbox"> Reflorestamento
                            </label>
                            <?php break; ?>
                        <?php elseif($loop->last): ?>
                            <label class="col-md-6">
                                <input name= "reflorestamento" class="icheckbox_flat" type="checkbox"> Reflorestamento
                            </label>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
                        <?php if($immobile_main_char->name == 'reserva_legal'): ?>
                            <label class="col-md-6">
                                <input checked="checked" name= "reserva_legal" class="icheckbox_flat" type="checkbox"> Reserva Legal
                            </label>
                            <?php break; ?>
                        <?php elseif($loop->last): ?>
                            <label class="col-md-6">
                                <input name= "reserva_legal" class="icheckbox_flat" type="checkbox"> Reserva Legal
                            </label>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>       
                        <?php if($immobile_main_char->name == 'turismo'): ?>
                            <label class="col-md-6">
                                <input checked="checked" name= "turismo" class="icheckbox_flat" type="checkbox"> Turismo
                            </label>
                        <?php break; ?>
                        <?php elseif($loop->last): ?>
                            <label class="col-md-6">
                                <input name= "turismo" class="icheckbox_flat" type="checkbox"> Turismo
                            </label>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
                        <?php if($immobile_main_char->name == 'lazer'): ?>
                            <label class="col-md-6">
                                <input checked="checked" name= "lazer" class="icheckbox_flat" type="checkbox"> Lazer
                            </label>
                        <?php break; ?>
                        <?php elseif($loop->last): ?>
                            <label class="col-md-6">
                                <input name= "lazer" class="icheckbox_flat" type="checkbox"> Lazer
                            </label>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <label>Outra característica:</label>
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($immobile_main_char->main_char_id > 10): ?>
                            <input class="form-control" value="<?php echo e($immobile_main_char->name); ?>" placeholder="Principal característica" type="text"  name= "main_char_name">
                        <?php break; ?>
                        <?php elseif($loop->last): ?>
                            <input class="form-control" placeholder="Outra característica" type="text"  name= "main_char_name">    
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <label>Descrição:</label>
                    <?php $__currentLoopData = $immobiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <textarea required class="form-control" rows="3"  placeholder="Digite aqui..."  name= "description"><?php echo e($immobile->description); ?></textarea>
                </div>
            </div>
        </div>


            <div class ="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Endereço</h3>
                    </div>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo e($immobile->id); ?>" />
                        <label>Rua:</label>
                        <input required class="form-control" value="<?php echo e($immobile->street); ?>" placeholder="Rua" type="text"  name= "street">
                        <label>Cidade:</label>
                        <input required class="form-control" value="<?php echo e($immobile->city); ?>" placeholder="Cidade" type="text"  name= "city">
                        <label>Estado:</label>
                        <select class="form-control" id="state" name ="state" required>
                        <?php if($immobile->state == "AC"): ?>
                            <option value="AC" slected>Acre</option>
                        <?php else: ?>
                            <option value="AC">Acre</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "AL"): ?>
                            <option value="AL" selected>Alagoas</option>
                        <?php else: ?>
                            <option value="AL">Alagoas</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "AP"): ?>
                            <option value="AP" selected>Amapá</option>
                        <?php else: ?>
                            <option value="AP">Amapá</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "AM"): ?>
                            <option value="AM" selected>Amazonas</option>
                        <?php else: ?>
                            <option value="AM">Amazonas</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "BA"): ?>
                            <option value="BA" selected>Bahia</option>
                        <?php else: ?>
                            <option value="BA">Bahia</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "CE"): ?>
                            <option value="CE" selected>Ceará</option>
                        <?php else: ?>
                            <option value="CE">Ceará</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "DF"): ?>
                            <option value="DF" selected>Distrito Federal</option>
                        <?php else: ?>
                            <option value="DF">Distrito Federal</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "ES"): ?>
                            <option value="ES" selected>Espírito Santo</option>
                        <?php else: ?>
                            <option value="ES">Espírito Santo</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "GO"): ?>
                            <option value="GO" selected>Goiás</option>
                        <?php else: ?>
                            <option value="GO">Goiás</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "MA"): ?>
                            <option value="MA" selected>Maranhão</option>
                        <?php else: ?>
                            <option value="MA">Maranhão</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "MT"): ?>
                            <option value="MT" selected>Mato Grosso</option>
                        <?php else: ?>
                            <option value="MT">Mato Grosso</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "MS"): ?>
                            <option value="MS" selected>Mato Grosso do Sul</option>
                        <?php else: ?>
                            <option value="MS">Mato Grosso do Sul</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "MG"): ?>
                            <option value="MG" selected>Minas Gerais</option>
                        <?php else: ?>
                            <option value="MG">Minas Gerais</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "PA"): ?>
                            <option value="PA" selected>Pará</option>
                        <?php else: ?>
                            <option value="PA">Pará</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "PB"): ?>
                            <option value="PB" selected>Paraíba</option>
                        <?php else: ?>
                            <option value="PB">Paraíba</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "PR"): ?>
                            <option value="PR" selected>Paraná</option>
                        <?php else: ?>
                            <option value="PR">Paraná</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "PE"): ?>
                            <option value="PE" selected>Pernambuco</option>
                        <?php else: ?>   
                            <option value="PE">Pernambuco</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "PI"): ?>
                            <option value="PI" selected>Piauí</option>
                        <?php else: ?>
                            <option value="PI">Piauí</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "RJ"): ?>
                            <option value="RJ" selected>Rio de Janeiro</option>
                        <?php else: ?>
                        <option value="RJ">Rio de Janeiro</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "RN"): ?>
                            <option value="RN" selected>Rio Grande do Norte</option>
                        <?php else: ?>
                            <option value="RN">Rio Grande do Norte</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "RS"): ?>
                            <option value="RS" selected>Rio Grande do Sul</option>
                        <?php else: ?>
                            <option value="RS">Rio Grande do Sul</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "RO"): ?>
                            <option value="RO" selected>Rondônia</option>
                        <?php else: ?>
                            <option value="RO">Rondônia</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "RR"): ?>
                            <option value="RR" selected>Roraima</option>
                        <?php else: ?>
                            <option value="RR">Roraima</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "SC"): ?>
                            <option value="SC" selected>Santa Catarina</option>
                        <?php else: ?>
                            <option value="SC">Santa Catarina</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "SP"): ?>
                            <option value="SP" selected>São Paulo</option>
                        <?php else: ?>
                            <option value="SP">São Paulo</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "SE"): ?>
                            <option value="SE" slected>Sergipe</option>
                        <?php else: ?>
                            <option value="SE">Sergipe</option>
                        <?php endif; ?>
                        <?php if($immobile->state == "TO"): ?>
                            <option value="TO" selected>Tocantins</option>
                        <?php else: ?>
                            <option value="TO">Tocantins</option>
                        <?php endif; ?>
                        </select>
                        <label>Número:</label>
                        <input class="form-control" value="<?php echo e($immobile->number); ?>" placeholder="numero" type="text"  name= "number" value=''s>
                        <label>Complemento:</label>
                        <input class="form-control" value="<?php echo e($immobile->complement); ?>" placeholder="Complemento" type="text"  name= "complement">
                    </div>
                </div>
            </div>
            <?php if($immobile->featured == 1): ?>
                <label style="padding-left:20px;">
                    <input checked="checked" name= "featured" class="icheckbox_flat" type="checkbox"> Destaque
                </label>
            <?php else: ?>
                <label style="padding-left:20px;">
                    <input name= "featured" class="icheckbox_flat" type="checkbox"> Destaque
                </label>

            <?php endif; ?>
            
            <input type="hidden" name="address_id" value="<?php echo e($immobile->immobile_address_id); ?>" />
            <button type="submit"  class="btn btn-success">Atualizar</button>
        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>