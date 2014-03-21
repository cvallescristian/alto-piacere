    
    <!-- portfolio css -->
    <link rel="stylesheet" href="js/portfolio/prettyPhoto.css" type="text/css" media="screen" />
         <!-- jquery search -->
    <link rel="stylesheet" href="js/jquerysearch/style.css" type="text/css" media="all">
<!-- Content
======================================= -->

<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1>Promociones</h1></div>
        
	</div>
</div><!-- end page title -->    

<div class="container">

    <div class="content_fullwidth">
        	
	<div class="one_fill">
          <h2>Promociones de Pizzas</h2>
          	<ul class="gallery clearfix">
            	<li>
            		<ul class="gallery clearfix">
                    <?php foreach ($lista_promocion as $promocion) { ?>
                        <li class="border_twocol"><a href="<?=base_url('images/promocion/'.$promocion->promocion_id.'.png') ?>" title="prettyPhoto"><img src="<?=base_url('images/promocion/'.$promocion->promocion_id.'.png') ?>" alt="" /></a>
                            <strong><?= $promocion->titulo?> $<?= $promocion->precio?></strong>
                            <p><?= $promocion->descripcion?> </p>
                        </li>
                    <?php } ?>
                   </ul>
         		</li>
            </ul>
          
          </div><!-- end section -->

    
    </div>

</div><!-- end contant area -->

 
</div>
</div>


<!-- Footer
======================================= -->

<div class="footer_boxed">

<div class="footer">
  
    <div class="footer_center">
  
      <div class="one_fourth">
        <h2>Alto Piacere</h2>
        <div class="dh_line"></div>
            <ul class="address-liste">
              <li class="icon1">Av Reñaca - Con con ,<br />Valparaiso, Chile</li>
                <li class="icon2">Telefono: (32) 319 9428</li>
                <li class="icon3"> E-mail: contacto@altopiacere.cl</li>
             
            </ul>
        </div><!-- end address info -->
        
        <div class="one_fourth">
        <h2>Siguenos</h2>
        <div class="dh_line"></div>
          <ul class="socials-list">
                <li><a href="#" title="facebook"><img src="images/footer-socials-01.png" alt="" />Facebook</a></li>
                <li><a href="#" title="twitter"><img src="images/footer-socials-02.png" alt="" />Twitter</a></li>
           
                </ul>
        </div>
        
        
        <div class="one_fourth">
        <h2>Horario de Atención</h2>
        <div class="dh_line"></div>
        <ul class="address-liste">
              <li >Hotario de atención</li><br>
                <li >Lunes a Viernes  10am to 1am</li>
                <li >Sabado 10am to 2pm</li>
                <li>Domingo 10am to 2pm</li>
             
            </ul>    
        
        </div>
        
        
        <div class="one_fourth last">
        <h2>Delivery</h2>
        <div class="dh_line"></div>
         <ul class="address-liste">
              <li >Reparto Gratis a todo Con Con y Reñaca por Compras sobre $ 5.000 Llámanos al (032) 319 9428 o simplemente solicita tu pedido por inbox Puedes pagar con REDCOMPRA </li><br>
          
             
            </ul> 
        
        </div>

    
    </div>

</div><!-- end footer all columns --> 



</div><!-- end footer -->




<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script>

<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- main menu -->
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>

<!-- jquery jcarousel -->
<script type="text/javascript" src="js/jcarousel/jquery.jcarousel.min.js"></script>

<!-- portfolio -->
<script src="js/portfolio/jquery.prettyPhoto.js" type="text/javascript"></script>

<script type="text/javascript">
      $(document).ready(function(){
        $("area[title^='prettyPhoto']").prettyPhoto();
        
        $(".gallery:first a[title^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
        $(".gallery:gt(0) a[title^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
    
        $("#custom_content a[title^='prettyPhoto']:first").prettyPhoto({
          custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
          changepicturecallback: function(){ initialize(); }
        });

        $("#custom_content a[title^='prettyPhoto']:last").prettyPhoto({
          custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
          changepicturecallback: function(){ _bsap.exec(); }
        });
      });
</script>

<!-- progress bar -->
<script src="js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" src="js/mainmenu/scripts.js"></script>

<!-- top show hide plugin script-->
<script src="js/show-hide-plugin/showHide.js" type="text/javascript"></script>

<!-- Toggle -->
<script type="text/javascript">
    $(document).ready(function(){
      $("#colosebut1").click(function(){
        $("#div1").fadeOut("slow");
      });
      $("#colosebut2").click(function(){
        $("#div2").fadeOut("slow");
      });
      $("#colosebut3").click(function(){
        $("#div3").fadeOut("slow");
      });
      $("#colosebut4").click(function(){
        $("#div4").fadeOut("slow");
      });
    
    });
</script>

<!-- jquery search -->
<script src="js/jquerysearch/jquery.color.js"></script>
<script src="js/jquerysearch/script.js"></script>

<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>


<!-- jquery jcarousel -->
<script type="text/javascript">

  jQuery(document).ready(function() {
      jQuery('#mycarousel').jcarousel();
  });
  
  jQuery(document).ready(function() {
      jQuery('#mycarouseltwo').jcarousel();
  });
  
</script>

<script type="text/javascript" src="js/accordion/custom.js"></script>




</body>
</html>


