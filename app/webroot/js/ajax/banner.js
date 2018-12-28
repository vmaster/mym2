$(document).ready(function(){
	
	Banner = this;
	$body = $('body');
	
	banner = {
		openAddEditBanner: function(banner_id){
			if(banner_id == undefined || !banner_id) {
				banner_id ='';
			}
			
			$('div#banner #add_edit_banner_container').unbind();
			$('div#banner #add_edit_banner_container').load(env_webroot_script + 'banners/add_edit_banner/'+banner_id,function(){

			});
		},
		
		deleteBanner: function(banner_id){
			$.ajax({
				type: 'post',
				url: env_webroot_script + 'banners/delete_banner',
				data:{
					'banner_id': banner_id
				},
				dataType: 'json'
			}).done(function(data){
				if(data.success == true){
					$('.banner_row_container[banner_id='+banner_id+']').fadeOut(function(){$(this).remove()});
					$('#conteiner_all_rows').load(env_webroot_script + escape('banners/find_banners/1/'+null+'/'+null+'/'+''+'/'+''),function(){
						$('#dtable_banners').DataTable();
					});
					//toastr.success(data.msg);
				}/*else{
					//toastr.error(value[0]);
				}*/
			});	
		}
	}
	
	/* Mostrar formulario: Crear Banner */
	$body.off('click','div#banner .btn-nuevo-banner');
	$body.on('click', 'div#banner .btn-nuevo-banner' , function(){
		banner_id = $(this).attr('banner_id');
		banner.openAddEditBanner(banner_id);
	});
	
	/* Ocultar formulario Crear Banner*/
	$body.on('click','div#div-crear-banner .btn-cancelar-crear-banner', function(){
		$('#div-crear-banner').fadeOut();
	});
	
	$body.off('click','.btn-crear-banner-trigger');
	$body.on('click','.btn-crear-banner-trigger',function(){
		//$form = $(this).parents('form').eq(0);
		var formData = new FormData($("#add_edit_banner")[0]);

		//alert("opcion 1" + $("#add_edit_banner").attr('action')); return false;
		//alert("opcion 2" + $("#add_edit_banner")[0]); return false;	
		$.ajax({
			url: $("#add_edit_banner").attr('action'),
			data: formData,
			dataType: 'json',
			type: 'post',
			contentType: false,
            processData: false,
		}).done(function(data){
			if(data.success==true){
				$('#div-crear-banner').hide();
				$('#conteiner_all_rows').load(env_webroot_script + escape('banners/find_banners/1/'+null+'/'+null+'/'+''+'/'+''),function(){
					$('#dtable_banners').DataTable();
				});
				//toastr.success(data.msg);
			}else{
				$.each(data.validation, function( key, value ) {
					//toastr.error(value[0]);
					$('[name="data[Banner]['+key+']"]').parent().addClass('control-group has-error');
					$('[name="data[Banner]['+key+']"]').change(function() {
						$('[name="data[Banner]['+key+']"]').parent().removeClass('control-group has-error');
					});
				});
			}
		});
	});

	$body.off('click','div#banner .edit-banner-trigger');
	$body.on('click','div#banner .edit-banner-trigger', function(){
		banner_id = $(this).parents('.banner_row_container').attr('banner_id');
		banner.openAddEditBanner(banner_id);
	});
	
	$body.off('click','div#banner .open-model-delete-banner');
	$body.on('click','div#banner .open-model-delete-banner', function(){
		banner_id = $(this).parents('.banner_row_container').attr('banner_id');
		$('div#myModalDeleteBanner').attr('banner_id', banner_id);
	});
	
	$body.off('click','div#myModalDeleteBanner .eliminar-banner-trigger');
	$body.on('click','div#myModalDeleteBanner .eliminar-banner-trigger', function(){
		banner_id = $('div#myModalDeleteBanner').attr('banner_id');
		banner.deleteBanner(banner_id);
	});
	
});