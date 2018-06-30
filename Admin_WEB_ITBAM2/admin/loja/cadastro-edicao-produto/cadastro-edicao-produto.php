<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Loja | Cadastro / Edição</title>
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
				<!-- begin col-8 -->
				<div class="col-md-12">

					<div class="panel panel-inverse" data-sortable-id="index-1" id = "cadastroDiv" name = "cadastroDiv">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload" id = "panelRefresh" name = "panelRefresh"><i class="fa fa-repeat"></i></a> -->
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Cadastro de Produtos</h4>
						</div>

							<div class="panel-body">
								<div class="row">

									<div class="col-sm-5" >
										<div class='form-group'>
											<div class='form-group'>
												<label for="nomeCadastro">Nome</label>
												<input type="text" class="form-control" id="nomeCadastro"  name="nomeCadastro"  placeholder = "Nome do Produto" ></input>
											</div>
										</div>
									</div>

									<div class="col-sm-5" >
										<div class='form-group'>
											<div class='form-group'>
												<label for="marcaCadastro">Marca</label>
												<input type="text" class="form-control" id="marcaCadastro"  name="marcaCadastro"  placeholder = "Marca do Produto" ></input>
											</div>
										</div>
									</div>

									<div class="col-sm-2" >
										<div class='form-group'>
											<div class='form-group'>
												<label for="valorCadastro">Valor</label>
												<input type="text" class="form-control" id="valorCadastro"  name="valorCadastro" maxlength="5" placeholder = "0.00" ></input>
											</div>
										</div>
									</div>

								</div>

								<div class="form-group">
									<div class="btn pull-right">
										<input class="ladda-button btn btn-warning " type="submit" id="btnCadProduto" value="cadastrar" onsubmit="return false">
									</div>
								</div>

						</div>

					</div>
				</div>
				<!-- end col-8 -->

			</div>
			<!-- end row -->

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
							<h4 class="panel-title">Edição de Produtos</h4>
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
											<th style="white-space:nowrap">Edição</th>
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

			<div class="modal fade" id="modalEditar"  role="dialog" aria-hidden="true">

          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header text-center">
                      <h4 class="modal-title">Editar Produto</h4>
                  </div>
                  <div class="modal-body">
                      <div class="row" >
                          <div class='col-sm-3'>
                              <div class='form-group'>
                                  <label for="IdEditarProduto">Id Produto</label>
                                  <input class="form-control" id="IdEditarProduto" name="IdEditarProduto" type="text" value="" disabled=""/>
                              </div>
                          </div>
                      </div>

											<div class="row" >
												<div class="col-sm-5" >
													<div class='form-group'>
														<div class='form-group'>
															<label for="nomeEditar">Nome</label>
															<input type="text" class="form-control" id="nomeEditar"  name="nomeEditar"  ></input>
														</div>
													</div>
												</div>

												<div class="col-sm-5" >
													<div class='form-group'>
														<div class='form-group'>
															<label for="marcaEditar">Marca</label>
															<input type="text" class="form-control" id="marcaEditar"  name="marcaEditar" ></input>
														</div>
													</div>
												</div>

												<div class="col-sm-2" >
													<div class='form-group'>
														<div class='form-group'>
															<label for="valorEditar">Valor</label>
															<input type="text" class="form-control" id="valorEditar"  name="valorEditar" maxlength="5"></input>
														</div>
													</div>
												</div>
                      </div>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnEditarSair">Sair</button>
                      <input class="ladda-button btn btn-warning" type="submit" id="btnEditar" value="Salvar">
                  </div>
              </div>
          </div>

      </div>

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

	<!--  Scripts Cadastro Produto-->
	<script src="js/valor.js"></script>
	<script src="js/cadastro.js"></script>

	<!--  Datatable-->
	<script src="js/dataTable.js"></script>

	<!--  Editar-->
	<script src="js/editar.js"></script>


</body>
</html>
