<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>

	<title>Bienvenido a Alto Piacere</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->

    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="<?= base_url(); ?>css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>css/style.css" type="text/css" />
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="<?= base_url(); ?>css/responsive-leyouts.css" type="text/css" />  

<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/blue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="css/colors/brown.css" />-->

<!-- just remove the below comments witch bg patterns you want to use -->  
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-nine.css" />-->
    
<!-- just remove the below comments witch bg images you want to use -->  
    <!--<link rel="stylesheet" href="css/bg-images/bgimages-one.css" />-->
    <!--<link rel="stylesheet" href="css/bg-images/bgimages-two.css" />-->
    <!--<link rel="stylesheet" href="css/bg-images/bgimages-three.css" />-->
    <!--<link rel="stylesheet" href="css/bg-images/bgimages-four.css" />-->
    <!--<link rel="stylesheet" href="css/bg-images/bgimages-five.css" />-->
    
    <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" type="text/css" href="js/revolutionslider/css/fullwidth.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="js/revolutionslider/rs-plugin/css/settings.css" media="screen" />
    
    <!-- style switcher -->
    <link rel = "stylesheet" media = "screen" href = "js/style-switcher/color-switcher.css" />
    
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skin.css" />
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skintwo.css" />
    
    <!-- faqs -->
    <link rel="stylesheet" href="js/accordion/accordion.css" type="text/css" media="all">
      <!-- portfolio css -->
    <link rel="stylesheet" href="js/portfolio/prettyPhoto.css" type="text/css" media="screen" />
    
    <!-- jquery search -->
    <link rel="stylesheet" href="js/jquerysearch/style.css" type="text/css" media="all">
    
</head>

<body>

<div class="site_wrapper">
<div class="boxed_wrapper">
    
    <div class="container_full">
        
        <div class="top_section">
 
            <div id="logo">
                <a href="home" class="site_logo">
                    <img src="images/logo.png" width="230">
                </a>
                 <a href="home" class="site_logo altopiacere">
                    <img src="images/altopiacere3.png" width="340">
                </a>
            </div><!-- end logo -->
            
            <div class="top_contact_info">
            
                    <ul class="tci_list">
                        <li class="">
                            <a href="https://www.facebook.com/AltoPiacere?fref=ts">
                                <img src="images/fb2.png" height="33" >
                            </a>
                        </li>
                        <li class="">
                            <img src="images/fono.png" >
                        </li>
                        
                        <li><img src="images/delivery.png" height="33" >
                        </li>
                       
                     
                    </ul>
                 
                 <div class="clearfix"></div>
                        
    
                      
            </div><!-- end top contact info -->
        
        </div>

     <nav id="access" class="access" role="navigation">
                <div id="menu" class="menu">
                    
                    <ul id="tiny">
                        <?php if ($indice==1) { ?>
                          <li><a href="home" class="active">Home</a></li>
                        <?php  }else{ ?>
                            <li><a href="home" >Home</a></li>      
                        <?php } ?>
                        <?php if ($indice==2) { ?>
                            <li><a href="cucinadautore" class="active">Cucina d` Autore</a></li>  
                        <?php  }else{ ?>
                            <li><a href="cucinadautore">Cucina d` Autore</a></li>  
                        <?php } ?>
                        <?php if ($indice==3) { ?>
                            <li><a href="menu?cat=2" class="active"> Menu</a></li>
                        <?php  }else{ ?>
                           <li><a href="menu?cat=2">Menu</a></li>
                        <?php } ?>
                         <?php if ($indice==4) { ?>
                           <li><a href="promociones" class="active">Promociones</a></li>
                        <?php  }else{ ?>
                          <li><a href="promociones">Promociones</a></li>
                        <?php } ?>
                        <?php if ($indice==5) { ?>
                           <li><a href="galeria" class="active">Galeria Alto Piacere</a></li>
                        <?php  }else{ ?>
                          <li><a href="galeria">Galeria Alto Piacere</a></li>
                        <?php } ?>
                         <?php if ($indice==6) { ?>
                           <li><a href="locales" class="active">Locales</a></li>
                        <?php  }else{ ?>
                           <li><a href="locales">Locales</a></li>
                        <?php } ?>
                         <?php if ($indice==7) { ?>
                            <li><a href="contacto" class="active">Contacto</a></li>
                        <?php  }else{ ?>
                           <li><a href="contacto">Contacto</a></li>
                        <?php } ?>
                       
                        
                       
                        
                        
                       
                        
                    </ul>
                </div>
                
          </nav>  

</div><!-- end top -->