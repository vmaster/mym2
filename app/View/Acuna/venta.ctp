<section class="b7 wancho" style="background-image: url('theme/uploads/proyecto-amauta/amauta-1.jpg')">
   <div class="wancho-full">
	  <ul class="b7-element">
	  	<?php foreach ($obj_proyectos as $proyecto) { ?>
		 <li class="b7-item active" data-background="theme/uploads/proyecto-amauta/amauta-1.jpg">
			<a href="<?php echo ENV_WEBROOT_FULL_URL.'proyectos/view/'.$proyecto->getAttr('id'); ?>">
			   <!--<div class="b7-state"><span>Próxima Entrega</span></div>-->
			   <div class="b7-text">
				  <p class="b7-dor"><?php echo h($proyecto->getAttr('thumb_titulo'));?></p>
				  <p class="b7-dir"><?php echo h($proyecto->getAttr('thumb_subtitulo'));?></p>
			   </div>
			</a>
		 </li>
		 <?php } ?>
		 
	  </ul>
   </div>
</section>