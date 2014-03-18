

<!-- Content
======================================= -->

<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1>Menu de Alto Piacere</h1></div>
	</div>
    
</div><!-- end page title -->   

<div class="clearfix"></div>

<div class="container">

<!-- left sidebar starts -->
<div class="left_sidebar">

	<div class="sidebar_widget">
    	<h3>Categoria</h3>
		<ul class="arrows_list1">
          
            <?php foreach ($lista_categoria as $categoria) { ?>
              <?php if ($this->input->get('cat') == $categoria->categoria_id) { ?>
                 <li class="active"><a href="<?= base_url('menu?cat='.$categoria->categoria_id)?>"><?= $categoria->nombre_categoria?></a></li>
               <?php  }else{ ?>
                 <li class=""><a href="<?= base_url('menu?cat='.$categoria->categoria_id)?>"><?= $categoria->nombre_categoria?></a></li>
               <?php } ?>
            <?php } ?>
		</ul>
	</div><!-- end section -->
    
    <div class="clearfix mar_top3"></div>
    

	
</div><!-- end left sidebar -->


<div class="content_right">
    <div class="table-style">
                <table class="table-list">
                    <tbody>
                    <tr>
                        <th>Nombre</th>
                        <th>Ingredientes</th>
                        <th>Mediana</th>
                        <?php if ($this->input->get('cat')==2 || $this->input->get('cat')==0) { ?>
                         <th>Familiar</th>
                       <?php } ?>
                        
                    </tr>
                    <?php foreach ($lista_producto as $producto) { ?>
                    <tr>
                        <?php if ($this->input->get('cat')==$producto->categoria_id) { ?>
                            <td class="green"><?= $producto->nombre_producto?></td>
                            <td><?= $producto->ingredientes ?></td>
                            <td>$<?= $producto->precio_producto_mediana?></td>
                            <?php if ($this->input->get('cat')==2 || $this->input->get('cat')==0) { ?>
                                <td>$<?= $producto->precio_producto_familiar?></td>
                            <?php } ?>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                 
                     
                    
                </tbody></table>
            </div>
  

</div><!-- end content left side area -->



</div><!-- end contant area -->