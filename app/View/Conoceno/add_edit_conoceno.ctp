<div class="container div-crear-conoceno form" id="div-crear-conoceno">

	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-lg-11">
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
						<?php echo $this->Form->create('Conoceno',array('action'=>'add_edit_conoceno','method'=>'post', 'id'=>'add_edit_conoceno', 'type' => 'file', 'accept-charset' => 'utf-8', 'class' => 'form-horizontal'));?>

							<div class="form-group">
								<label class="col-sm-2 control-label">Banner</label>
								<div class="col-sm-6">
									<div class='fileupload fileupload-new' data-provides='fileupload'>
										<div class='uneditable-input span2'><i class='icon-file fileupload-exists'></i>
											<span class="btn btn-default btn-file" style="width:106px;height: 37px;margin-bottom: 4px;">
												<input type="file" name="data[Conoceno][banner]" style="opacity:0; position:absolute;height: 35px;left: 0px;top: 29px;" id="Conocenobanner2">
												<span class="fileinput-new">Select image</span>
											</span>
										</div>
										<div class='fileupload-preview thumbnail' style='width:40%;height:40%;'>
										<?php if(isset($obj_conoceno) && $obj_conoceno->getAttr('banner')!=''){?>
											<img src="<?php echo ENV_WEBROOT_FULL_URL.'files/conocenos_banner1/'.$obj_conoceno->getAttr('banner'); ?>">
										<?php }else{?>
											<img src="">
										<?php }?>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo 'Introducción'; ?></label>
									<div id="div-intro">
										<?php echo $this->Form->input('introduccion', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'text-intro')); //TEXT AREA?>
									</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo 'Visión'; ?></label>
									<div id="div-vision">
										<?php echo $this->Form->input('vision', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'text-vision')); //TEXT AREA?>
									</div>
							</div>


							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo 'Misión'; ?></label>
									<div id="div-mision">
										<?php echo $this->Form->input('mision', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'text-mision')); //TEXT AREA?>
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo 'Titulo Banner 2'; ?></label>
								<div class="col-sm-6">
									<input name="data[Conoceno][banner2_titulo]" class="txtConoceno form-control" id="txtConoceno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="100" type="text" value="<?php echo (isset($obj_conoceno))?h($obj_conoceno->getAttr('banner2_titulo')):''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Banner2</label>
								<div class="col-sm-6">
									<div class='fileupload fileupload-new' data-provides='fileupload'>
										<div class='uneditable-input span2'><i class='icon-file fileupload-exists'></i>
											<span class="btn btn-default btn-file" style="width:106px;height: 37px;margin-bottom: 4px;">
												<input type="file" name="data[Conoceno][banner2]" style="opacity:0; position:absolute;height: 35px;left: 0px;top: 29px;" id="Conocenobanner2">
												<span class="fileinput-new">Select image</span>
											</span>
										</div>
										<div class='fileupload-preview thumbnail' style='width:40%;height:40%;'>
										<?php if(isset($obj_conoceno) && $obj_conoceno->getAttr('banner2')!=''){?>
											<img src="<?php echo ENV_WEBROOT_FULL_URL.'files/conocenos_banner2/'.$obj_conoceno->getAttr('banner2'); ?>">
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
									<button type="button" class="btn btn-primary btn-crear-conoceno-trigger" style="margin-right:17px;"><?php echo __('Guardar'); ?></button>
									<button type="button" class="btn btn-white btn-cancelar-crear-conoceno"><?php echo __('Cancelar');?></button>
								</div>
							</div>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script>
	 $(document).ready(function(){

            $('.summernote').summernote(
            	{
            		toolbar: [

            			['style', ['style','bold', 'italic', 'underline', 'clear']],
            			//['font', ['strikethrough', 'superscript', 'subscript']]
            			['fontsize', ['fontsize']],
            			['para', ['ul', 'ol', 'paragraph']],
            			['height', ['height']]
					    
            		]
            	}
            );

       });
</script>