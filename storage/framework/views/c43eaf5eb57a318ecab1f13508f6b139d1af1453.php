<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carlos Eduardo - Imóveis Rurais</title>
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">

        <script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script>
            jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1200);
            });
            });

    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        /* Links */
        /* link que ainda não foi visitado */
        a:link 
        {
            text-decoration: none;
            color: #FFFFFF;
        }

        /* link que foi visitado */
        a:visited 
        {
            color: #FFFFFF;
        }

        /* mouse over */
        a:hover 
        {
            color: #FFFFFF;
        }

        /* link selecionado */
        a:active 
        {
            color: #FFFFFF;
        }

        h1{
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 3.5em;
            color: black;
        }
        h2{
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 50pt;
            z-index: 999;
        }

        p{
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
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

        #barra-navegacao{
            padding-left: 40px;
        }

        .navbartxt{
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 20pt;
            color: white;
        }


        div.carousel-inner {
            max-height: 100vh;
            min-width: 100%;
        }

        nav.navbar-transparente {
            padding: 5px 0;
            border: none;
            font-size: 18px;
            letter-spacing: 1px;
            font-weight: 200;
            background-color: rgba(0,0,0,0);
            transition: 0.8s;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: white;
        }

        .navbar-inverse .navbar-nav>li>a:hover {
            color: #9D9D9D;
        }

        .navbar{
            -webkit-transition: max-height 0.8s;
            -moz-transition: max-height 0.8s;
            transition: max-height 0.8s;
        }

        .propriedade {
            background: #d3d3d3;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .descricao {
            background: white;
            padding: 20px;
        }

        .informacoes {
            background: white;
            padding: 20px;
        }

        .carousel-caption{
            top: 50%;
            transform: translateY(-50%);
            bottom: initial;
            text-align: start;
        }

        .nav-background{
            background-color: black !important;
            transition: 0.8s !important;
            
        }

        .item{
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .chevron-right{
            top: 46%;
            bottom: 50%;
            position: absolute;
            filter: invert(100%);
            transform: rotate(180deg);
        }
        .chevron-left{
            left:;
            top: 46%;
            bottom: 50%;
            position: absolute;
            filter: invert(100%);
        }

        footer{
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
        @media (min-width: 1024px){
            nav.navbar-transparente{
                padding-left: 640px;
                padding-top: 15px;
            }
            .footer{
                width: 1738px;
            }

            .page-footer{
                margin: 50px;
            }

            .linhas{
                display: none;
            }

            .linhafooter{
                width: 70%;
                color: white;
                height: 1px;
                background-color:white;
                margin-left:15%;
            }
        }

        @media (max-width: 1024px){
            h2{
                font-size: 40pt;
            }

            .lateralco {
                display: none;
            }

            .footer{
                width: 100%;
            } 

            .chevron-left{
                display: none;
            }

            .chevron-right{
                display: none;
            }
            
            nav.navbar-transparente{
                padding-left: 0;
                padding-top: 10px;
            }                
        }    
    </style>
       
    </head>
    <body style="background-color: #D3D3D3;">
        <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente positionnav">
        <div class="container">

            <!-- header -->
            <div class="navbar-header">

                <!-- botao toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
                    <span class="sr-only">alternar navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- navbar -->
            <div class="collapse navbar-collapse" id="barra-navegacao">

                <ul class="nav navbar-nav navbar-right ultraLight">
                    <li>
                        <a href="<?php echo e(route('home')); ?>" class="navbartxt" style="padding-right: 30px !important;">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('about')); ?>" class="navbartxt" style="padding-right: 30px !important;">Sobre</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('home')); ?>" class="navbartxt" style="padding-right: 30px !important;">Propriedades</a>
                    </li>
                    <li>
                        <a href="#contactus" class="navbartxt scroll">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /container -->
    </nav>


    <section class="slider">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          
            <!-- Wrapper for slides -->
            
            <div class="carousel-inner" role="listbox">
                <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?>
                <div class="item active" style="filter: invert(18%); background-image: url(<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image)); ?>);">
                    <div class="carousel-caption">
                        <h2><?php echo e($photo->immobile_name); ?></h2>
                    </div>
                </div>
                <?php else: ?>
                <div class="item" style="filter: invert(18%); background-image: url(<?php echo e(asset('storage/'.kebab_case($photo->immobile_name)."/".$photo->image)); ?>);">
                    <div class="carousel-caption">
                        <h2><?php echo e($photo->immobile_name); ?></h2>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          
            <!-- Controls -->
              <img src="../media/icons/chevron-left_icon-icons.com_48335.ico" class="chevron-left" >
                <a class="lateralco left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <img src="../media/icons/chevron-left_icon-icons.com_48335.ico" class="chevron-right" aria-hidden="false">
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>

    <section class="propriedade nav-back">
        <div class="container">
            <div class="row">
                <div class="col-md-6 descricao">
                    <h5>Descrição</h5>
                    <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($photo->description); ?></p>
                    <?php break; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-md-4 col-md-offset-2 informacoes">
                    <h5>Características</h5>
                    <?php $__currentLoopData = $immobile_main_chars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobile_main_char): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($immobile_main_char->name); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        </div>
    </section>
       <!-- Footer -->
    <footer class="page-footer font-small mdb-color lighten-3 pt-4" style="background-color: #218049; padding-top: 50px;">

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

            <hr class="linhas clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-2">

            <!-- Links -->
            <p class="footertxt" style="margin-bottom: 30px;"><b>MENU</b></p>

            <ul class="list-unstyled">
                <li>
                <p class="footerinfos">
                    <a href="<?php echo e(route('home')); ?>">HOME</a>
                </p>
                </li>
                <li>
                <p class="footerinfos">
                    <a href="<?php echo e(route('about')); ?>">SOBRE</a>
                </p>
                </li>
                <li>
                <p class="footerinfos">
                    <a href="#" class="scroll">PROPRIEDADES</a>
                </p>
                </li>
                <li>
                <p class="footerinfos">
                    <a href="" class="scroll">PARCEIROS</a>
                </p>
                </li>
            </ul>

            </div>
            <!-- Grid column -->

            <hr class="linhas clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div id="contactus" class="col-md-4 col-lg-4 mx-auto my-md-4 my-0 mt-4 mb-2">

            <!-- Contact details -->
            <p class="footertxt text-uppercase" style="margin-bottom: 30px;"><b>Contato</b></p>

            <ul class="list-unstyled">
                <li>
                <p class="footerinfos">
                    <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                </li>
                <li>
                <p class="footerinfos">
                    <i class="fa fa-envelope mr-3"></i> info@example.com</p>
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

            <hr class="linhas clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 text-center mx-auto my-4">

                <!-- Social buttons -->
                <p class="footertxt text-uppercase" style="margin-bottom: 30px;"><b>Follow Us</b></p>

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
        <hr class="linhafooter"/>
        <!-- Copyright -->
        <div class="footer-copyright text-center">
            <p class="copy">© 2018 Copyright:<a href="https://mdbootstrap.com/bootstrap-tutorial/">Compjunior.com.br</p></a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script type="text/javascript" src="<?php echo e(asset('js/script.js')); ?>"></script>
    </body>
</html>
