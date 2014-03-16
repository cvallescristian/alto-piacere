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
                <li class="icon2">1234-567-89000</li>
                <li class="icon3">0123-4567-8900</li>
             
            </ul>
        </div><!-- end address info -->
        
        <div class="one_fourth">
        <h2>Siguenos</h2>
        <div class="dh_line"></div>
        	<ul class="socials-list">
                <li><a href="#" title="facebook"><img src="images/footer-socials-01.png" alt="" />Connect with Facebook</a></li>
                <li><a href="#" title="twitter"><img src="images/footer-socials-02.png" alt="" />Follow on Twitter</a></li>
                <li><a href="#" title="google plus"><img src="images/footer-socials-03.png" alt="" />Sharing on Google+</a></li>
     			<li><a href="#" title="you tube"><img src="images/footer-socials-04.png" alt="" />Connect with Linkedin</a></li>
                </ul>
        </div>
        
        
        <div class="one_fourth">
        <h2>Noticias de Twitter</h2>
        <div class="dh_line"></div>
        
        <div class="twitter_feed">
        
        <p><script src="js/twitter/widget.js"></script>
                <script>
                new TWTR.Widget({
                  version: 2,
                  type: 'profile',
                  rpp: 2,
                  interval: 5000,
                  width: 250,
                  height: 270,
                  theme: {
                    shell: {
                      background: 'transparent',
                      color: '#333'
                    },
                    tweets: {
                      background: 'transparent',
                      color: '#999',
                      links: '#727272'
                    }
                  },
                  features: {
                    scrollbar: false,
                    loop: false,
                    live: false,
                    hashtags: true,
                    timestamp: true,
                    avatars: false,
                    behavior: 'all'
                  }
                }).render().setUser('gsrthemes9').start();
                </script>
            </p>
            
        </div>
        
        </div>
        
        
        <div class="one_fourth last">
        <h2>Galeria</h2>
        <div class="dh_line"></div>
        
        	<div id="flickr_badge_wrapper">
            	<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=h&amp;source=user&amp;user=93382411%40N07"></script>
            
            </div>
        
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

<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="js/mainmenu/scripts.js"></script>

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


<script type="text/javascript">

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;

			tpj('.fullwidthbanner').revolution(
				{
					delay:9000,
					startwidth:980,
					startheight:500,

					onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

					thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
					thumbHeight:50,
					thumbAmount:3,

					hideThumbs:200,
					navigationType:"none",				// bullet, thumb, none
					navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

					navigationStyle:"square",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


					navigationHAlign:"right",				// Vertical Align top,center,bottom
					navigationVAlign:"bottom",					// Horizontal Align left,center,right
					navigationHOffset:50,
					navigationVOffset:55,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:20,
					soloArrowLeftVOffset:0,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:20,
					soloArrowRightVOffset:0,

					touchenabled:"on",						// Enable Swipe Function : on/off



					stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
					stopAfterLoops:0,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic



					fullWidth:"on",

					shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

				});




	});
	</script>



</body>
</html>
