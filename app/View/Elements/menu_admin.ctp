<?php $controller = $this->request->params['controller'];?>
<?php $action = $this->request->params['action'];?>
<ul class="nav metismenu" id="side-menu">
	<li class="nav-header">
		<div class="dropdown profile-element">
			<span> <img alt="image" class="img-circle" width="48px"
				src="<?php echo ENV_WEBROOT_FULL_URL?>img/conejo.jpg" />
			</span> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <span
				class="clear"> <span class="block m-t-xs"> <strong class="font-bold">
					</strong>
				</span> <span class="text-muted text-xs block">
						<b class="caret"></b>
				</span>
			</span>
			</a>
			<ul class="dropdown-menu animated fadeInRight m-t-xs">
				<!-- <li><a href="profile.html">Perfil</a>
				</li> -->
				<li class="divider"></li>
				<li><a href="<?php echo ENV_WEBROOT_FULL_URL?>users/logout">Salir</a>
				</li>
			</ul>
		</div>
		<div class="logo-element">IN+</div>
	</li>
	<li class="<?php echo ($controller == 'banners')?"active":"";?>"><a href="<?php echo ENV_WEBROOT_FULL_URL?>banners/index"><i class="fa fa-th-large"></i> <span
			class="nav-label">Banner</span>
	</a></li>
	<li class="<?php echo ($controller == 'proyectos')?"active":"";?>"><a href="<?php echo ENV_WEBROOT_FULL_URL?>proyectos/index"><i class="fa fa-files-o"></i> <span
			class="nav-label">Proyectos</span>
	</a></li>
	<li class="<?php echo ($controller == 'conocenos')?"active":"";?>"><a href="<?php echo ENV_WEBROOT_FULL_URL?>conocenos/index"><i class="fa fa-search"></i> <span
			class="nav-label">Conocenos</span>
	</a></li>
	
</ul>