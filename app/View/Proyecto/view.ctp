<section class="b23 wancho" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-banner/'.$obj_proyecto->getAttr('proy_banner');?>)">
   <div class=" b23cntbox">
	  <div class="b23table">
		 <div class="left">
			<div class="b23-title">
			   <h2 class="g-title white"><?php echo h($obj_proyecto->getAttr('thumb_titulo'));?><br><span><?php echo h($obj_proyecto->getAttr('thumb_subtitulo'));?></span></h2>
			</div>
		 </div>
		 <!--<div class="right btn-2">
			<div class="b23-btn">
			   <div class="b23-botone"><a href="https://www.youtube.com/watch?v=UIGDRmhspM8&t=34s&spfreload=5" class="btn-white-2">VER VIDEO</a></div>
			   <span>&nbsp;</span>
			   <div class="b23-botone"><a href="http://www.wescon.pe/uploads/brochure/book-2daetapa-2-ilovepdf-compressed.pdf" download="/uploads/brochure/book-2daetapa-2-ilovepdf-compressed.pdf" class="btn-white">DESCARGAR BROCHURE</a></div>
			</div>
		 </div>-->
	  </div>
   </div>
</section>
<section class="b9 wancho">
   <div class="b9-cnt">
	  <div class="b9-desc">
		 <div class="b9-ctn-text">
			<div class="b9-title">
			   <h2><?php echo h($obj_proyecto->getAttr('sect1_titulo'));?><br><span><?php echo h($obj_proyecto->getAttr('sect1_subtitulo'));?></span></h2>
			</div>
			<div class="b9-text">
			   <?php echo $obj_proyecto->getAttr('sect1_texto'); ?>
			</div>
		 </div>
		 <div class="b23-botone"><a href="http://www.wescon.pe/uploads/brochure/book-2daetapa-2-ilovepdf-compressed.pdf" class="btn-white" download="/uploads/brochure/book-2daetapa-2-ilovepdf-compressed.pdf" >DESCARGAR BROCHURE</a></div>
		 <div class="b9-img"><img src="<?php echo ENV_WEBROOT_FULL_URL.'files/proy-sect1-img/'.$obj_proyecto->getAttr('sect1_img');?>" alt=""></div>
		 <div class="b9-char">
			<ul class="b9-char-cnt">
			   <li class="b9-area b9-char-item">
				  <p>Área</p>
				  <p><strong><?php echo h($obj_proyecto->getAttr('area'));?></strong></p>
			   </li>
			   <li class="b9-type b9-char-item">
				  <p>Tipo</p>
				  <p><strong><?php echo h($obj_proyecto->TipoVivienda->getAttr('descripcion'));?></strong></p>
			   </li>
			   <li class="b9-fin b9-char-item">
				  <p>Financiado</p>
				  <p><?php echo h($obj_proyecto->Banco->getAttr('nombre'));?><!--<img src="theme/uploads/bancos/bcp.png" alt="">--></p>
			   </li>
			</ul>
		 </div>
	  </div>
   </div>
