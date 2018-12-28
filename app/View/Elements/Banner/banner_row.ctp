<table class="table table-striped table-bordered table-hover dataTables-example" id="dtable_banners">
		<thead>
			<tr>
				<th></th>
				<th><?php echo 'Título'; ?></th>
				<th><?php echo 'SubTítulo'; ?></th>
				<th><?php echo 'Imagen'; ?></th>
				<th>Acci&oacute;n</th>
			</tr>
		</thead>
		<tbody>
			<?php $cont=1?>
			<?php foreach ($list_banners as $banner){ ?>
			<tr class="banner_row_container"
				banner_id="<?php echo $banner->getAttr('id'); ?>">
				<td><?php echo $cont++?></td>
				<td><?php echo h($banner->getAttr('titulo')); ?></td>
				<td><?php echo h($banner->getAttr('subtitulo')); ?></td>
				<td><img src = <?php echo ENV_WEBROOT_FULL_URL.'files/banner/'.$banner->getAttr('imagen'); ?> width='80'></td>
				<td><a><i class="fa fa-edit text-navy edit-banner-trigger"></i> </a>
					<a href="#myModalDeleteBanner" role="button" data-toggle="modal"
					data-target="#myModalDeleteBanner"><i
						class="fa fa-trash-o text-navy open-model-delete-banner"></i> </a>
				</td>
			</tr>
			<?php }?>
		</tbody>
	</table>