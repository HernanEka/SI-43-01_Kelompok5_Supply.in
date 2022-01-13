<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!-- Link for icon -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<style type="text/css">
			
			#Login{

				background: url('src/web-toolkit/bg-login.png');
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: 100% 100%;

			}

			p.text-justify{

				text-align: justify;

			}
			div.text-centered{
				padding-top: 200px;
			}

			.round{
				border-radius: 15px;
			}
			p.header-text{
				font-size: 22px;
			}

			a div.bg-kategori{
				background-color: #ddd;
				border-radius: 20px;
				color: #111;
			}

			a div.bg-kategori:hover{
				background-color: #ccc;
				border-radius: 20px;
				color: #111;
				transition-duration: 0.7s;
			}

			
			.search{
				border-radius: 10px;
				border: none;
			}

		</style>

		<title>Supply.in</title>
	</head>
	<body>
		@yield('header')
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="/"><img src="src/web-toolkit/logo.png" width="50" class="mx-3">Supply.in</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mx-3 mb-lg-0" style="font-size: 20px;">
						<li class="nav-item">
							<form class="d-flex p-1 bg-light search">
								<input class="form-control search bg-light" type="search" placeholder="Search" aria-label="Search">
								<button class="btn" type="submit"><i class="fas fa-search"></i></button>
							</form>
						<li class="nav-item">
							<a href="#" class="nav-link"><i class="fas fa-map-marker-alt"></i></a>
						@auth
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"><i class="far fa-heart"></i></a>
						</li>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link btn btn-primary text-light" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="far fa-user"></i>
									@if(session()->has('id'))
									
									Hallo, {{ session('nama') }} 

									@endif
								</a>
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
									<li><a class="dropdown-item" href="/logout">Logout</a></li>
								</ul>
							</div>
						</li>
						@else
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="far fa-user"></i>
								</a>

								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
									<li><a class="dropdown-item" href="/login">Login</a></li>
								</ul>
							</div>
						</li>
						@endauth
					</ul>
				</div>
			</div>
		</nav>


		@yield('content')

		<section id="footer">
			<div class="container my-5">
				<div class="row">
					<div class="col-md-5">
						<h5>Contact Us</h5>
						<p class="ms-3 text-justify"><b>Kantor Supply.in</b> <br>Bandung Techno Park, Lt 3<br> Jl. Telekomunikasi, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257 Senin - Sabtu 08.00 - 16.30</p>
						<p class="text-justify"><b>Email</b><br>contact.us@supplyin.com</p>
						<p><b>Follow Our Social Media</b><br>
							<i class="fab fa-instagram"></i>
							<i class="fab fa-youtube"></i>
							<i class="fab fa-twitter"></i>
						</p>
					</div>
					<div class="col-md-4 me-4">
						<h5>Metode Pembayaran</h5>
						<p class="ms-3 fw-bold"><img src="src/web-toolkit/bank.png"></p>
					</div>
					<div class="col-md-2">
						<img src="src/web-toolkit/orang.png" width="200">
					</div>
				</div>
			</div>

			<footer class="bg-light py-3">
				<div class="text-center">
					© Copyright 2021 Supply.in semua hak cipta terlindungi
				</div>
			</footer>
		</section>
	</body>
	</html>