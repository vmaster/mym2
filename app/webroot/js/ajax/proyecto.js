$(document).ready(function(){
	
	Proyecto = this;
	$body = $('body');
	
	proyecto = {
		openAddEditProyecto: function(proyecto_id){
			if(proyecto_id == undefined || !proyecto_id) {
				proyecto_id ='';
			}
			
			$('div#proyecto #add_edit_proyecto_container').unbind();
			$('div#proyecto #add_edit_proyecto_container').load(env_webroot_script + 'proyectos/add_edit_proyecto/'+proyecto_id,function(){
				
			});
		},
		
		deleteProyecto: function(proyecto_id){
			$.ajax({
				type: 'post',
				url: env_webroot_script + 'proyectos/delete_proyecto',
				data:{
					'proyecto_id': proyecto_id
				},
				dataType: 'json'
			}).done(function(data){
				if(data.success == true){
					$('.proyecto_row_container[proyecto_id='+proyecto_id+']').fadeOut(function(){$(this).remove()});
					$('#conteiner_all_rows').load(env_webroot_script + escape('proyectos/find_proyectos/1/'+null+'/'+null+'/'+''+'/'+''),function(){
						$('#dtable_proyectos').DataTable();
					});
					//toastr.success(data.msg);
				}/*else{
					//toastr.error(value[0]);
				}*/
			});	
		}
	}
	
	/* Mostrar formulario: Crear Proyecto */
	$body.off('click','div#proyecto .btn-nuevo-proyecto');
	$body.on('click', 'div#proyecto .btn-nuevo-proyecto' , function(){
		proyecto_id = $(this).attr('proyecto_id');
		proyecto.openAddEditProyecto(proyecto_id);
	});
	
	/* Ocultar formulario Crear Proyecto*/
	$body.on('click','div#div-crear-proyecto .btn-cancelar-crear-proyecto', function(){
		$('#div-crear-proyecto').fadeOut();
	});

// EVENTOS PARA EDITORES

	///  EDITOR SECCIÓN UNO
	$body.off('keypress','#div-sect1-texto .note-editable');
	$body.on('keypress','#div-sect1-texto .note-editable',function(){
		
		$("textarea#sect1-texto").html($('#div-sect1-texto .note-editable').html());
	});

	$body.off('click','#div-sect1-texto .note-toolbar');
	$body.on('click','#div-sect1-texto .note-toolbar',function(){
		
		$("textarea#sect1-texto").html($('#div-sect1-texto.note-editable').html());
	});

	/// EDITOR CAT. UBICACIÓN
	$body.off('keypress','#div-cat-ubi .note-editable');
	$body.on('keypress','#div-cat-ubi .note-editable',function(){
		
		$("textarea#cat-ubi").html($('#div-cat-ubi .note-editable').html());
	});

	$body.off('click','#div-cat-ubi .note-toolbar');
	$body.on('click','#div-cat-ubi .note-toolbar',function(){
		
		$("textarea#cat-ubi").html($('#div-cat-ubi .note-editable').html());
	});

	/// EDITOR CAT. ÁREA COMÚN
	$body.off('keypress','#div-cat-area-comun .note-editable');
	$body.on('keypress','#div-cat-area-comun .note-editable',function(){
		
		$("textarea#cat-area-comun").html($('#div-cat-area-comun .note-editable').html());
	});

	$body.off('click','#div-cat-area-comun .note-toolbar');
	$body.on('click','#div-cat-area-comun .note-toolbar',function(){
		
		$("textarea#cat-area-comun").html($('#div-cat-area-comun .note-editable').html());
	});

	/// EDITOR CAT. DEPARTAMENTOS
	$body.off('keypress','#div-cat-departamento .note-editable');
	$body.on('keypress','#div-cat-departamento .note-editable',function(){
		
		$("textarea#cat-depart").html($('#div-cat-departamento .note-editable').html());
	});

	$body.off('click','#div-cat-departamento .note-toolbar');
	$body.on('click','#div-cat-departamento .note-toolbar',function(){
		
		$("textarea#cat-depart").html($('#div-cat-departamento .note-editable').html());
	});

	/// EDITOR CAT. ÁREAS VERDES
	$body.off('keypress','#div-cat-area-verd .note-editable');
	$body.on('keypress','#div-cat-area-verd .note-editable',function(){
		
		$("textarea#cat-area-verd").html($('#div-cat-area-verd .note-editable').html());
	});

	$body.off('click','#div-cat-area-verd .note-toolbar');
	$body.on('click','#div-cat-area-verd .note-toolbar',function(){
		
		$("textarea#cat-area-verd").html($('#div-cat-area-verd .note-editable').html());
	});

	/// EDITOR CAT. TECHO PROPIO
	$body.off('keypress','#div-cat-tech-prop .note-editable');
	$body.on('keypress','#div-cat-tech-prop .note-editable',function(){
		
		$("textarea#cat-tech-prop").html($('#div-cat-tech-prop .note-editable').html());
	});

	$body.off('click','#div-cat-tech-prop .note-toolbar');
	$body.on('click','#div-cat-tech-prop .note-toolbar',function(){
		
		$("textarea#cat-tech-prop").html($('#div-cat-tech-prop .note-editable').html());
	});

	/// EDITOR CAT. PROYECTO
	$body.off('keypress','#div-cat-proy .note-editable');
	$body.on('keypress','#div-cat-proy .note-editable',function(){
		
		$("textarea#cat-proy").html($('#div-cat-proy .note-editable').html());
	});

	$body.off('click','#div-cat-proy .note-toolbar');
	$body.on('click','#div-cat-proy .note-toolbar',function(){
		
		$("textarea#cat-proy").html($('#div-cat-proy .note-editable').html());
	});

	/// EDITOR CAT. CASAS
	$body.off('keypress','#div-cat-casas .note-editable');
	$body.on('keypress','#div-cat-casas .note-editable',function(){
		
		$("textarea#cat-casas").html($('#div-cat-casas .note-editable').html());
	});

	$body.off('click','#div-cat-casas .note-toolbar');
	$body.on('click','#div-cat-casas .note-toolbar',function(){
		
		$("textarea#cat-casas").html($('#div-cat-casas .note-editable').html());
	});

	/// EDITOR CAT. PROMOCIONES
	$body.off('keypress','#div-cat-promo .note-editable');
	$body.on('keypress','#div-cat-promo .note-editable',function(){
		
		$("textarea#cat-promo").html($('#div-cat-promo .note-editable').html());
	});

	$body.off('click','#div-cat-promo .note-toolbar');
	$body.on('click','#div-cat-promo .note-toolbar',function(){
		
		$("textarea#cat-promo").html($('#div-cat-promo .note-editable').html());
	});

	/// EDITOR CAT. MAS FACILIDADES
	$body.off('keypress','#div-cat-facilidad .note-editable');
	$body.on('keypress','#div-cat-facilidad .note-editable',function(){
		
		$("textarea#cat-facilidad").html($('#div-cat-facilidad .note-editable').html());
	});

	$body.off('click','#div-cat-facilidad .note-toolbar');
	$body.on('click','#div-cat-facilidad .note-toolbar',function(){
		
		$("textarea#cat-facilidad").html($('#div-cat-facilidad .note-editable').html());
	});

	/// EDITOR CAT. VENTAJAS
	$body.off('keypress','#div-cat-ventaja .note-editable');
	$body.on('keypress','#div-cat-ventaja .note-editable',function(){
		
		$("textarea#cat-ventaja").html($('#div-cat-ventaja .note-editable').html());
	});

	$body.off('click','#div-cat-ventaja .note-toolbar');
	$body.on('click','#div-cat-ventaja .note-toolbar',function(){
		
		$("textarea#cat-ventaja").html($('#div-cat-ventaja .note-editable').html());
	});


	/// EDITOR MAPA
	$body.off('keypress','#div-mapa .note-editable');
	$body.on('keypress','#div-mapa .note-editable',function(){
		
		$("textarea#txt-mapa").html($('#div-mapa .note-editable').html());
	});

	$body.off('click','#div-mapa .note-toolbar');
	$body.on('click','#div-mapa .note-toolbar',function(){
		
		$("textarea#txt-mapa").html($('#div-mapa .note-editable').html());
	});


// FIN EVENTOS PARA EDITORES


//ACTIVAR/ DESACTIVARCHECKBOX DE CATEGORIAS

	$body.off('click','.chk-ubi');
	$body.on('click','.chk-ubi',function(){
		
		if( $('.chk-ubi').is(':checked') ) {
		    $('.div-chk-ubi').show();
		}else{
			$('.div-chk-ubi').hide();
		}
	});

	var ubi = 0;
	$body.off('click','.chk-ubi1');
	$body.on('click','.chk-ubi1',function(){
		
		if( ubi == 0) {
			ubi = 1;
		    $('.div-chk-ubi').show();
		}else{
			ubi = 0;
			$('.div-chk-ubi').hide();
		}
	});


	$body.off('click','.chk-area-comun');
	$body.on('click','.chk-area-comun',function(){
		
		if( $('.chk-area-comun').is(':checked') ) {
		    $('.div-chk-area-comun').show();
		}else{
			$('.div-chk-area-comun').hide();
		}
	});

	var area = 0;
	$body.off('click','.chk-area-comun1');
	$body.on('click','.chk-area-comun1',function(){
		
		if( area == 0) {
			area = 1;
		    $('.div-chk-area-comun').show();
		}else{
			area = 0;
			$('.div-chk-area-comun').hide();
		}
	});



	$body.off('click','.chk-departamento');
	$body.on('click','.chk-departamento',function(){
		
		if( $('.chk-departamento').is(':checked') ) {
		    $('.div-chk-departamento').show();
		}else{
			$('.div-chk-departamento').hide();
		}
	});

	var departamento = 0;
	$body.off('click','.chk-departamento1');
	$body.on('click','.chk-departamento1',function(){
		
		if( departamento == 0) {
			departamento = 1;
		    $('.div-chk-departamento').show();
		}else{
			departamento = 0;
			$('.div-chk-departamento').hide();
		}
	});



	$body.off('click','.chk-area-verd');
	$body.on('click','.chk-area-verd',function(){
		
		if( $('.chk-area-verd').is(':checked') ) {
		    $('.div-chk-area-verd').show();
		}else{
			$('.div-chk-area-verd').hide();
		}
	});

	var areaverd = 0;
	$body.off('click','.chk-area-verd1');
	$body.on('click','.chk-area-verd1',function(){
		
		if( areaverd == 0) {
			areaverd = 1;
		    $('.div-chk-area-verd').show();
		}else{
			areaverd = 0;
			$('.div-chk-area-verd').hide();
		}
	});



	$body.off('click','.chk-tech-prop');
	$body.on('click','.chk-tech-prop',function(){
		
		if( $('.chk-tech-prop').is(':checked') ) {
		    $('.div-chk-tech-prop').show();
		}else{
			$('.div-chk-tech-prop').hide();
		}
	});

	var tech = 0;
	$body.off('click','.chk-tech-prop1');
	$body.on('click','.chk-tech-prop1',function(){
		
		if( tech == 0) {
			tech = 1;
		    $('.div-chk-tech-prop').show();
		}else{
			tech = 0;
			$('.div-chk-tech-prop').hide();
		}
	});



	$body.off('click','.chk-proy');
	$body.on('click','.chk-proy',function(){
		
		if( $('.chk-proy').is(':checked') ) {
		    $('.div-chk-proy').show();
		}else{
			$('.div-chk-proy').hide();
		}
	});

	var proy = 0;
	$body.off('click','.chk-proy1');
	$body.on('click','.chk-proy1',function(){
		
		if( proy == 0) {
			proy = 1;
		    $('.div-chk-proy').show();
		}else{
			proy = 0;
			$('.div-chk-proy').hide();
		}
	});



	$body.off('click','.chk-casas');
	$body.on('click','.chk-casas',function(){
		
		if( $('.chk-casas').is(':checked') ) {
		    $('.div-chk-casas').show();
		}else{
			$('.div-chk-casas').hide();
		}
	});

	var casas = 0;
	$body.off('click','.chk-casas1');
	$body.on('click','.chk-casas1',function(){
		
		if( casas == 0) {
			casas = 1;
		    $('.div-chk-casas').show();
		}else{
			casas = 0;
			$('.div-chk-casas').hide();
		}
	});



	$body.off('click','.chk-promo');
	$body.on('click','.chk-promo',function(){
		
		if( $('.chk-promo').is(':checked') ) {
		    $('.div-chk-promo').show();
		}else{
			$('.div-chk-promo').hide();
		}
	});

	var promo = 0;
	$body.off('click','.chk-promo1');
	$body.on('click','.chk-promo1',function(){
		
		if( promo == 0) {
			promo = 1;
		    $('.div-chk-promo').show();
		}else{
			promo = 0;
			$('.div-chk-promo').hide();
		}
	});



	$body.off('click','.chk-facilidad');
	$body.on('click','.chk-facilidad',function(){
		
		if( $('.chk-facilidad').is(':checked') ) {
		    $('.div-chk-facilidad').show();
		}else{
			$('.div-chk-facilidad').hide();
		}
	});

	var facilidad = 0;
	$body.off('click','.chk-facilidad1');
	$body.on('click','.chk-facilidad1',function(){
		
		if( facilidad == 0) {
			facilidad = 1;
		    $('.div-chk-facilidad').show();
		}else{
			facilidad = 0;
			$('.div-chk-facilidad').hide();
		}
	});



	$body.off('click','.chk-ventaja');
	$body.on('click','.chk-ventaja',function(){
		
		if( $('.chk-ventaja').is(':checked') ) {
		    $('.div-chk-ventaja').show();
		}else{
			$('.div-chk-ventaja').hide();
		}
	});

	var ventaja = 0;
	$body.off('click','.chk-ventaja1');
	$body.on('click','.chk-ventaja1',function(){
		
		if( ventaja == 0) {
			ventaja = 1;
		    $('.div-chk-ventaja').show();
		}else{
			ventaja = 0;
			$('.div-chk-ventaja').hide();
		}
	});

//***----****\\


	
	$body.off('click','.btn-crear-proyecto-trigger');
	$body.on('click','.btn-crear-proyecto-trigger',function(){
		//$form = $(this).parents('form').eq(0);
		//alert($('textarea#sect1-texto').text()); return false;

		var formData = new FormData($("#add_edit_proyecto")[0]);

		//alert("opcion 1" + $("#add_edit_proyecto").attr('action')); return false;
		//alert("opcion 2" + $("#add_edit_proyecto")[0]); return false;


		$.ajax({
			url: $("#add_edit_proyecto").attr('action'),
			data: formData,
			dataType: 'json',
			type: 'post',
			cache: false,
			contentType: false,
            processData: false,
		}).done(function(data){
			if(data.success==true){
				$('#div-crear-proyecto').hide();
				$('#conteiner_all_rows').load(env_webroot_script + escape('proyectos/find_proyectos/1/'+null+'/'+null+'/'+''+'/'+''),function(){
					$('#dtable_proyectos').DataTable();
				});
				//toastr.success(data.msg);
			}else{
				$.each(data.validation, function( key, value ) {
					//toastr.error(value[0]);
					$('[name="data[Proyecto]['+key+']"]').parent().addClass('control-group has-error');
					$('[name="data[Proyecto]['+key+']"]').change(function() {
						$('[name="data[Proyecto]['+key+']"]').parent().removeClass('control-group has-error');
					});
				});
			}
		});
	});

	$body.off('click','div#proyecto .edit-proyecto-trigger');
	$body.on('click','div#proyecto .edit-proyecto-trigger', function(){
		proyecto_id = $(this).parents('.proyecto_row_container').attr('proyecto_id');
		proyecto.openAddEditProyecto(proyecto_id);
	});
	
	$body.off('click','div#proyecto .open-model-delete-proyecto');
	$body.on('click','div#proyecto .open-model-delete-proyecto', function(){
		proyecto_id = $(this).parents('.proyecto_row_container').attr('proyecto_id');
		$('div#myModalDeleteProyecto').attr('proyecto_id', proyecto_id);
	});
	
	$body.off('click','div#myModalDeleteProyecto .eliminar-proyecto-trigger');
	$body.on('click','div#myModalDeleteProyecto .eliminar-proyecto-trigger', function(){
		proyecto_id = $('div#myModalDeleteProyecto').attr('proyecto_id');
		proyecto.deleteProyecto(proyecto_id);
	});
	
});