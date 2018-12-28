$(document).ready(function(){
	
	Conoceno = this;
	$body = $('body');
	
	conoceno = {
		openAddEditConoceno: function(conoceno_id){
			if(conoceno_id == undefined || !conoceno_id) {
				conoceno_id ='';
			}
			
			$('div#conoceno #add_edit_conoceno_container').unbind();
			$('div#conoceno #add_edit_conoceno_container').load(env_webroot_script + 'conocenos/add_edit_conoceno/'+conoceno_id,function(){

			});
		},
		
		deleteConoceno: function(conoceno_id){
			$.ajax({
				type: 'post',
				url: env_webroot_script + 'conocenos/delete_conoceno',
				data:{
					'conoceno_id': conoceno_id
				},
				dataType: 'json'
			}).done(function(data){
				if(data.success == true){
					//$('.conoceno_row_container[conoceno_id='+conoceno_id+']').fadeOut(function(){$(this).remove()});
					location.reload();
					/*$('#conteiner_all_rows').load(env_webroot_script + escape('conocenos/find_conocenos/1/'+null+'/'+null+'/'+''+'/'+''),function(){
						$('#dtable_conocenos').DataTable();
					});			*/
				}
			});	
		}
	}
	
	/* Mostrar formulario: Crear Conoceno */
	$body.off('click','div#conoceno .btn-nuevo-conoceno');
	$body.on('click', 'div#conoceno .btn-nuevo-conoceno' , function(){
		conoceno_id = $(this).attr('conoceno_id');
		conoceno.openAddEditConoceno(conoceno_id);
	});
	
	/* Ocultar formulario Crear Conoceno*/
	$body.on('click','div#div-crear-conoceno .btn-cancelar-crear-conoceno', function(){
		$('#div-crear-conoceno').fadeOut();
	});

// EVENTOS PARA EDITORES

	///  EDITOR INTRODUCCIÓN
	$body.off('keypress','#div-intro .note-editable');
	$body.on('keypress','#div-intro .note-editable',function(){
		
		$("textarea#text-intro").html($('#div-intro .note-editable').html());
	});

	$body.off('click','#div-intro .note-toolbar');
	$body.on('click','#div-intro .note-toolbar',function(){
		
		$("textarea#text-intro").html($('#div-intro .note-editable').html());
	});

	/// EDITOR VISIÓN
	$body.off('keypress','#div-vision .note-editable');
	$body.on('keypress','#div-vision .note-editable',function(){
		
		$("textarea#text-vision").html($('#div-vision .note-editable').html());
	});

	$body.off('click','#div-vision .note-toolbar');
	$body.on('click','#div-vision .note-toolbar',function(){
		
		$("textarea#text-vision").html($('#div-vision .note-editable').html());
	});

	/// EDITOR MISIÓN
	$body.off('keypress','#div-mision .note-editable');
	$body.on('keypress','#div-mision .note-editable',function(){
		
		$("textarea#text-mision").html($('#div-mision .note-editable').html());
	});

	$body.off('click','#div-mision .note-toolbar');
	$body.on('click','#div-mision .note-toolbar',function(){
		
		$("textarea#text-mision").html($('#div-mision .note-editable').html());
	});
	


// FIN EVENTOS PARA EDITORES


	$body.off('click','.btn-crear-conoceno-trigger');
	$body.on('click','.btn-crear-conoceno-trigger',function(){
		//$form = $(this).parents('form').eq(0);
		//alert($('textarea#sect1-texto').text()); return false;

		var formData = new FormData($("#add_edit_conoceno")[0]);

		//alert("opcion 1" + $("#add_edit_conoceno").attr('action')); return false;
		//alert("opcion 2" + $("#add_edit_conoceno")[0]); return false;


		$.ajax({
			url: $("#add_edit_conoceno").attr('action'),
			data: formData,
			dataType: 'json',
			type: 'post',
			cache: false,
			contentType: false,
            processData: false,
		}).done(function(data){
			if(data.success==true){
				$('#div-crear-conoceno').hide();
				$('#conteiner_all_rows').load(env_webroot_script + escape('conocenos/find_conocenos/1/'+null+'/'+null+'/'+''+'/'+''),function(){
					$('#dtable_conocenos').DataTable();
				});
				$('.btn-nuevo-conoceno').hide();
				//toastr.success(data.msg);
			}else{
				$.each(data.validation, function( key, value ) {
					//toastr.error(value[0]);
					$('[name="data[Conoceno]['+key+']"]').parent().addClass('control-group has-error');
					$('[name="data[Conoceno]['+key+']"]').change(function() {
						$('[name="data[Conoceno]['+key+']"]').parent().removeClass('control-group has-error');
					});
				});
			}
		});
	});

	$body.off('click','div#conoceno .edit-conoceno-trigger');
	$body.on('click','div#conoceno .edit-conoceno-trigger', function(){
		conoceno_id = $(this).parents('.conoceno_row_container').attr('conoceno_id');
		conoceno.openAddEditConoceno(conoceno_id);
	});
	
	$body.off('click','div#conoceno .open-model-delete-conoceno');
	$body.on('click','div#conoceno .open-model-delete-conoceno', function(){
		conoceno_id = $(this).parents('.conoceno_row_container').attr('conoceno_id');
		$('div#myModalDeleteConoceno').attr('conoceno_id', conoceno_id);
	});
	
	$body.off('click','div#myModalDeleteConoceno .eliminar-conoceno-trigger');
	$body.on('click','div#myModalDeleteConoceno .eliminar-conoceno-trigger', function(){
		conoceno_id = $('div#myModalDeleteConoceno').attr('conoceno_id');
		conoceno.deleteConoceno(conoceno_id);
	});

});