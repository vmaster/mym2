<div class="container div-crear-proyecto form" id="div-crear-proyecto">

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
						<?php echo $this->Form->create('Proyecto',array('action'=>'add_edit_proyecto','method'=>'post', 'id'=>'add_edit_proyecto', 'type' => 'file', 'accept-charset' => 'utf-8', 'class' => 'form-horizontal'));?>

							<fieldset>
    							<legend>Banner del Proyecto:</legend>
    							<div class="form-group">
										<label class="col-sm-2 control-label">Banner</label>
										<div class="col-sm-6">
											<div class='fileupload fileupload-new' data-provides='fileupload'>
												<div class='uneditable-input span2'><i class='icon-file fileupload-exists'></i>
													<span class="btn btn-default btn-file" style="width:106px;height: 37px;margin-bottom: 4px;">
														<input type="file" name="data[Proyecto][proy_banner]" style="height: 35px;left: 0px;" id="ProyectoImagen">
														<span class="fileinput-new">Select image</span>
													</span>
												</div>
												<div class='fileupload-preview thumbnail' style='width:40%;height:40%;'>
												<?php if(isset($obj_proyecto) && $obj_proyecto->getAttr('proy_banner')!=''){?>
													<img src="<?php echo ENV_WEBROOT_FULL_URL.'files/proy-banner/'.$obj_proyecto->getAttr('proy_banner'); ?>">
												<?php }else{?>
													<img src="">
												<?php }?>
												</div>
											</div>
										</div>
								</div>
    						</fieldset>

							 <fieldset>
    							<legend>Thumbnail Portada:</legend>

									<div class="form-group">
										<label class="col-sm-2 control-label"><?php echo 'Título'; ?></label>
										<div class="col-sm-6">
											<input name="data[Proyecto][thumb_titulo]" class="txtProyecto form-control" id="txtProyecto" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('thumb_titulo')):''; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label"><?php echo 'subtítulo'; ?></label>
										<div class="col-sm-6">
											<input name="data[Proyecto][thumb_subtitulo]" class="txtProyecto form-control" id="txtProyecto" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('thumb_subtitulo')):''; ?>">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Imagen</label>
										<div class="col-sm-6">
											<div class='fileupload fileupload-new' data-provides='fileupload'>
												<div class='uneditable-input span2'><i class='icon-file fileupload-exists'></i>
													<span class="btn btn-default btn-file" style="width:106px;height: 37px;margin-bottom: 4px;">
														<input type="file" name="data[Proyecto][thumbnail]" style="height: 35px;left: 0px;" id="ProyectoImagen">
														<span class="fileinput-new">Select image</span>
													</span>
												</div>
												<div class='fileupload-preview thumbnail' style='width:40%;height:40%;'>
												<?php if(isset($obj_proyecto) && $obj_proyecto->getAttr('thumbnail')!=''){?>
													<img src="<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail'); ?>">
												<?php }else{?>
													<img src="">
												<?php }?>
												</div>
											</div>
										</div>
									</div>
							</fieldset>
							<fieldset>
    							<legend>SECCIÓN 1</legend>
									<div class="form-group">
										<label class="col-sm-2 control-label"><?php echo 'Título Sección 1'; ?></label>
										<div class="col-sm-6">
											<input name="data[Proyecto][sect1_titulo]" class="txtProyecto form-control" id="txtProyecto" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('sect1_titulo')):''; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label"><?php echo 'Subtítulo Sección 1'; ?></label>
										<div class="col-sm-6">
											<input name="data[Proyecto][sect1_subtitulo]" class="txtProyecto form-control" id="txtProyecto" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('sect1_subtitulo')):''; ?>">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-2 control-label">Imagen Section 1</label>
										<div class="col-sm-6">
											<div class='fileupload fileupload-new' data-provides='fileupload'>
												<div class='uneditable-input span2'><i class='icon-file fileupload-exists'></i>
													<span class="btn btn-default btn-file" style="width:106px;height: 37px;margin-bottom: 4px;">
														<input type="file" name="data[Proyecto][sect1_img]" style="height: 35px;left: 0px;" id="ProyectoImagen2">
														<span class="fileinput-new">Select image</span>
													</span>
												</div>
												<div class='fileupload-preview thumbnail' style='width:40%;height:40%;'>
												<?php if(isset($obj_proyecto) && $obj_proyecto->getAttr('sect1_img')!=''){?>
													<img src="<?php echo ENV_WEBROOT_FULL_URL.'files/proy-sect1-img/'.$obj_proyecto->getAttr('sect1_img'); ?>">
												<?php }else{?>
													<img src="">
												<?php }?>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div id="div-sect1-texto">
											<!--<textArea name="data[Proyecto][sect1_texto]" class="summernote" />-->
											<?php echo $this->Form->input('sect1_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'sect1-texto')); //TEXT AREA?>
										</div>
									</div>
							</fieldset>

							<fieldset>
    							<legend></legend>

    							<div class="form-group">
										<label class="col-sm-2 control-label"><?php echo 'Área'; ?></label>
										<div class="col-sm-6">
											<input name="data[Proyecto][area]" class="txt-area form-control" id="txtArea" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('area')):''; ?>">
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-2 control-label"><?php echo 'Tipo de vivienda'; ?></label>
										<div class="col-sm-6">
											<select name = "data[Proyecto][tipo_vivienda_id]" class='form-control'>
										        <?php 
											        if (isset($list_all_tipo_viviendas)){
											            	foreach ($list_all_tipo_viviendas as $k => $v) {
																if(isset($obj_proyecto) || isset($proyecto_id)){
																	if($v['TipoVivienda']['id'] == $obj_proyecto->getAttr('tipo_vivienda_id')){
																		$selected = " selected = 'selected'";
																	}else{
																		$selected = "";
																	}
																}else{
																	$selected = "";
																}
											            		echo "<option value = ".$v['TipoVivienda']['id'].$selected.">".$v['TipoVivienda']['descripcion']."</option>";
											            	}
											        }
										        ?>
								        	</select>
										</div>
								</div>
								<div class="form-group">
										<label class="col-sm-2 control-label"><?php echo 'Banco'; ?></label>
										<div class="col-sm-6">
											<select name = "data[Proyecto][bco_id]" class='form-control'>
										        <?php 
											        if (isset($list_all_tipo_bancos)){
											            	foreach ($list_all_tipo_bancos as $k => $v) {
																if(isset($obj_proyecto) || isset($proyecto_id)){
																	if($v['Banco']['id'] == $obj_proyecto->getAttr('bco_id')){
																		$selected = " selected = 'selected'";
																	}else{
																		$selected = "";
																	}
																}else{
																	$selected = "";
																}
											            		echo "<option value = ".$v['Banco']['id'].$selected.">".$v['Banco']['nombre']."</option>";
											            	}
											        }
										        ?>
								        	</select>
										</div>
								</div>
    						</fieldset>

    						<fieldset>
    							<legend><input type="checkbox" value="" <?php echo (isset($obj_proyecto) && $obj_proyecto->getAttr('ubicacion_titulo') != '')? 'checked':''; ?> class="chk-ubi"> <label class="chk-ubi1"> Ubicaci&oacute;n </label></legend>
    							<div class="div-chk-ubi" hidden>
	    							<div class="form-group">
	    									<label class="col-sm-2 control-label"><?php echo 'T&iacute;tulo'; ?></label>
											<div class="col-sm-6">
												<input name="data[Proyecto][ubicacion_titulo]" class="txt-area form-control" id="txtUbiTitulo" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('ubicacion_titulo')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<div id="div-cat-ubi">
												<!--<textArea name="data[Proyecto][sect1_texto]" class="summernote" />-->
												<?php echo $this->Form->input('ubicacion_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'cat-ubi')); //TEXT AREA?>
											</div>
									</div>
								</div>
							</fieldset>

							<fieldset>
    							<legend><input type="checkbox" value="" <?php echo (isset($obj_proyecto) && $obj_proyecto->getAttr('area_com_titulo') != '')? 'checked':''; ?> class="chk-area-comun"> <label class="chk-area-comun1">&Aacute;rea Com&uacute;n</label></legend>

    							<div class="div-chk-area-comun" hidden>
	    							<div class="form-group">
	    									<label class="col-sm-2 control-label"><?php echo 'T&iacute;tulo'; ?></label>
											<div class="col-sm-6">
												<input name="data[Proyecto][area_com_titulo]" class="txt-area-com form-control" id="txtAcomTitulo" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?utf8_decode($obj_proyecto->getAttr('area_com_titulo')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<div id="div-cat-area-comun">
												<!--<textArea name="data[Proyecto][sect1_texto]" class="summernote" />-->
												<?php echo $this->Form->input('area_com_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'cat-area-comun')); //TEXT AREA?>
											</div>
									</div>
								</div>
							</fieldset>

							<fieldset>
    							<legend><input type="checkbox" value="" <?php echo (isset($obj_proyecto) && $obj_proyecto->getAttr('depart_titulo') != '')? 'checked':''; ?> class="chk-departamento"> <label class="chk-departamento1">Departamentos</label></legend>
    							<div class="div-chk-departamento" hidden>
	    							<div class="form-group">
	    									<label class="col-sm-2 control-label"><?php echo 'T&iacute;tulo'; ?></label>
											<div class="col-sm-6">
												<input name="data[Proyecto][depart_titulo]" class="txt-departamento form-control" id="txtDepaTitulo" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('depart_titulo')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<div id="div-cat-departamento">
												<!--<textArea name="data[Proyecto][sect1_texto]" class="summernote" />-->
												<?php echo $this->Form->input('depart_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'cat-depart')); //TEXT AREA?>
											</div>
									</div>
								</div>
							</fieldset>
							
							<fieldset>
    							<legend><input type="checkbox" value="" <?php echo (isset($obj_proyecto) && $obj_proyecto->getAttr('area_verd_titulo') != '')? 'checked':''; ?> class="chk-area-verd"> <label class="chk-area-verd1">&Aacute;reas Verdes</label></legend>

    							<div class="div-chk-area-verd" hidden>
	    							<div class="form-group">
	    									<label class="col-sm-2 control-label"><?php echo 'T&iacute;tulo'; ?></label>
											<div class="col-sm-6">
												<input name="data[Proyecto][area_verd_titulo]" class="txt-verd-tit form-control" id="txtVerdeTitulo" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('area_verd_titulo')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<div id="div-cat-area-verd">
												<!--<textArea name="data[Proyecto][sect1_texto]" class="summernote" />-->
												<?php echo $this->Form->input('area_verd_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'cat-area-verd')); //TEXT AREA?>
											</div>
									</div>
								</div>
							</fieldset>
							
							<fieldset>
    							<legend><input type="checkbox" value="" <?php echo (isset($obj_proyecto) && $obj_proyecto->getAttr('tech_prop_titulo') != '')? 'checked':''; ?> class="chk-tech-prop"> <label class="chk-tech-prop1">Techo propio</label></legend>
    							<div class="div-chk-tech-prop" hidden>
	    							<div class="form-group">
	    									<label class="col-sm-2 control-label"><?php echo 'T&iacute;tulo'; ?></label>
											<div class="col-sm-6">
												<input name="data[Proyecto][tech_prop_titulo]" class="txt-tech-prop form-control" id="txtTechTitulo" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('tech_prop_titulo')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<div id="div-cat-tech-prop">
												<?php echo $this->Form->input('tech_prop_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'cat-tech-prop')); //TEXT AREA?>
											</div>
									</div>
								</div>
							</fieldset>	

							<fieldset>
    							<legend><input type="checkbox" value="" <?php echo (isset($obj_proyecto) && $obj_proyecto->getAttr('proy_titulo') != '')? 'checked':''; ?> class="chk-proy"> <label class="chk-proy1">Proyecto</label></legend>

    							<div class="div-chk-proy" hidden>
	    							<div class="form-group">
	    									<label class="col-sm-2 control-label"><?php echo 'T&iacute;tulo'; ?></label>
											<div class="col-sm-6">
												<input name="data[Proyecto][proy_titulo]" class="txt-proyecto form-control" id="txtProyecto" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('proy_titulo')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<div id="div-cat-proy">
												<?php echo $this->Form->input('proy_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'cat-proy')); //TEXT AREA?>
											</div>
									</div>
								</div>
							</fieldset>

							<fieldset>
    							<legend><input type="checkbox" value="" <?php echo (isset($obj_proyecto) && $obj_proyecto->getAttr('casas_titulo') != '')? 'checked':''; ?> class="chk-casas"> <label class="chk-casas1">Casas</label></legend>

    							<div class="div-chk-casas" hidden>
	    							<div class="form-group">
	    									<label class="col-sm-2 control-label"><?php echo 'T&iacute;tulo'; ?></label>
											<div class="col-sm-6">
												<input name="data[Proyecto][casas_titulo]" class="txt-proyecto form-control" id="txtCasas" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('casas_titulo')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<div id="div-cat-casas">
												<?php echo $this->Form->input('casas_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'cat-casas')); //TEXT AREA?>
											</div>
									</div>
								</div>
							</fieldset>	

							<fieldset>
    							<legend><input type="checkbox" value="" <?php echo (isset($obj_proyecto) && $obj_proyecto->getAttr('promo_titulo') != '')? 'checked':''; ?> class="chk-promo"> <label class="chk-promo1">Promociones</label></legend>

    							<div class="div-chk-promo" hidden>
	    							<div class="form-group">
	    									<label class="col-sm-2 control-label"><?php echo 'T&iacute;tulo'; ?></label>
											<div class="col-sm-6">
												<input name="data[Proyecto][promo_titulo]" class="txt-promo form-control" id="txtPromo" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('promo_titulo')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<div id="div-cat-promo">
												<?php echo $this->Form->input('promo_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'cat-promo')); //TEXT AREA?>
											</div>
									</div>
								</div>
							</fieldset>

							<fieldset>
    							<legend><input type="checkbox" value="" <?php echo (isset($obj_proyecto) && $obj_proyecto->getAttr('facilidad_titulo') != '')? 'checked':''; ?> class="chk-facilidad"> <label class="chk-facilidad1">M&aacute;s facilidades</label></legend>

    							<div class="div-chk-facilidad" hidden>
	    							<div class="form-group">
	    									<label class="col-sm-2 control-label"><?php echo 'T&iacute;tulo'; ?></label>
											<div class="col-sm-6">
												<input name="data[Proyecto][facilidad_titulo]" class="txt-facil form-control" id="txtFacil" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('facilidad_titulo')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<div id="div-cat-facilidad">
												<?php echo $this->Form->input('facilidad_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'cat-facilidad')); //TEXT AREA?>
											</div>
									</div>
								</div>
							</fieldset>

							<fieldset>
    							<legend><input type="checkbox" value="" <?php echo (isset($obj_proyecto) && $obj_proyecto->getAttr('ventaja_titulo') != '')? 'checked':''; ?> class="chk-ventaja"> <label class="chk-ventaja1">Ventajas</label></legend>

    							<div class="div-chk-ventaja" hidden>
	    							<div class="form-group">
	    									<label class="col-sm-2 control-label"><?php echo 'T&iacute;tulo'; ?></label>
											<div class="col-sm-6">
												<input name="data[Proyecto][ventaja_titulo]" class="txt-ventaja form-control" id="txtVentaja" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('ventaja_titulo')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<div id="div-cat-ventaja">
												<?php echo $this->Form->input('ventaja_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'cat-ventaja')); //TEXT AREA?>
											</div>
									</div>
								</div>
							</fieldset>


							<fieldset>
    							<legend>IM&Aacute;GENES DE CROQUIS:</legend>
    							<div class="form-group">
										<label class="col-sm-2 control-label">Imagen 1</label>
										<div class="col-sm-6">
											<div class='fileupload fileupload-new' data-provides='fileupload'>
												<div class='uneditable-input span2'><i class='icon-file fileupload-exists'></i>
													<span class="btn btn-default btn-file" style="width:106px;height: 37px;margin-bottom: 4px;">
														<input type="file" name="data[Proyecto][img_croquis1]" style="height: 35px;left: 0px;" id="ImagenCroquis1">
														<span class="fileinput-new">Select image</span>
													</span>
												</div>
												<div class='fileupload-preview thumbnail' style='width:40%;height:40%;'>
												<?php if(isset($obj_proyecto) && $obj_proyecto->getAttr('img_croquis1')!=''){?>
													<img src="<?php echo ENV_WEBROOT_FULL_URL.'files/croquis/'.$obj_proyecto->getAttr('img_croquis1'); ?>">
												<?php }else{?>
													<img src="">
												<?php }?>
												</div>
											</div>
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-2 control-label">Imagen 2</label>
										<div class="col-sm-6">
											<div class='fileupload fileupload-new' data-provides='fileupload'>
												<div class='uneditable-input span2'><i class='icon-file fileupload-exists'></i>
													<span class="btn btn-default btn-file" style="width:106px;height: 37px;margin-bottom: 4px;">
														<input type="file" name="data[Proyecto][img_croquis2]" style="height: 35px;left: 0px;" id="ImagenCroquis2">
														<span class="fileinput-new">Select image</span>
													</span>
												</div>
												<div class='fileupload-preview thumbnail' style='width:40%;height:40%;'>
												<?php if(isset($obj_proyecto) && $obj_proyecto->getAttr('img_croquis2')!=''){?>
													<img src="<?php echo ENV_WEBROOT_FULL_URL.'files/croquis/'.$obj_proyecto->getAttr('img_croquis2'); ?>">
												<?php }else{?>
													<img src="">
												<?php }?>
												</div>
											</div>
										</div>
								</div>
    						</fieldset>

    						<fieldset>
    							<legend>MAPA</legend>
	    							<div class="form-group">
	    									<label class="col-sm-2 control-label"><?php echo 'T&iacute;tulo'; ?></label>
											<div class="col-sm-6">
												<input name="data[Proyecto][mapa_titulo]" class="txt-area form-control" id="txtUbiTitulo" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('mapa_titulo')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<label class="col-sm-2 control-label">Ubicaci&oacute;n</label>
											<div class="col-sm-6">
												<input name="data[Proyecto][ubicacion]" class="txt-area form-control" id="txtUbicacion" maxlength="100" type="text" value="<?php echo (isset($obj_proyecto))?h($obj_proyecto->getAttr('ubicacion')):''; ?>">
											</div>
									</div>
									<div class="form-group">
											<div id="div-mapa">
												<?php echo $this->Form->input('mapa_texto', array('div' => false, 'label' => false,'type'=>'textarea','rows'=>'5','cols'=>'80', 'class'=> 'summernote form-control','id' =>'txt-mapa')); //TEXT AREA?>
											</div>
									</div>
							</fieldset>

							<div class="hr-line-dashed"></div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-2">
									<button type="button" class="btn btn-primary btn-crear-proyecto-trigger" style="margin-right:17px;"><?php echo __('Guardar'); ?></button>
									<button type="button" class="btn btn-white btn-cancelar-crear-proyecto"><?php echo __('Cancelar');?></button>
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