</section>
<section class="b10">
   <div class="b10-main">
	  <div class="b10-buttons">
		 <ul>
		 	<?php echo ($obj_proyecto->getAttr('ubicacion_titulo') != '')? "<li><a href='#' data-id='b10-tab1'><span>Ubicación</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('area_com_titulo') != '')? "<li><a href='#' data-id='b10-tab2'><span>Áreas Comunes</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('depart_titulo') != '')? "<li><a href='#' data-id='b10-tab3'><span>Departamentos</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('area_verd_titulo') != '')? "<li><a href='#' data-id='b10-tab4'><span>Áreas verdes</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('tech_prop_titulo') != '')? "<li><a href='#' data-id='b10-tab5'><span>Requisitos Techo Propio</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('proy_titulo') != '')? "<li><a href='#' data-id='b10-tab6'><span>Proyectos</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('casas_titulo') != '')? "<li><a href='#' data-id='b10-tab7'><span>Casas</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('promo_titulo') != '')? "<li><a href='#' data-id='b10-tab8'><span>Promociones</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('facilidad_titulo') != '')? "<li><a href='#' data-id='b10-tab9'><span>Más facilidades</span></a></li>" : ""; ?>
			<?php echo ($obj_proyecto->getAttr('ventaja_titulo') != '')? "<li><a href='#' data-id='b10-tab10'><span>Ventajas del Proyecto</span></a></li>" : ""; ?>
		 </ul>
	  </div>
	  <div class="b19-content">
		 <ul>
			<li id="b10-tab1" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
				   <div class="b10-table">
					  <div class="b10-envolve">
						 <div class="b10-title">
							<h3><?php echo h($obj_proyecto->getAttr('ubicacion_titulo'));?></h3>
						 </div>
						 <div class="b10-text">
							<?php echo $obj_proyecto->getAttr('ubicacion_texto');?>
							<p>&nbsp;</p>
						 </div>
					  </div>
				   </div>
				</li>
				<li id="b10-tab2" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
				   <div class="b10-table">
					  <div class="b10-envolve">
						 <div class="b10-title">
							<h3><?php echo h($obj_proyecto->getAttr('area_com_titulo'));?></h3>
						 </div>
						 <div class="b10-text">
							<?php echo $obj_proyecto->getAttr('area_com_texto');?>
						</div>
					 </div>
				  </div>
			</li>
			<li id="b10-tab3" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo h($obj_proyecto->getAttr('depart_titulo'));?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('depart_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab4" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo h($obj_proyecto->getAttr('area_verd_titulo'));?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('area_verd_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab5" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo h($obj_proyecto->getAttr('tech_prop_titulo'));?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('tech_prop_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab6" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo h($obj_proyecto->getAttr('proy_titulo'));?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('proy_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab7" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo h($obj_proyecto->getAttr('casas_titulo'));?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('casas_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab8" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo h($obj_proyecto->getAttr('promo_titulo'));?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('promo_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab9" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo h($obj_proyecto->getAttr('facilidad_titulo'));?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('facilidad_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
			<li id="b10-tab10" class="b10-boxitem" style="background-image: url(<?php echo ENV_WEBROOT_FULL_URL.'files/proy-thumb/'.$obj_proyecto->getAttr('thumbnail');?>);">
			   <div class="b10-table">
				  <div class="b10-envolve">
					 <div class="b10-title">
						<h3><?php echo h($obj_proyecto->getAttr('ventaja_titulo'));?></h3>
					 </div>
					 <div class="b10-text">
						<?php echo $obj_proyecto->getAttr('ventaja_texto');?>
					 </div>
				  </div>
			   </div>
			</li>
		 </ul>
	  </div>
   </div>
</section>

<section class="b13 wancho">
   <div class="b13-cnt">
	  <div class="b13-map">
		 <div id="gmap"></div>
		 <div class="b13-btn-cerrar"><a href="" class="btn-big b13-pitcher-close" type="submit">CERRAR MAPA</a></div>
	  </div>
	  <div class="b13-dir wancho">
		 <div class="b13-dir-cnt ">
			<h2><?php echo $obj_proyecto->getAttr('mapa_titulo');?><br />
			</h2>
			<?php echo $obj_proyecto->getAttr('mapa_texto');?>
			<div class="b13-btn-abrir"><a href="" class="btn-big b13-pitcher-open" type="submit">VER MAPA</a></div>
		 </div>
	  </div>
   </div>
</section>

<?php //echo $this->Element('contacto'); ?>

<div class="b50-pop-up">
   <div class="b50-overlay"></div>
   <div class="b50-pop-content">
	  <span class="icon-close b50-close"></span>
	  <div class="b50-pop-info" data-id="1_1" style="display:none">
		 <div class="b50-img"><img src="<?php echo ENV_WEBROOT_FULL_URL.'files/croquis/'.$obj_proyecto->getAttr('img_croquis1');?>" width="620" height="411" alt=""></div>
		 <div class="b50-details">
			<div class="b50-details-table">
			   <div class="b50-details-cell">
				  <div class="b50-list">
				  	<!--
					 <h3>Desde 61 hasta 70m2</h3>
					 <ul>
						<li>Dormitorio Principal</li>
						<li>Segundo Dormitorio</li>
						<li>Tercer Ambiente</li>
						<li>Sala Comedor</li>
						<li>Cocina - Lavander&iacute;a</li>
						<li>2 Ba&ntilde;os Completos</li>
						<li>&Aacute;rea de estudio</li>
						<li>Balc&oacute;n</li>
					 </ul>
					-->
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
	  <div class="b50-pop-info" data-id="1_2" style="display:none">
		 <div class="b50-img"><img src="<?php echo ENV_WEBROOT_FULL_URL.'files/croquis/'.$obj_proyecto->getAttr('img_croquis1');?>" width="620" height="411" alt=""></div>
		 <div class="b50-details">
			<div class="b50-details-table">
			   <div class="b50-details-cell">
				  <div class="b50-list">
				  	<!--
					 <h3>Desde 55 hasta 60m2</h3>
					 <ul>
						<li>Dormitorio Principal</li>
						<li>Segundo Ambiente</li>
						<li>Sala Comedor</li>
						<li>Kitchenette</li>
						<li>Zona de Lavander&iacute;a</li>
						<li>2 Ba&ntilde;os Completos</li>
						<li>Balc&oacute;n</li>
					 </ul>
					-->
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
   </div>
</div>

<script type="text/javascript">
	
     function initMap() {
            var map;
            var color = [
			    {
			        "featureType": "administrative.country",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "color": "#2c52a2"
			            }
			        ]
			    },
			    {
			        "featureType": "administrative.province",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "color": "#2c52a2"
			            }
			        ]
			    },
			    {
			        "featureType": "administrative.locality",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "color": "#2c52a2"
			            }
			        ]
			    },
			    {
			        "featureType": "administrative.neighborhood",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "color": "#2c52a2"
			            }
			        ]
			    },
			    {
			        "featureType": "administrative.land_parcel",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "hue": "#ff0000"
			            }
			        ]
			    },
			    {
			        "featureType": "administrative.land_parcel",
			        "elementType": "labels.text.stroke",
			        "stylers": [
			            {
			                "color": "#2c52a2"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape.natural",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "visibility": "on"
			            },
			            {
			                "color": "#e0efef"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape.natural.landcover",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#f5f5f5"
			            }
			        ]
			    },
			    {
			        "featureType": "poi",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "visibility": "on"
			            },
			            {
			                "hue": "#1900ff"
			            },
			            {
			                "color": "#c0e8e8"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.park",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#c6ebbd"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "lightness": 100
			            },
			            {
			                "visibility": "simplified"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "elementType": "labels",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "transit.line",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "visibility": "on"
			            },
			            {
			                "lightness": 700
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "elementType": "all",
			        "stylers": [
			            {
			                "color": "#7dcdcd"
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#addbf1"
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "color": "#2c52a2"
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "elementType": "labels.text.stroke",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            }
			        ]
			    }
			];

            var latlng = new google.maps.LatLng(<?php echo $obj_proyecto->getAttr('ubicacion');?>);
            var pin = '<?php echo ENV_WEBROOT_FULL_URL; ?>theme/uploads/ubicacion/marker.png';
            var image = {
                url : pin,
                size: new google.maps.Size(199, 182),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(100, 180)
            };

            var marker = new google.maps.Marker({
                map: map,
                position: latlng,
                icon: image,
            });

            var mapOptions = {
                zoom: 15,
                center: latlng,
                mapTypeControl   : true,
                disableDefaultUI : true,
                zoomControl      : true,
                scrollwheel      : false,
                //draggable        : false,
                //Para el mapa en gris
            };

            map = new google.maps.Map(document.getElementById('gmap'), mapOptions);

            var mapType = new google.maps.StyledMapType(color, { name:"Grayscale" });
            map.mapTypes.set('map', mapType);
            marker.setMap(map);
            map.setMapTypeId('map');

    }

</script>