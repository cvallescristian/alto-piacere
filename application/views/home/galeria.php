
<!-- Content
======================================= -->

<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1>Galeria de imagenes</h1></div>
  </div>
</div><!-- end page title -->    

<div class="container">

    <div class="content_fullwidth">     	

    <div class="one_fill">
    <!--  <h2>Pizzas</h2> -->
        <ul class="gallery clearfix">
            <li>
                <ul class="gallery clearfix">
                <?php foreach ($lista_galeria as $galeria) { ?>
                  <li class="border_threecol"><a href="" title="prettyPhoto"><img src="<?= base_url('images/galeria/'.$galeria->galeria_id.'.png')?>" alt="" /></a>
                  </li>
                    
                 <?php } ?>
                </ul>
            </li>
        </ul>  
      </div><!-- end section -->
          

 
    </div>

</div><!-- end contant area -->
 