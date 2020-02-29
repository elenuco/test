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
			<!-- Formulario -->
			<form method="post" style="opacity: 1.0; border-radius: 2px; padding-top: 2px;" action="<?php echo base_url(); ?>usuarios_control/guardar_usuario">

				<div class="row">
					<div class="col-2"></div>
					<div class="col-8">
						<div class="form-group">
							<label>Codigo</label>
							<input type="text" name="codigo" id="codigo" class="form-control" placeholder="Digite su codigo" maxlength="10"><span id="e_username"></span>
						</div>
						<div class="form-group">
							<label>Nombres</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Digite su nombre" maxlength="100"><span id="e_username"></span>
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" maxlength="10" minlength="5">
						</div>
						<div class="form-group">
							<div class="form-group">
								<input type="submit" name="submit" id="datepicker" value="Guardar" class="btn btn-info btn-block col-lg-4">
								<script>
									$('#datepicker').datepicker({
										uiLibrary: 'bootstrap4'
									});
								</script>
							</div>
							<br>

							<div class="col-lg-4">
								<a type="buttom" class="btn btn-danger btn-block" href="<?php echo base_url(); ?>usuarios_control">Cancelar</a>
							</div>
						</div>


						<div class="col-2"></div>
					</div>

			</form>
			<footer>
				<?php echo $footer; ?>
			</footer>

		</div>

	</div>
	<!-- ./page-container end -->

	<?php echo $scripts; ?>

</body>

</html>
