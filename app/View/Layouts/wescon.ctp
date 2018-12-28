<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
      <TITLE>Acu&ntilde;a  Inmobiliario</TITLE>
      <META NAME="Description" CONTENT="Inmobiliaria con proyectos en Venta de Casas y departamentos - Chiclayo
         ">
      <meta property="og:url" content="http://www.wescon.pe/" />
      <meta property="og:type"               content="website" />
      <title></title>
      <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
      <!-- inicio favicon  iphone retina, ipad, iphone en orden-->
      <link rel="icon" type="image/png" href="<?php echo ENV_WEBROOT_FULL_URL;?>img/favicon.png"/>
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo ENV_WEBROOT_FULL_URL;?>img/favicon.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo ENV_WEBROOT_FULL_URL;?>img/favicon.png">
      <link rel="apple-touch-icon-precomposed" href="<?php echo ENV_WEBROOT_FULL_URL;?>img/favicon.png">
      <!-- end favicon -->
      <link rel="stylesheet" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/css/jquery.bxslider.css'; ?>"/>
      <link rel="stylesheet" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/slick/slick.css'; ?>">
      <link rel="stylesheet" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/slick/slick-theme.css';?>"/>
      <link rel="stylesheet" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/owl-carousel/owl.carousel.css';?>"/>
      <link rel="stylesheet" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/owl-carousel/owl.theme.default.min.css';?>"/>
      <link rel="stylesheet" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/owl-carousel/animate.css';?>"/>
      <link rel="stylesheet" type="text/css" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/css/styles.css';?>"/>
      <link rel="stylesheet" type="text/css" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/css/blocks_styl.css';?>"/>
      <link rel="stylesheet" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/css/validationEngine.jquery.css';?>" type="text/css"/>

      <style type="text/css">
      .gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }
      .error-message{ color: red;}
      .hide{ display: none;}
      .show{ display: block;}
      </style>
   </head>
   <body class="">
      <!-- html solo para el menu responsive -->
      <div  class="menu-mobile-open icon-menu"></div>
      <div class="menu-mobile-close icon-close"></div>
      <div class="menu-overlay"></div>
      <!-- html solo para el menu responsive -->
      <div class="cnt-wrapper">
         <div class="wrapper">
            <!-- HEADER START -->
            <?php echo $this->Element('menu_web'); ?>
            <!-- HEADER END -->
			<!-- CONTENT START -->
            <?php echo $this->fetch('content'); ?>
            <!-- CONTENT END -->
         </div>
      </div>
      <!-- FOOTER START -->
      <?php echo $this->Element('footer'); ?>
      <!-- FOOTER END --><!-- contenedor del menu responsive -->
      <div class="menu-sidebar">
         <div class="menu-sidebar-cnt"></div>
      </div>
      <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/jquery1.8.3.min.js'; ?>" type="text/javascript"></script>
  	  <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/jquery.placeholder.js'; ?>" type="text/javascript"></script>
  	  <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/jquery.validationEngine.js'; ?>" type="text/javascript"></script>
  	  <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/jquery.validationEngine-es.js'; ?>" type="text/javascript"></script>
      <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/owl-carousel/owl.carousel.js'; ?>" type="text/javascript"></script>
  	  <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/main.js'; ?>" type="text/javascript"></script><!-- JSADD START -->
  	  <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/jquery.bxslider.min.js'; ?>"></script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7w61JNwJT6BSmx3159ffFT4Pisu1k2vM&callback=initMap"></script>
      <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/slick/slick.js'; ?>"></script>
      <script>
         $(function(){
             $('.b1-slider').bxSlider({
                 mode:'vertical',
                 infinite:true,
                 controls:true,
                 auto:true,
                 nextText: '',
                 prevText: '',
                 variableWidth:true,
             });
         
      			 $('.b2-slider').slick({
      				 slidesToShow:4,
      				 speed: 600,
      				 slideToScroll:1,
      				 responsive:[
      					 {
      						 breakpoint: 1500,
      						 settings:{
      							 slidesToShow:3,
      							 slideToScroll:1,
      						 }
      					 },
      					 {
      						 breakpoint: 992,
      						 settings:{
      							 slidesToShow:2,
      							 centerMode:true,
      							 slideToScroll:1,
      							 variableWidth:false,
      						 }
      					 },
      					 {
      						 breakpoint: 960,
      						 settings:{
      							 slidesToShow:1,
      							 centerMode:true,
      							 slideToScroll:1,
      							 variableWidth:false,
      						 }
      					 }
      				 ]
      			 });
             
             $('.b4-slider').bxSlider({
                 mode:'vertical',
                 infinite:true,
                 controls:false,
                 auto:true,
                 variableWidth:true,
             });
         
             $('.b5-slider').bxSlider({
                 infinite:true,
                 controls:false,
                 auto:true,
                 pager:false,
                 variableWidth:true,
             });
         
             $('.b1-link a').click(function(e){
                 e.preventDefault();
                 var thref = $(this).attr('href');
                 $('body, html').animate({
                     scrollTop: $(thref).offset().top
                 }, 600);
             });
         
         
             $('.b3-play').click(function(e) {
                 e.preventDefault();
                 $('.b3-video').addClass('active');
                 $("#b3-iframe")[0].src += "&autoplay=1";
         
             });
             $("#form-home").submit(function(e) {
                 var valid = $(this).validationEngine('validate');
                 if (!valid){
                     return false;
                 }else{
                     return true;
                 };
             });
         });
      </script><!-- JSADD END -->
      <script type="text/javascript">
         $(function() {
         	// :)
         	$('.b6-input input , .b6-input select, .b6-input textarea').on("load change paste keyup",function(){
         		var value = $(this).val();
         		if(value.length > 0 && value != "Default text"){
         			$(this).parent().addClass('active');
         		}
         		else{
         			$(this).parent().removeClass('active');
         		}
         	});
         	$("form").validationEngine('attach', {
         		promptPosition : "topLeft",
         		autoHidePrompt: true,
         		autoHideDelay: 3000,
         		binded: false,
         		scroll: false,
         		validateNonVisibleFields: true
         	}); 

          $('.b13-pitcher-open').click(function(event) {
              event.preventDefault();
              $('.b13-map').addClass('active');
          });

          $('.b13-pitcher-close').click(function(event) {
              event.preventDefault();
              $('.b13-map').removeClass('active');
          });


          $('.b50-pitcher').on('click', function(event) {
              event.preventDefault();
              var id = $(this).attr('data-id');
              console.log(id, '<--- este');
              $('.b50-pop-info').css('display', 'none');
              $('.b50-pop-info[data-id="'+id+'"]').css('display', '');
              $('.b50-pop-up').addClass('active');
          });

          $('.b50-close, .b50-overlay').click(function(event) {
              event.preventDefault();
              $('.b50-pop-up').removeClass('active');
          });

          $('.b12-tab-top-link:first-child').addClass('active');
          $('.b12-tab-top-item:first-child').addClass('active');


          $('.b12-top-tab .b12-top-link').click(function(event) {
              event.preventDefault();
              $('.b12-tab-top-link').removeClass('active');
              $(this).addClass('active');
              var data_id_top= $(this).attr('data-top');
              console.log(data_id_top);
              $('.b12-content-tab .b12-tab-top-item').removeClass('active');
              $('.b12-tab-top-item[id="'+ data_id_top+'"]').addClass('active');

          });

          $('.b12-img-item:first-child').addClass('active');

          $('.b12-cnt-tab .b12-pager-item').click(function(e) {
              e.preventDefault();
              var data_id_slider = $(this).attr('data-id');
              $(this).closest('.b12-cnt-tab').find('.b12-pager-item').removeClass('active');
              $(this).addClass('active');
              $(this).closest('.b12-cnt-tab').find('.b12-img-item').removeClass('active');
              $(this).closest('.b12-cnt-tab').find('.b12-img-item[id="'+data_id_slider+'"]').addClass('active');
          });


          $('.js-b12-lanzador').owlCarousel({
              loop:false,
              autoplay:false,
              margin:20,
              nav:true,
              responsive:{
                  0:{
                      items:3
                  },
                  400:{
                      items:3
                  },
                  768:{
                      items:3
                  }
              }

          });

          owl = $('.js-b12-lanzador');
          owl.on('changed.owl.carousel',function(property){
              var current = property.item.index;
              $(property.target).find('.owl-item').removeClass('select').find('.b12-pager-item').removeClass('active');
              var idtab = $(property.target).find(".owl-item").eq(current).addClass('select').find('.b12-pager-item').addClass('active').attr('data-id');
              console.log(idtab);

              $(property.target).closest('.b12-cnt-tab').find('.b12-img-item').removeClass('active');
              $(property.target).closest('.b12-cnt-tab').find('.b12-img-item[id="'+idtab+'"]').addClass('active');
          });


          $('.b10-buttons li:first-child').addClass('active');
          $('.b10-boxitem:first-child').addClass('active');
          // tab
          $('.b10-buttons a').click(function(e) {
              e.preventDefault();
              $('.b10-buttons li').removeClass('active');
              $(this).parent().addClass('active');
              var b10_data = $(this).attr('data-id');
              $('.b10-boxitem').removeClass('active');
              $('.b10-boxitem[id="'+b10_data+'"]').addClass('active');
          });
          // end


          /*$('.b11-slider').bxSlider({
              infinite:true,
              controls:false,
              auto:true,
              pagerCustom: '#bx-pager'
          });*/
          $('.b11-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.b11-nav',
            responsive: [
              {
                  breakpoint: 481,
                  settings: {
                      autoplay: true
                  }
              }
          ]
          });
          $('.b11-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.b11-slider',
            dots: true,
            vertical: true,
            verticalSwiping: true,
            adaptiveHeight: true,
            focusOnSelect: true,
            responsive: [
              {
                  breakpoint: 961,
                  settings: {
                      vertical:false
                  }
              },
              {
                  breakpoint: 851,
                  settings: {
                      vertical:false,
                      slidesToShow: 3
                  }

              }
          ]
          });
         	
         });
      </script>
      <script type="text/javascript">
      $(document).ready(function(){
        $body = $('body');

        $body.off('click','.submit-contacto');
        $body.on('click', '.submit-contacto' , function(){
          $('.submit-contacto').attr("disabled", "disabled");
          $('.loadingAprobar').addClass('show');
		  $('.submit-contacto').attr("value", "Enviando.. ");

		  $form = $(this).parents('form').eq(0);
          $.ajax({
            url: $form.attr('action'),
            data: $form.serialize(),
            type: 'post',
            dataType: 'json'
          }).done(function(data){
            $('.submit-contacto').removeAttr("disabled");
			$('.loadingAprobar').removeClass('show');
			$('.loadingAprobar').addClass('hide');
            $('.submit-contacto').attr("value", "INFORMATE AQUI");
			
			if(data.success){
			  $('#form_nombre').attr("value", "");
			  $('#form_documento').attr("value", "");
			  $('#form_telefono').attr("value", "");
			  $('#form_email').attr("value", "");
              //alert("Felicidades, se envio correctamente tu mensaje.");
			  $('.sendExito').addClass('show');
			  setTimeout(function(){
					$('.sendExito').removeClass('show');
					$('.sendExito').addClass('hide');
			  },5000)
            }else{
              data.validation.forEach( function(valor, indice, array) {
                console.log("En el índice " + indice + " hay este valor: " + valor);
                $('.error-'+valor).removeClass('hide');
                $('.error-'+valor).addClass('show');
                $('[name="data[Contacto]['+valor+']"]').keypress(function() {
                  $('.error-'+valor).removeClass('show');
                  $('.error-'+valor).addClass('hide');
                });
              });
            }
            
          });
        });

      });
      </script>
   </body>
</html>