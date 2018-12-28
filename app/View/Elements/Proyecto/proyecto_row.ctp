<table
		class="table table-striped table-bordered table-hover dataTables-example" id="dtable_proyectos">
		<thead>
			<tr>
				<th></th>
				<th><?php echo 'Título'; ?></th>
				<th><?php echo 'SubTítulo'; ?></th>
				<th><?php echo 'Miniatura'; ?></th>
				<th>Acci&oacute;n</th>
			</tr>
		</thead>
		<tbody>
			<?php $cont=1?>
			<?php foreach ($list_proyectos as $proyecto){ ?>
			<tr class="proyecto_row_container"
				proyecto_id="<?php echo $proyecto->getAttr('id'); ?>">
				<td><?php echo $cont++?></td>
				<td><?php echo h($proyecto->getAttr('thumb_titulo')); ?></td>
				<td><?php echo h($proyecto->getAttr('thumb_subtitulo')); ?></td>
				<td><img src = <?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$proyecto->getAttr('thumbnail'); ?> width='80'></td>
				<td><a><i class="fa fa-edit text-navy edit-proyecto-trigger"></i> </a>
					<a href="#myModalDeleteProyecto" role="button" data-toggle="modal"
					data-target="#myModalDeleteProyecto"><i
						class="fa fa-trash-o text-navy open-model-delete-proyecto"></i> </a>
				</td>
			</tr>
			<?php }?>
		</tbody>