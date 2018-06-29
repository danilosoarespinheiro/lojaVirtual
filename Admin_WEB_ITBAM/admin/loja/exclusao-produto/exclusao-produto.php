<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Loja | Exclusão</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<?php
	include "../../../libs/color_admin_intranet/dependencias/dependencias.php";
	?>

</head>

<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner bg-orange"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar  page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="../../index/index/index.php" class="navbar-brand"><span class="navbar-logo">Loja_Virtual</span> </a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin header navigation right -->

				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<!-- Navigation -->
				<?php
				include '../../../libs/color_admin_intranet/dependencias/menu.php';
				?>
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->

			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header"><small></small></h1>
			<!-- end page-header -->

			<!-- begin row -->
			<div class="row">

				<!-- begin col-12 -->
				<div class="col-md-12">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload" id = "panelRefreshTable" name = "panelRefreshTable"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Exclusão de Produtos</h4>
						</div>
						<div class="panel-body">
							<table id="data-table" class="table table-striped table-bordered " width="100%">
									<thead>
										<tr>
											<th style="white-space:nowrap">Id</th>
											<th style="white-space:nowrap">Nome Produto</th>
											<th style="white-space:nowrap">Marca</th>
											<th style="white-space:nowrap">Valor</th>
											<th style="white-space:nowrap">Data Cadastro</th>
											<th style="white-space:nowrap">Excluir</th>
										</tr>
									</thead>
									<tbody>

									</tbody>
								</table>
						</div>
					</div>
				</div>
				<!-- end col-10 -->
			</div>
			<!-- end row -->


		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<script >
	$(document).ready(function() {
		App.init();
		TableManageResponsive.init();
	} );
	</script>

	<!--  Datatable-->
	<script src="js/dataTable.js"></script>

	<!--  Excluir-->
	<script src="js/excluir.js"></script>

</body>
</html>
