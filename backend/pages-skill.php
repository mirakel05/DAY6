<?php
include '../koneksi.php';
?>

<?php 
session_start();

if(empty($_SESSION['login'])){
	header('Location: ../login/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>BackEnd Admin</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
					<span class="align-middle">AdminKit</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="index.php">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
							<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
							<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
						</a>
					</li> -->

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-about.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">About</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-facts.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">Facts</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-resume.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">Resume</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-home.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">Home</span>
						</a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="pages-skill.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">Skill</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-services.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">Services</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-contact.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">Contact</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-portfolio.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">Portfolio</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-detail.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">Detail</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-kontak.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">Kontak</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-foto_port.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">Foto</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-navbar.php">
							<i class="align-middle" data-feather="corner-down-right"></i> <span class="align-middle">Navbar</span>
						</a>
					</li>

				<!-- <div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div>
			</div> -->
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

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
							<img src="img/avatars/setting.jpg" class="avatar img-fluid rounded me-1" alt="Settings" /> <span class="text-dark">Settings</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<!-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div> -->
								<a class="dropdown-item" href="index.php"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../login/logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Skill Page</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col-12 col-lg-9 col-xxl-12 d-flex">
											<div class="card flex-fill">
												<div class="card-header">

													<h5 class="card-title mb-0">Latest Projects</h5>
												</div>
												<table class="table table-hover my-0">
													<thead>
													<tr>
															<th>No</th>
															<th class="d-none d-xl-table-cell">Keterangan</th>
															<th class="d-none d-xl-table-cell">Nama</th>
															<th class="d-none d-md-table-cell">Angka</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$sql = "SELECT * FROM skill";
														$data = $conn->query($sql);
														if ($data->num_rows > 0) :
															$x = 0;
															while($x <= 0) {
															$x++;
															}
															while ($row = $data->fetch_assoc()) :
														?>
																<tr>
																	<td><?=$x++?></td>
																	<td class="d-none d-xl-table-cell"><?= $row['KETERANGAN'] ?></td>
																	<td class="d-none d-xl-table-cell"><?= $row['NAMA'] ?></td>
																	<td class="d-none d-xl-table-cell"><?= $row['ANGKA'] ?>%</span></td>
																	<td>
																		<a href="form/skill/form_edit.php?id=<?= $row['ID'] ?>" class="btn btn-primary">Edit</a>
																		<a href="form/skill/hapus.php?id=<?= $row['ID'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
																	</td>
																</tr>
														<?php
															endwhile;
														endif;
														?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
					</div>
					<a href="./form/skill/form_tambah.php" class="btn btn-secondary">Tambah</a>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>