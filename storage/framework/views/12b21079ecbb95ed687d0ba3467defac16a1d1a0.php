<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carlos Eduardo - Imóveis Rurais</title>
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">


        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>" />

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <!-- adicionar scroll suave na pagina Jquery-->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> 
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }
        /* Links */
        /* link que ainda não foi visitado */
        .btn-link:link 
        {
            text-decoration: none;
        }

        /* link que foi visitado */
        .btn-link:visited 
        {
            text-decoration: none;
        }

        /* mouse over */
        .btn-link:hover 
        {
            text-decoration: none;
        }

        /* link selecionado */
        .btn-link:active 
        {
            text-decoration: none;
        }
        a.branco:link 
        {
            text-decoration: none;
            color: #FFFFFF;
        }

        /* link que foi visitado */
        a.branco:visited 
        {
            color: #FFFFFF;
        }

        /* mouse over */
        a.branco:hover 
        {
            color: #FFFFFF;
        }

        /* link selecionado */
        a.branco:active 
        {
            color: #FFFFFF;
        }

        p.tro{
            color: red;
        }

        /* Fonts */
        .menufont{
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 20pt;
            color: white;
            padding: 0;
            padding-left: 30px;
            margin: 0;
        }

        h2{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            font-size: 50pt;
            color: black;
            padding-top: 2%;
            padding-bottom: 6%;
            margin: 0;
        }

        h3{
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 50pt;
            color: black;
            padding-top: 2%;
            padding-bottom: 2%;
        }

        h3.mainhighlight{
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 80pt;
            color: white;
            text-align: left;
            padding-bottom: 30px;
            padding-right: 30%;
        }

        p.highlighttext{
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 20pt;
            color: white;
            text-align: left;
            padding-bottom: 400px;
        }

        p.funcbutton{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            font-size: 20pt;
            color: black;
            margin-bottom: 0px;
            text-align: center;
        }

        p.phase{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            font-size: 18pt;
            color: black;
            margin-bottom: 0px;
            text-align: center;
        }

        p.immobilename{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            font-size: 25pt;
            color: black;
            padding-bottom: 1px;
        }

        p.immobiledesc{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            font-size: 15pt;
            color: black;
        }

        p.partnername{
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 25pt;
            color: white;
            margin-bottom: 0;
        }

        p.partnerdesc{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            font-size: 13pt;
            color:  white;
            padding-bottom: 1px;
        }

        p.footertxt{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            font-size: 20pt;
            color: white;
            margin: 0;
        }

        p.footerinfos{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            font-size: 12pt;
            color: white;
            padding:10px;
            margin: 0;
        }

        p.copy{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            font-size: 10pt;
            color: white;
            padding-bottom: 2%;
            margin: 0;
        }


        /* Id's */
        #home{
            height: 83vh;
            background-color: black;
        }

        #list{
            background-color: #E9E9E9;
            padding-top: 3%;
        }

        #banner{
            height: 30vh;
            background-color: green;
            background-image: url("../media/images/banner2.png");
        }

        #partnersdiv{
            background-color: white;
        }

        /* Class's */
        .navbar{
            position: absolute;
            z-index: 9999;
        }

        .lateralicons{
            left: 5px;
            bottom: 20px;
            position: absolute;
            z-index: 9999;
            padding-bottom: 2px;
        }

        .socialiconshome{
            padding: 10px;
            margin-bottom: 5px;
            height: 72px; 
            width: 80px;
            opacity: 0.5;
            transition: 0.3s;
        }

        .socialiconshome:hover{
            opacity: 20;
        }

        .carousel {
            padding: 0px;
        }

        .carousel-indicators{
            padding-bottom: 8%;
        }

        .highlightimg{
            height: 100vh;
            width:  100vw;
            filter: invert(25%);
        }

        .functionalbuttons{
            min-height:127px;
            background-color: white;
            max-width: 1382px;
            left:50%;
            transform: translateX(-50%);
            z-index:9999;
        }

        .linha-vertical {
            height: 100px;/*Altura da linha*/
            border-left: 2px solid;
            opacity: 0.7;
            margin-top: 14px;
            margin-bottom: 6px; 
        }

        .homebutton{
            height: 100px;
            background-color: yellow;
            padding: 20px;
        }

        .search{
            background-color: white;
            box-shadow: 5px 5px 5px #A9A9A9;
            width: 100%;
            padding-top: 1em;
            padding-bottom: 1em;
            padding-right: 2.5em;
            padding-left: 2.5em;
            margin-right: 2em;
        }

        .center{
            left: 50%;
            top: 50%;
            position: absolute;
            transform: translate(-50%, -62%);
        }

        .form-control{
            border-radius: 0 !important;
            background-color: #c0c0c0 !important;
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            font-size: 1em;
            outline: 0 !important;
        }

        .form-control:hover{
            cursor: pointer;
        }

        .selectbox{
            padding-top: 40px;
        }

        .lupa{
            margin-top: 45px;
            margin-bottom: 45px;
            height: 50px; 
            width: 50px;
        }

        .deck{
            padding-bottom: 50px;
        }

        .card{
            min-height: 600px;
            margin-left: 75px;
            margin-right: 75px;
            margin-top: 50px;
            padding: 0px;
        }

        .iconscard{
            margin-top: 20px;
            margin-bottom: 25px;
            margin-left: 10px;
        }

        .cardicons{
            height: 25px;
            width: 25px;
        }

        .container4 {
            background-color: #c0c0c0;
            position: relative;
            width: 50%;
        }

        .image {
          display: block;
          width: 100%;
          height: 423px;
        }

        .overlay {
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          height: 423px;
          width: 100%;
          opacity: 0;
          transition: .5s ease;
          background-color: #218049;
        }

        .container4:hover .overlay {
          opacity: 1;
        }

        .character{
           padding-top: 10px;
           padding-left: 20px;
           padding-right: 20px;  
        }
    
        .text {
          color: white;
          font-size: 20px;
          position: absolute;
          top: 50%;
          left: 50%;
          -webkit-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
          text-align: center;
        }

        .bannerlink{
            padding-top: 75px; 
        }

        .partnerscard {
            margin-top: 50px;
            margin-left: 75px;
            margin-right: 75px;
            padding: 0px;
            background-color: #9F4302;
        }

        .imagepartn {
          display: block;
          width: 100%;
          height: 350px;
        }

        .footer{
            min-height: 391px;
            background-color: #218049;

        }

        .socialicons{
            margin-top: 45px;
            margin-bottom: 45px;
            padding: 10px;
            height: 72px; 
            width: 80px;
            opacity: 0.5;
            transition: 0.3s;
        }

         .socialiconstrab{
            margin-top: 45px;
            margin-bottom: 45px;
            padding: 10px;
            height: 86px; 
            width: auto;
            opacity: 0.5;
            transition: 0.3s;
        }

        .mirror{
            height: 86px;
            -moz-transform: scale(-1, 1);
            -webkit-transform: scale(-1, 1);
            -o-transform: scale(-1, 1);
            -ms-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .socialicons:hover {
            opacity: 20;
        }

        .socialiconstrab:hover {
            opacity: 20;
        }
      
        /* Media query */
        @media (min-width: 572px){
            .navbar{
                right: 16px;
                top: 5px;
            }

            .form-control{
                height: 65px !important;
            }

            .footer{
                width: 1738px;
            }

            .page-footer{
                margin: 50px;
            }
        }

        @media (max-width: 571px){
            h3.mainhighlight{
                font-family: 'Montserrat', sans-serif;
                font-weight: 400;
                font-size: 40pt;
                color: white;

            }

            p.highlighttext{
                font-family: 'Montserrat', sans-serif;
                font-weight: 400;
                font-size: 15pt;
                color: white;
                padding-bottom: 120px;
            }

            .menufont{
                padding-left: 0px;
            }

            h2{
                font-size: 30pt;
            }

            h3{
                font-size: 30pt;
            }

            p.copy{
                font-size: 10pt;
            }
            
            .carousel-indicators{
                padding-bottom: 120px;
            }

            .lateralicons{
                display: none;
            }

            .linha-vertical{
                display: none;
            }

            .card{
                margin-left: 10px;
                margin-right: 10px;
                margin-top: 20px;
                padding: 0px;
            }   

            .selectbox{
                padding-top: 5px;
            }

            .lupa{
                margin-top: 0px;
                height: 40px;
                width: 40px;
                margin-bottom: 0px;

            }

            .card{
                width: 100%;
            }

            .partnerscard{
                margin: 10px;
                margin-top: 20px;
                padding: 0px;
            }

            .bannerlink{
                padding-top: 50px; 
            }

            .footer{
                width: 100%;
            }             
        }
    </style>
       
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: transparent">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active scroll" href="#"><p class="menufont">Home</p><span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?php echo e(route('about')); ?>"><p class="menufont">Sobre</p></a>
                    <a class="nav-item nav-link scroll" href="#list"><p class="menufont">Propriedades</p></a>
                    <a class="nav-item nav-link scroll" href="#contactus"><p class="menufont">Contato</p></a>
                </div>
            </div>
        </nav>

             <div class="container lateralicons">
                <!-- Facebook -->
                <ul class="lateralicons">
                    <li><a href="#"><img class="col-md-12 socialiconshome" src="../media/icons/fb.svg"></a></li>
                    <!-- instagram -->
                    <li><a href="#"><img class="col-md-12 socialiconshome" src="../media/icons/insta.svg"></a></li>
                    <!-- chat -->
                    <li><a data-toggle="modal" data-target="#messageModal"><img class="col-md-12 socialiconshome mirror" src="../media/icons/message.svg"></a></li>
                </ul>
            </div>
            <!-- Modal -->
            <div class="modal fade"id="messageModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <form action="<?php echo e(route('admin.contact.store')); ?>" method = "POST" >
            <?php echo csrf_field(); ?>

                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="messageModalLabel">Nova Mensagem</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Nome:</label>
                                <input type="text" class="form-inline col-md-12" name="name">
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="email" >E-mail:</label>
                                    <input type="email" class="form-inline col-md-12" name="email">
                                </div>
                                <div class="col-md-3">
                                    <label for="phone" >Telefone:</label>
                                    <input type="text"class="col-md-12" id="phone" name="phone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-form-label">Mensagem:</label>
                                <textarea  rows="5" class="col-md-12" name="message"></textarea>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Enviar mensages</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            

        <main id="home">
       
            <div class="container-fluid">
                <div class="row">
                    <div id="carouselmessageIndicators" class="my-slider carousel slide" data-ride="carousel">
                        <div class="container-fluid carousel">
                          <ol class="carousel-indicators">
                            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($feature->featured): ?>
                            <?php if($loop->first): ?>
                            <li data-target="#carouselmessageIndicators" data-slide-to="<?php echo e($loop->index); ?>" class="active"></li>
                            <?php else: ?>
                            <li data-target="#carouselmessageIndicators" data-slide-to="<?php echo e($loop->index); ?>"></li>
                            <?php endif; ?>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-inner">
                            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($loop->first): ?>
                            <div class="carousel-item active">
                            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($photo->immobile_id == $feature->id): ?>
                            <img class="d-block img-fluid highlightimg" src=<?php echo e(asset('storage/'.kebab_case($feature->immobile_name)."/".$photo->image)); ?> >
                            <?php break; ?>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="carousel-caption">
                                        <form action="<?php echo e(route('properties')); ?>" method = "POST" >
                                            <?php echo csrf_field(); ?>

                                            <input type="hidden" name="id" value=<?php echo e($feature->id); ?> /> 
                                            <h3 class="mainhighlight"><?php echo e($feature->immobile_name); ?></h3>
                                            <button type="submit" class="btn btn-link float-left"><p class="highlighttext">Ver Propriedade &#x27A4;</p></button>
                                        </form>
                                    </div>
                            </div>
                            <?php else: ?>
                            <div class="carousel-item">
                            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($photo->immobile_id == $feature->id): ?>
                            <img class="d-block img-fluid highlightimg" src=<?php echo e(asset('storage/'.kebab_case($feature->immobile_name)."/".$photo->image)); ?> >
                            <?php break; ?>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="carousel-caption">
                                        <form action="<?php echo e(route('properties')); ?>" method = "POST" >
                                            <?php echo csrf_field(); ?>

                                            <input type="hidden" name="id" value=<?php echo e($feature->id); ?> /> 
                                            <h3 class="mainhighlight"><?php echo e($feature->immobile_name); ?></h3>
                                            <button type="submit" class="btn btn-link float-left"><p class="highlighttext">Ver Propriedade &#x27A4;</p></a></button>
                                        </form>
                                    </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </main>

        <section>
                    <div class="col-sm-12 functionalbuttons">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 mx-auto my-md-4 my-0 mt-4 mb-2">
                                    <p class="phase text-uppercase">As melhores fazendas da região estão aqui!</p>
                                </div>
                                <div class="linha-vertical"></div>
                                <div class="col-xs-12 col-sm-12 col-md-3 mx-auto my-md-4 my-0 mt-4 mb-2">
                                    <a class="branco" href=""><p class="funcbutton text-uppercase" style="color:#218049">Cadastre a sua propriedade</p></a>
                                </div>
                                <div class="linha-vertical"></div>
                                <div class="col-xs-12 col-sm-12 col-md-3 mx-auto my-md-4 my-0 mt-4 mb-2">
                                    <a class="branco" href="#list" class="scroll"><p class="funcbutton text-uppercase" style="color:#CC6B41">Procure por uma propriedade</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="list">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 mx-auto">
                        <h2 class="text-center">ENCONTRE A SUA <b>PROPRIEDADE</b></h2>
                    </div>

                        <div class="col-xs-12 col-10 offset-1">    
                            <div class="search">       
                            <div class="row">
                                <div class="col-xs-12 col-md-6 col-lg-3 selectbox">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                            <option selected="selected">Característica</option>
                                            <?php $__currentLoopData = $main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($main_char->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-3 ">
                                    <div class="form-group selectbox">
                                        <select class="form-control" id="sel1">
                                            <option selected="selected">Localidade</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-3">
                                    <div class="form-group selectbox">
                                        <select class="form-control" id="sel1">
                                            <option selected="selected">Tamanho</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-2">
                                    <div class="form-group selectbox">
                                        <select class="form-control" id="sel1">
                                            <option selected="selected">Valor</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-1 text-center">
                                    <a href="#"><img class="lupa" src="../media/icons/lupa.svg"></a>
                                </div>
                            </div>
                        </div>

                    </div>


            <div class="deck container-fluid">
                <div class="row">
                    <?php $__currentLoopData = $immobiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="container4 card col-sm-12 col-md-3">
                            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($photo->immobile_id == $immobile->id): ?>
                            <img class="image" src=<?php echo e(asset('storage/'.kebab_case($immobile->immobile_name)."/".$photo->image)); ?>>
                            <?php break; ?>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <form  action="<?php echo e(route('properties')); ?>" method = "POST" >
                                    <?php echo csrf_field(); ?>

                                    <input type="hidden" name='id' value=<?php echo e($immobile->id); ?> /> 
                                    <button type="submit" class="btn btn-link"><div class="overlay">
                                </form>  
                                <div class="text">
                                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($immobile_main_char->immobile_id == $immobile->id): ?>
                                    <p><?php echo e($immobile_main_char->name); ?></p>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div></button>
                            <div class="container-fluid">
                                <div class="row character">
                                    <div class="col-sm-12 col-md-12">
                                         <p class="immobilename"><?php echo e($immobile->immobile_name); ?></p>     
                                    </div>
                                    <div class="col-sm-1 col-md-1 text-center">
                                        <img class="cardicons" src="../media/icons/expand-arrows.svg">
                                    </div>
                                    <div class="col-sm-10 col-md-5 text-center">
                                        <p class="immobiledesc"><?php echo e($immobile->size); ?> ha</p>
                                    </div>
                                    <div class="col-sm-1 col-md-1 text-center">
                                        <img class="cardicons" src="../media/icons/coin.svg">
                                    </div>
                                    <div class="col-sm-10 col-md-5 text-center">
                                        <p class="immobiledesc">R$<?php echo e($immobile->value); ?></p>
                                    </div>
                                </br>
                                </br>
                                    <div class="col-sm-1 col-md-1 text-center">
                                        <img class="cardicons" src="../media/icons/placeholder.svg">
                                    </div>
                                    <div class="col-sm-12 col-md-5 text-center">
                                        <p class="immobiledesc"><?php echo e($immobile->city); ?></p>
                                    </div>
                                    <div class="col-sm-1 col-md-1 text-center">
                                        <img class="cardicons" src="../media/icons/map.svg">
                                    </div>
                                    <div class="col-sm-12 col-md-5 text-center">
                                        <p class="immobiledesc"><?php echo e($immobile->state); ?></p>
                                    </div>
                                </div>
                            </div>
                        
                    
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </div>
                
            </div>
                <div class="mx-auto mb-4">
                    <?php echo $immobiles->links(); ?>

                </div>
        </section>
        

        <section id="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 mx-auto bannerlink">
                        <a class="branco" href="#"><h3 class="text-center" style="color:white;"><b>CADASTRE</b> SUA PROPRIEDADE</h3></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="partnersdiv">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 mx-auto">
                        <h2 class="text-center">OS NOSSOS <b>PARCEIROS</b></h2>
                    </div>
                </div>
            </div>

            <div class="deck container-fluid">
                <div class="row">
                    <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="partnerscard col-sm-12 col-md-3">
                        <img class="imagepartn" src=<?php echo e(asset('storage/'.kebab_case($partner->name)."/".$partner->image )); ?>>
                        <div class="container-fluid partnersinfo">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <p class="partnername"><?php echo e($partner->name); ?></p>
                                </div> 
                                <div class="col-sm-12 text-center">
                                    <p class="partnerdesc"><?php echo e($partner->number); ?></p>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        </section>

    <!-- Footer -->
    <footer class="page-footer font-small mdb-color lighten-3 pt-4" style="background-color: #218049;">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

            <!-- Content -->
            <p class="footertxt">aqui vai a logo desse site.</p>
            

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-2">

            <!-- Links -->
            <p class="footertxt font-weight-bold text-uppercase mb-4">MENU</p>

            <ul class="list-unstyled">
                <li>
                <p class="footerinfos">
                    <a class="branco" href="#home" class="scroll">HOME</a>
                </p>
                </li>
                <li>
                <p class="footerinfos">
                    <a class="branco" href="<?php echo e(route('about')); ?>">SOBRE</a>
                </p>
                </li>
                <li>
                <p class="footerinfos">
                    <a class="branco" href="#list" class="scroll">PROPRIEDADES</a>
                </p>
                </li>
                <li>
                <p class="footerinfos">
                    <a class="branco" href="#partnersdiv" class="scroll">PARCEIROS</a>
                </p>
                </li>
            </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div id="contactus" class="col-md-4 col-lg-4 mx-auto my-md-4 my-0 mt-4 mb-2">

            <!-- Contact details -->
            <p class="footertxt font-weight-bold text-uppercase mb-4">Contato</p>

            <ul class="list-unstyled">
                <li>
                <p class="footerinfos">
                    <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                </li>
                <li>
                <p class="footerinfos">
                    <i class="fa fa-envelope mr-3"></i> info@message.com</p>
                </li>
                <li>
                <p class="footerinfos">
                    <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                </li>
                <li>
                <p class="footerinfos">
                    <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </li>
            </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 text-center mx-auto my-4">

                <!-- Social buttons -->
                <p class="footertxt font-weight-bold text-uppercase mb-4">Follow Us</p>

                <!-- Facebook -->
                <a href="#"><img class="socialicons" src="../media/icons/fb.svg"></a>
                <!-- instagram -->
                <a href="#"><img class="socialicons" src="../media/icons/insta.svg"></a>
                <!-- Email -->
                <a href="#"><img class="socialiconstrab" src="../media/icons/contact.svg"></a>
            </div>
            <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->
        <hr class="mx-auto" style="width: 70%; color: white; height: 0.5px; background-color:white;" />
        <!-- Copyright -->
        <div class="footer-copyright text-center">
            <p class="copy">© 2018 Copyright:<a class="branco" href="https://mdbootstrap.com/bootstrap-tutorial/">Compjunior.com.br</p></a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?php echo e(asset('js/home.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
