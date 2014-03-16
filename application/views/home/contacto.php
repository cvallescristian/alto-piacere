
<!-- Content
======================================= -->

<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1>Contactanos</h1></div>
        <div class="reght_pagenation"><a href="index.php">Home</a> <i>/</i> <a href="#">Contacto</a> <i>/</i></div>
	</div>
</div><!-- end page title -->    

<div class="container">

	<div class="content_fullwidth">
    
    	<div id="content_area">
        
        	<div class="one_full">
            
            <h3>Mapa</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26786.710035206776!2d-71.5431339726728!3d-32.94206461271274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1391998612304" width="930" height="450" frameborder="0" style="border:0"></iframe>
            </div><!-- end google map -->
            
            <div class="clearfix mar_top2"></div>
            
            <div class="one_full">
            <h2>Informacion</h2>
            <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
            
            <p>Please be patient while waiting for response. (24/7 Support!)<br /><br />
            <strong>Phone General Inquiries: 1-888-123-4567-8900</strong></p>
            
            </div>
            
		<div class="mar_top3"></div>

            <div class="one_half">
            
            <div class="address-info">
                    <h2>Informacion de contacto</h2>
                        <ul>
                        <li>
                        <strong>Company Name</strong><br />
                        2901 Marmora Road, Glassgow, Seattle, WA 98122-1090<br />
                        Telephone: +1 1234-567-89000<br />
                        FAX: +1 0123-4567-8900<br />
                        E-mail: <a href="mailto:mail@companyname.com">mail@companyname.com</a><br />
                        Website: <a href="index.php">www.yoursitename.com</a>
                        </li>
                        
                        <li>
                        <br /><strong>Office Two</strong><br />
                        2901 Marmora Road, Glassgow, Seattle, WA 98122-1090<br />
                        Telephone: +1 1234-567-89000<br />
                        FAX: +1 0123-4567-8900<br />
                        E-mail: <a href="mailto:mail@companyname.com">mail@companyname.com</a><br />
                        Website: <a href="index.php">www.yoursitename.com</a>
                        </li>
                        
                        <li>
                        <br />
                        <strong>Business Hours</strong>
                        <p>Monday - Friday 10am to 8pm</p>
                        <p>Saturday - 10am to 2pm</p>
                        <p>Sunday (national holidays) - Closed</p>
                        <div class="clearfix mar_top5"></div>
                        </li>
                    </ul>
                </div>
            </div>
              
            
            <div class="one_half last">	            
            
            <h2>Formulario de contacto</h2>
		
					<form action="" method="post">
					
						<fieldset>
						
						<?php if (!isset($errorC) || $errorC == true){ ?>
						
						<label for="name" class="blocklabel">Your Name*</label>
						<p class="<?php if (isset($the_nameclass)) echo $the_nameclass; ?>" ><input name="yourname" class="input_bg" type="text" id="name" value='<?php if (isset($the_name)) echo $the_name?>'/></p>
						
						
						<label for="email" class="blocklabel">E-Mail*</label>
						<p class="<?php if (isset($the_emailclass)) echo $the_emailclass; ?>" ><input name="email" class="input_bg" type="text" id="email" value='<?php if (isset($the_email)) echo $the_email ?>' /></p>
						
						
						<label for="website" class="blocklabel">Website</label>
						<p><input name="website" class="input_bg" type="text" id="website" value="<?php if (isset($the_website))  echo $the_website?>"/></p>
						
						
						<label for="message" class="blocklabel">Your Message*</label>
						<p class="<?php if (isset($the_messageclass)) echo $the_messageclass; ?>"><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7" ><?php  if (isset($the_message)) echo $the_message ?></textarea></p>
						
						
						<p>
						<input type="hidden" id="myemail" name="myemail" value="<?php echo $email_adress_reciever; ?>" />
						<input type="hidden" id="myblogname" name="myblogname" value="<?php echo $name_of_your_site; ?>" />
						<div class="clearfix"></div>
						<input name="Send" type="submit" value="SUBMIT" class="button medium align" id="send"/></p>
						<?php } else { ?> 
						
                        <div class="success">
                            <div class="message-box-wrap">
                               Your message has been <strong>Received Successfully!</strong> Thank you!</div>
                        </div>
						
						<?php } ?>
						
						</fieldset>
						
						</form> 
			</div>              
        
    </div>
    
    </div>

</div><!-- end contant area -->
 