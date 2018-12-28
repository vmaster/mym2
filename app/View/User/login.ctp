<div>
	<h1 class="logo-name">AI</h1>
</div>

<h3>Bienvenido a Acu&ntilde;a Inmobiliaria</h3>

<p>
	Bienvenido a la mejor web de inmobiliaria
</p>

<form action="login" id="UsuarioLoginForm" method="post" accept-charset="utf-8">
	<div class="form-group">
		<input name="data[User][username]" class="form-control" placeholder="Usuario " maxlength="10" type="text" id="UsuarioUsername" required="required">
	</div>
	<div class="form-group">
		<input name="data[User][password]" class="form-control" placeholder="Contrase&ntilde;a " type="password" id="UsuarioPassword" required="required">
	</div>
	<button type="submit" class="btn btn-primary block full-width m-b">Inicio de Sessi&oacute;n</button>
</form>

<?php if ($this->Session->check('Message.flash')) {?>
<div class="alert alert-danger alert-dismissable">
	<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
	<?php echo $this->Session->flash();?>
</div>
<?php }?>

<p class="m-t">
	<small>Acu&ntilde;a &copy; 2018</small>
</p>
