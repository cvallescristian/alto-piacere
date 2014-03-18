
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
                        <li class="border_twocol"><a href="" title=""><img src="<?=base_url('images/promocion/'.$promocion->promocion_id.'.png') ?>" alt="" /></a>
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