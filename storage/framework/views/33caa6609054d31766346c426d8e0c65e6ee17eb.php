<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carlos Eduardo - Imóveis Rurais</title>
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">


        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">

        <script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <!-- adicionar scroll suave na pagina Jquery-->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> 
        
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
            font-size: 25pt;
            color: black;
        }
        h2{
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 3em;
        }

        p{
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
        }

        p.details{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            font-size: 2em;
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

        .nav-background{
            background-color: black !important;
            transition: 0.8s !important;
        }        

        .pilares {
            background: #EFF0F2;
            padding-top: 10vh;
            padding-bottom: 10vh;
        }

        .descricao {
            background: white;
            padding: 4.15em;

        }

        .informacoes {
            background: white;
            padding: 2em;
        }

        .space {
            margin-top: 10vh;
        }

        .nossos-pilares{
            padding-bottom: 75px;
        }
        .background-about{
            background-image: url("../media/images/entrepreneur-593358_1920.jpg");
            height: 100vh;
            background-size: cover;
            background-position: center;

        }

        .text-about{
            color: white;
            bottom: 50%;
            top: 50%;
            left: 250px;
            position: absolute;
            transform: translate(-50%, -50%);
        }

        .footer{
            padding-top: 30px !important;
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

        .socialicons:hover {
            opacity: 20;
        }

        .socialiconstrab:hover {
            opacity: 20;
        }

        @media  screen and (max-width: 645px){

            .text-about{
                left: 150px;
            }
            
            h2{
                font-size: 2em;
            }
            
            .details{
                font-size: 1em;
            }

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

            .footer{
                width: 100%;
            }             
        }    

    </style>
       
    </head>
    <body style="background-color: #EFF0F2;">
        <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
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
                        <a href="#homesobre" class="navbartxt" style="padding-right: 30px !important;">Sobre</a>
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

    <section>
        <div id="homesobre" class="container-fluid background-about">
            <div class="text-about">
                    <h2>CARLOS EDUARDO</h2>
                    <a href="#pila" class="scroll"><p class="datails">Ver detalhes</p></a>
            </div>
        </div>
    </section>

    <section id="pila" class="pilares nav-back">
        <div class="container-fluid nossos-pilares">
                <h1 class="text-center">OS NOSSOS <b>PILARES</b></h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img class="img-responsive" src="../media/images/entrepreneur-593358_1920.jpg">
                </div>
                <div class="col-md-7">
                    <div class="descricao">
                        <h5>Descrição</h5>
                        <p>
                            É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).
                        </p>
                    </div>
                </div>
            </div>

            <div class="row space">
                <div class="col-md-7">
                    <div class="descricao">
                        <h5>Descrição</h5>
                        <p>
                            É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="img-responsive" src="../media/images/entrepreneur-593358_1920.jpg">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 verde">
                    
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
                    <a href="#homesobre" class="scroll">SOBRE</a>
                </p>
                </li>
                <li>
                <p class="footerinfos">
                    <a href="#list" class="scroll">PROPRIEDADES</a>
                </p>
                </li>
                <li>
                <p class="footerinfos">
                    <a href="#partnersdiv" class="scroll">PARCEIROS</a>
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
    <script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1200);
        });
    });

</script>

    </body>
</html>
