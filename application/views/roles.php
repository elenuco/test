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

		<!-- Sidebar -->


		<!-- Contenido de la página -->
		<div class="main-content">

			<!-- Header -->
			<div class="header-area">
				<?php echo $header; ?>
			</div>


			<!-- Contenido de la vista es previsto aquí -->
			<div class="container my-5">
				<a class="btn btn-info" href="<?php echo base_url(); ?>usuarios_control/eliminar_usuario?id_usuario=<?= $r->id_usuario; ?>" role="button" id="agregar" aria-haspopup="true" aria-expanded="false">Agregar</a>
				<table id="dataTable" style="text-align: center; border-radius: 40px;" class="table table-hover">
					<thead>
						<tr class="thead thead-dark ">
							<th hidden=""></th>
							<th scope="col">opciones de menu</th>
						</tr>

					</thead>
					<tbody>
						<?php foreach ($usuarios as $r) : ?>
							<tr>
								<td hidden="id_usuario"><?= $r->id_usuario; ?></td>
								<td><?= $r->rol; ?></td>
								<td>
									<div class="dropdown show">
										<a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<a href="<?php echo base_url(); ?>usuarios_control/eliminar_usuario?id_usuario=<?= $r->id_usuario; ?>" class="dropdown-item btn btn-info">Eliminar</a>

											<a href="<?php echo base_url(); ?>usuarios_control/accion_usuario?id_usuario=<?= $r->id_usuario; ?>" class="dropdown-item btn btn-secondary">
												Editar
											</a>
										</div>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>

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
