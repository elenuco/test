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
				<table id="dataTable" style="text-align: center; border-radius: 40px;" class="table table-hover">
					<thead>
						<tr class="thead thead-dark"> 
							<th></th>
							<th></th>
						<th><a type="buttom" class="btn btn-danger btn-block" href="<?php echo base_url(); ?>principal_controller/newuser">agregar usuario</a></li></th>
						</tr>
						<tr class="thead thead-dark ">
							<th hidden=""></th>
							<th scope="col">CODIGO</th>
							<th scope="col">NOMBRE</th>
							<th scope="col">Acciones</th>

						</tr>

					</thead>
					<tbody>
						<?php foreach ($users as $r) : ?>
							<tr>
								<td hidden="idusr"><?= $r->idusr; ?></td>
								<td><?= $r->codigo; ?></td>
								<td><?= $r->nombre; ?></td>
								<td>
									<div class="dropdown show">
										<a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<a href="<?php echo base_url(); ?>usuarios_control/eliminar_users?idusr=<?= $r->idusr; ?>" class="dropdown-item btn btn-info">Eliminar</a>

											<a href="<?php echo base_url(); ?>usuarios_control/accion_users?idusr=<?= $r->idusr; ?>" class="dropdown-item btn btn-secondary">
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
