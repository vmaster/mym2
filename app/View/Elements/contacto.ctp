<section class="b6 contacto">
   <div class="wancho" style="padding-bottom: 40px">
	  <div class="b6-ctn">
		 <div class="left">
			<div class="b6-img"><img src="<?php echo ENV_WEBROOT_FULL_URL;?>img/pareja.png" alt=""></div>
		 </div>
			<div class="right">
				<div class="b12-title">
				   <h2 class="g-title yellow">Te esperamos<br><span>¡ escríbenos ahora !!</span></h2>
				</div>
				<div class="b12-form">
				   <form name="form" method="post" action="<?php echo ENV_WEBROOT_FULL_URL;?>proyectos/contact_enviar_email" novalidate="novalidate" id="form-reserva">
					  <div class="b6-col-2">
						 <div class="b6-col-left">
							<div class="b6-input">
								<input type="text" id="form_nombre" name="data[Contacto][nombre]" required="required" class="validate[required]" /><label for="form_nombre">Nombre y Apellidos:</label>
							</div>
							<div class="error-message error-nombre hide" style="padding-top: 11px;line-height: 15px; ">
								El nombre es obligatorio
							</div>
						 </div>
						 <div class="b6-col-right">
							<div class="b6-input"><input type="text" id="form_documento" name="data[Contacto][dni]" required="required" maxlength="255" class="validate[required]" /><label for="form_documento">Nº Documento:</label></div>
							<div class="error-message error-dni hide" style="padding-top: 11px;line-height: 15px; ">
								El dni es obligatorio
							</div>
						 </div>
					  </div>
					  <div class="b6-col-2">
						 <div class="b6-col-left">
							<div class="b6-input"><input type="text" id="form_telefono" name="data[Contacto][telefono]" required="required" maxlength="255" class="validate[required]" /><label for="form_telefono">Teléfono:</label></div>
							<div class="error-message error-telefono hide" style="padding-top: 11px;line-height: 15px; ">
								El telefono es obligatorio
							</div>
						 </div>
						 <div class="b6-col-right">
							<div class="b6-input"><input type="text" id="form_email" name="data[Contacto][correo]" required="required" maxlength="255" class="validate[required,custom[email]]" /><label for="form_email">Correo:</label></div>
							<div class="error-message error-correo hide" style="padding-top: 11px;line-height: 15px; ">
								El correo es obligatorio
							</div>
						 </div>
					  </div>
					  <div class="b6-btn">
						<input type="button" class="btn-big submit-contacto" value="INFORMATE AQUI">
						<img class="loadingAprobar hide" src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==" />
						<div class="sendExito hide" style="padding-top: 10px;color: #181818;">Felicidades, se envio correctamente tu mensaje.</div>
					  </div>
					  <input type="hidden" id="form__token" name="form[_token]" value="kSOTXbzIxW5U2U14wi1vH8eV6-Om7bAVG3SLdRK8ykk" />
				   </form>
				</div>
			</div>		 
		 </div>
	  </div>
   </div>
</section>