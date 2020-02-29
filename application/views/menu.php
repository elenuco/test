<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">
	<title></title>

	<?php echo $css; ?>

</head>

<body>

	<div id="preloader">
		<div class="loader"></div>
	</div>

	<!-- Contenedor de la página:
        Widgets y contenido es a partir de este div -->
	<div class="page-container">


		<!-- Contenido de la página -->
		<div class="main-content">

			<!-- Header -->
			<div class="header-area">
				<?php echo $header; ?>
			</div>


			<!-- Contenido de la vista es previsto aquí -->
			<div class="col-md-5">
			<form method="post" style="opacity: 1.0; border-radius: 2px; padding-top: 2px;" action="<?php echo base_url(); ?>principal_controller">
			<li>
				<a href="javascript:void(0)" aria-expanded="true"><i class="fas fa-user-md"></i><span><p>MENU principal</p></span></a>
				<ul class="collapse">
					<li> <a href="/<?php echo base_url(); ?>principal_controller/users">Mantenmiento de Usuarios</a> </li>
					<li> <a href="<?php echo base_url(); ?>principal_controller/">mantenimiento de roles</a> </li>
					<li> <a href="<?php echo base_url(); ?>principal_controller/">Mantenimiento de permisos</a> </li>
				</ul>
			</li>
                    </div>
			<footer>
				<?php echo $footer; ?>
			</footer>

		</div>

	</div>
	<!-- ./page-container end -->

	<?php echo $scripts; ?>

</body>

</html>
