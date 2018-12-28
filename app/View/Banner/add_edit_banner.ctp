<div class="container div-crear-banner form" id="div-crear-banner">

	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<div class="ibox-tools">
							<a class="collapse-link"> <i class="fa fa-chevron-up"></i>
							</a> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i
								class="fa fa-wrench"></i>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li><a href="#">Config option 1</a>
								</li>
								<li><a href="#">Config option 2</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="ibox-content">
						<?php echo $this->Form->create('Banner',array('action'=>'add_edit_banner','method'=>'post', 'id'=>'add_edit_banner', 'type' => 'file', 'accept-charset' => 'utf-8', 'class' => 'form-horizontal'));?>
							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo 'Título'; ?></label>
								<div class="col-sm-6">
									<input name="data[Banner][titulo]" class="txtBanner form-control" id="txtBanner" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="100" type="text" value="<?php echo (isset($obj_banner))?h($obj_banner->getAttr('titulo')):''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo 'subtítulo'; ?></label>
								<div class="col-sm-6">
									<input name="data[Banner][subtitulo]" class="txtBanner form-control" id="txtBanner" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="100" type="text" value="<?php echo (isset($obj_banner))?h($obj_banner->getAttr('subtitulo')):''; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Imagen</label>
								<div class="col-sm-6">
									<div class='fileupload fileupload-new' data-provides='fileupload'>
										<div class='uneditable-input span2'><i class='icon-file fileupload-exists'></i>
											<span class="btn btn-default btn-file" style="width:106px;height: 37px;margin-bottom: 4px;">
												<input type="file" name="data[Banner][imagen]" style="height: 35px;left: 0px;" id="BannerImagen">
												<span class="fileinput-new">Select image</span>
											</span>
										</div>
										<div class='fileupload-preview thumbnail' style='width:40%;height:40%;'>
										<?php if(isset($obj_banner) && $obj_banner->getAttr('imagen')!=''){?>
											<img src="<?php echo ENV_WEBROOT_FULL_URL.'files/banner/'.$obj_banner->getAttr('imagen'); ?>">
										<?php }else{?>
											<img src="">
										<?php }?>
										</div>
									</div>
								</div>
							</div>
						
							<div class="hr-line-dashed"></div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-2">
									<button type="button" class="btn btn-primary btn-crear-banner-trigger" style="margin-right:17px;"><?php echo __('Guardar'); ?></button>
									<button type="button" class="btn btn-white btn-cancelar-crear-banner"><?php echo __('Cancelar');?></button>
								</div>
							</div>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>