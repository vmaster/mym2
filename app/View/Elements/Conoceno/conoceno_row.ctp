<table
		class="table table-striped table-bordered table-hover dataTables-example" id="dtable_conocenos">
		<thead>
			<tr>
				<th></th>
				<th><?php echo 'Título'; ?></th>
				<th><?php echo 'Banner'; ?></th>
				<th>Acci&oacute;n</th>
			</tr>
		</thead>
		<tbody>
			<?php $cont=1?>
			<?php foreach ($list_conocenos as $conoceno){ ?>
			<tr class="conoceno_row_container"
				conoceno_id="<?php echo $conoceno->getAttr('id'); ?>">
				<td><?php echo $cont++?></td>
				<td><?php echo h($conoceno->getAttr('banner2_titulo')); ?></td>
				<td><img src = <?php echo ENV_WEBROOT_FULL_URL.'files/conocenos_banner1/'.$conoceno->getAttr('banner'); ?> width='80'></td>
				<td><a><i class="fa fa-edit text-navy edit-conoceno-trigger"></i> </a>
					<a href="#myModalDeleteConoceno" role="button" data-toggle="modal"
					data-target="#myModalDeleteConoceno"><i
						class="fa fa-trash-o text-navy open-model-delete-conoceno"></i> </a>
				</td>
			</tr>
			<?php }?>
		</tbody>
</table>