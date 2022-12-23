<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link rel="stylesheet" href="../css/style.css">
	<title>Assipark</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo_assipark.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
	<div class="wrapper bg-white">
    <nav id="sidebar" class="sidebar js-sidebar bg-white">
			<div class="sidebar-content js-simplebar bg-white">
				<a class="sidebar-brand bg-white" href="index.html">
                    <span class="align-middle bg-white"></span>
                </a>
				<div 
				id="reloj">00 : 00 
				</div>
        <ul class="sidebar-nav bg-white">
            <li class="sidebar-item bg-white">
                <a class="sidebar-link mt-7 bg-white" href="administrador.php">
                    <span class="align-middle">Inicio</span>
                </a>
			</li>
			<li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Usuario		
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="usuario_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="usuario_contenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
			<li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Visitantes
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="visitantes_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="visitante_cotenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
			<li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Vehiculos	
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="vehiculos_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="vehiculo_contenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
            <li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Apartamentos
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="apartamento_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="apartamento_contenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
            <li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Residentes	
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="residentes_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="residentes_contenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
			<li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Parqueadero	
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="parqueaderos_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="parquedero_contenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
		</ul>
		</nav>
        <div class="main">
			<nav class="navbar navbar-expand bg-navbar">
				<a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <img src="../img/LOGO_ASSIPARK_BLANCO.png" width="200px" height="43px" alt="">
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>	
			</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="../img/miguel.jpeg.jpeg" class="avatar img-fluid rounded-circle me-1" alt="miguel" /> <span class="text-dark">Miguel Roldan</span>
                </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../html/index.html">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body container">
                    <div class="table-responsive row">
                        <table class=" table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tipo de Parquedero</th>
                                    <th>Tamaño</th>
                                    <th>Inhabilitar/habilitar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                    <input type="checkbox" class="form-check-input" value="" id="check1">
                                    <label for="check1" class="form-check-label"></label>
                                    </div>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </td>                   
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>

                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantess</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>Visitantes</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                                <tr>
                                    <td>residencial</td>
                                    <td>14.94m*6m</td>
                                    <td><div class="form-check form-check-inline form-switch">
                                        <input type="checkbox" class="form-check-input" value="" id="check1">
                                        <label for="check1" class="form-check-label"></label>
                                        </div></td>
                                    <td><button class="btn btn-primary " type="submit">actualizar</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>



            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="/" target="_blank"><strong>JuanJose</strong></a> - <a class="text-muted" href="" target="_blank"><strong></strong></a>								&copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
	</div>

	<script src="../js/app.js"></script>
<script>
	function actual() {
		fecha = new Date(); 
		hora = fecha.getHours(); 
		minuto = fecha.getMinutes(); 
		if (hora < 10) { 
			hora = "0" + hora;
		}
		if (minuto < 10) { 
			minuto = "0" + minuto;
		}
		
		mireloj = hora + " : " + minuto;
		return mireloj;
	}
	function actualizar() { 
		mihora = actual(); 
		mireloj = document.getElementById("reloj"); 
		mireloj.innerHTML = mihora; 
	}
	setInterval(actualizar, 1000);
</script>

</body>

</html>