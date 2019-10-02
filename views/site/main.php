<html>
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        
        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="/web/assets/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="/web/assets/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/web/assets/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/web/assets/img/apple-touch-icon-114x114.png">
        <?php
        self::link();
        $this->Seo();
        ?>
        
        <!-- Stylesheet
        ================================================== -->
        <!-- Switcher Only -->
        <link rel="stylesheet" id="switcher-css" type="text/css" href="/web/styleswitcher/switcher.css" media="all" property=""/>
        
         <!-- Pre-Define Custom Style Sheet
        ================================================== -->
        <link rel="stylesheet" href="/web/assets/theme/green.css" title="green" media="all" property="">
        <link rel="alternate stylesheet" href="/web/assets/theme/indigo.css" title="indigo" media="all" property="">
        <link rel="alternate stylesheet" href="/web/assets/theme/hot-pink.css" title="hot-pink" media="all" property="">
        <link rel="alternate stylesheet" href="/web/assets/theme/orient.css" title="orient" media="all" property="">
        <link rel="alternate stylesheet" href="/web/assets/theme/red.css" title="red" media="all" property="">
        <link rel="alternate stylesheet" href="/web/assets/theme/yellow.css" title="yellow" media="all" property="">
        
        
        <script type="text/javascript" src="/web/assets/js/modernizr.custom.js"></script><!-- Modernizr -->
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="object"></div>
                </div>
            </div>
        </div>
        <div class="animsition">
            <!-- Main Navigation/Menu====================================-->
            <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="menu-wrapper">
                        <div class="navbar-header">
                            <a class="navbar-brand logo" href="#"><?=app\core\Lang::CoreTranslate()['ENGINE_NAME']?></a>
                        </div>  
                        <a href="#" class="menu-toggle" data-toggle="modal" data-target=".menupopup">
                            <div class="menu-pop">
                                <i class="icon ion-drag"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </nav>
            
            <!-- Modal Menu====================================-->
            <div id="menuOne">
                <div class="modal fade menupopup" tabindex="-1" role="dialog">
                    <div class="modal-ovelay"><!-- modal-ovelay -->
                        <div class="close-text" data-dismiss="modal" aria-label="Close"><i class="icon ion-close-round"></i></div>
                        <ul class="list-unstyled menu-lists">
                            <li class="active"><a href="/">Главная</a></li>
                            <li><a href="site/generate_class_php">Генератор PHP класса</a></li>
                            <li><a href="/#resume">Resume</a></li>
                            <li><a href="/#portfolio">Portfolio</a></li>
                            <li><a href="/#services">Services</a></li>
                            <li><a href="/#pricing ">Pricing </a></li>
                            <li><a href="blog1.html">Blog</a></li>
                            <li><a href="/#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <?=$this->views?>
        </div>
        <!-- Footer Section====================================-->
        <div id="tf-footer" class="text-center">
            <!--
            <ul class="list-inline social-media">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>-->
            <p class="copyright">© 2019 <?=app\core\Lang::CoreTranslate()['ENGINE_NAME']?>.</p>
        </div>
   
     <!-- Javascripts
       ================================================== -->
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <script type="text/javascript" src="/web/assets/js/jquery.1.11.2.js"></script>
   
       <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script type="text/javascript" src="/web/assets/js/bootstrap.js"></script>
       <!--JS for MAGNIFIC POPUP & ALL SCRIPTS& CALLS-->
       <script type="text/javascript" src="/web/assets/js/classie.js"></script>
       <script type="text/javascript" src="/web/assets/js/jquery.magnific-popup.min.js"></script>
       <script type="text/javascript" src="/web/assets/js/jquery.smooth-scroll.js"></script>  
       <script type="text/javascript" src="/web/assets/js/isotope.pkgd.min.js"></script>
       <script type="text/javascript" src="/web/assets/js/main.js"></script>
       
        <!--Demo Switcher-->
        <!--
        <div class="demo_changer">
            <div class="demo-icon"></div>
            <div class="form_holder">
                <p>Choose color</p>
                <div class="predefined_styles">
                    <a href="#" data-rel="green" class="styleswitch"><div class="green"></div></a>
                    <a href="#" data-rel="indigo" class="styleswitch"><div class="indigo"></div></a>
                    <a href="#" data-rel="hot-pink" class="styleswitch"><div class="hot-pink"></div></a>
                    <a href="#" data-rel="orient" class="styleswitch"><div class="orient"></div></a>
                    <a href="#" data-rel="red" class="styleswitch"><div class="red"></div></a> 
                    <a href="#" data-rel="yellow" class="styleswitch"><div class="yellow"></div></a>   
                </div>          
            </div>
        </div>-->
        <!-- END Switcher -->
       
       <!-- Demo Switcher JS -->
       <!--<script type="text/javascript" src="/web/styleswitcher/fswit.js"></script>-->
    </body>

</html>