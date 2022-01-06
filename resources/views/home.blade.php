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
			
			nav.navbar{
				background-color: white;
			}

			p.text-justify{

				text-align: justify;

			}
			div.text-centered{
				padding-top: 200px;
			}

			div.round{
				border-radius: 15px;
			}

		</style>

		<title>Supply.in</title>
	</head>
	<body>
		<nav class="navbar sticky-top navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="src/web-toolkit/logo.png" width="50" class="mx-3">Supply.in</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mx-3 mb-lg-0" style="font-size: 20px;">
						<li class="nav-item">
							<a href="#" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"><i class="fas fa-search"></i></a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"><i class="fas fa-map-marker-alt"></i></a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"><i class="far fa-heart"></i></a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"><i class="far fa-user"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<section id="header" class="vh-100">		
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="text-centered">
							<p class="text-justify">Kebutuhanmu perlu diisi ulang? Kami bisa mengirimkannya ke kamu! Supply.in, layanan yang disediakan akan memilihkan produk yang kamu butuhkan, mulai dari grocery hingga pembelian dengan nominal sesuai dengan kebutuhanmu.
							Serahkan kebutuhan dapurmu ke kami seperti lainnya yang sudah mempercayakannya ke kami</p>
						</div>
					</div>
					<div class="col-md-6">
						<img src="src/web-toolkit/header.png" class="img-fluid rounded-start">
					</div>
				</div>
			</div>
		</section>


		<section id="pilihan">
			<div class="container my-5">
				<div class="row mb-3">
					<div class="col-md-6">
						<div class="p-3 bg-light round">
							<div class="row">
								<div class="col p-4">
									<p class="text-start fw-bold" style="font-size:25px;">Fruit</p>
								</div>
								<div class="col pe-4">
									<p class="text-end">
										<img src="src/web-toolkit/fruit.png" class="img-fluid rounded-start">
									</p>	
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="p-3 bg-light round">
							<div class="row">
								<div class="col p-4">
									<p class="text-start fw-bold" style="font-size:25px;">Vegetable</p>
								</div>
								<div class="col pe-4">
									<p class="text-end">
										<img src="src/web-toolkit/vegetable.png" class="img-fluid rounded-start">
									</p>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="p-3 bg-light round">
							<div class="row">
								<div class="col p-4">
									<p class="text-start fw-bold" style="font-size:25px;">New Item</p>
								</div>
								<div class="col pe-4">
									<p class="text-end">
										<img src="src/web-toolkit/new-item.png" class="img-fluid rounded-start">
									</p>	
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="p-3 bg-light round">
							<div class="row">
								<div class="col p-4">
									<p class="text-start fw-bold" style="font-size:25px;">Dairy Products</p>
								</div>
								<div class="col pe-4">
									<p class="text-end">
										<img src="src/web-toolkit/dairy-product.png" class="img-fluid rounded-start">
									</p>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="recomendation">
			<div class="container my-5 py-5">
				<p class="fw-bold">Recommendation</p>
				<div class="horizontal-scrollable">
					<div class="row-3 d-flex flex-lg-nowrap overflow-auto">
						<div class="col-sm-3 p-3 mx-3 bg-light round">
							<div class="card bg-light" style="border: none;">
								<img src="src/web-toolkit/filler.png" class="card-img-top rounded-start" alt="...">
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 p-3 mx-3 bg-light round">
							<div class="card bg-light" style="border: none;">
								<img src="src/web-toolkit/filler.png" class="card-img-top rounded-start" alt="...">
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 p-3 mx-3 bg-light round">
							<div class="card bg-light" style="border: none;">
								<img src="src/web-toolkit/filler.png" class="card-img-top rounded-start" alt="...">
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 p-3 mx-3 bg-light round">
							<div class="card bg-light" style="border: none;">
								<img src="src/web-toolkit/filler.png" class="card-img-top rounded-start" alt="...">
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="banner" class="my-5 py-5">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="src/web-toolkit/banner.png" class="d-block w-100" alt="src/web-toolkit/banner.png">
					</div>
					<div class="carousel-item">
						<img src="src/web-toolkit/banner.png" class="d-block w-100" alt="src/web-toolkit/banner.png">
					</div>
					<div class="carousel-item">
						<img src="src/web-toolkit/banner.png" class="d-block w-100" alt="src/web-toolkit/banner.png">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>
		<section id="Promo">
			<div class="container my-5 py-5">
				<p class="fw-bold">Promo</p>
				<div class="horizontal-scrollable">
					<div class="row-3 d-flex flex-lg-nowrap overflow-auto">
						<div class="col-sm-4 mx-3 bg-light round">
							<div class="card bg-light" style="border: none;">
								<img src="src/web-toolkit/promo.png" class="card-img-top rounded-start" alt="...">
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 mx-3 bg-light round">
							<div class="card bg-light" style="border: none;">
								<img src="src/web-toolkit/promo.png" class="card-img-top rounded-start" alt="...">
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 mx-3 bg-light round">
							<div class="card bg-light" style="border: none;">
								<img src="src/web-toolkit/promo.png" class="card-img-top rounded-start" alt="...">
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 mx-3 bg-light round">
							<div class="card bg-light" style="border: none;">
								<img src="src/web-toolkit/promo.png" class="card-img-top rounded-start" alt="...">
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="About" class="bg-light">
			<div class="container pt-5 my-5">
				<div class="row">
					<div class="col-md-5">
						<img src="src/web-toolkit/about.png" class="img-fluid rounded-start py-5 my-5">
					</div>
					<div class="col-md-7">
						<p class="display-5"><b class="fw-bold">Why</b> Supply.in <b class="fw-bold">?</b></p>
						<div class="py-5">
							<div class="py-3 px-4 mb-4 display-6 round" style="background-color: #eee;">
								<i class="far fa-check-circle me-3"></i> Pemesanan Terjadwal
							</div>
							<div class="py-3 px-4 mb-4 display-6 round" style="background-color: #eee;">
								<i class="far fa-check-circle me-3"></i> On-time Delivery
							</div>
							<div class="py-3 px-4 mb-4 display-6 round" style="background-color: #eee;">
								<i class="far fa-check-circle me-3"></i> Grocery Stock Update
							</div>
							<div class="py-3 px-4 mb-4 display-6 round" style="background-color: #eee;">
								<i class="far fa-check-circle me-3"></i> Realtime Transaction
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h5>Contact Us</h5>
						<p class="ms-3 text-justify"><b>Kantor Supply.in</b> <br>Bandung Techno Park, Lt 3<br> Jl. Telekomunikasi, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257 Senin - Sabtu 08.00 - 16.30</p>
						<p class="text-justify"><b>Email</b><br>contact.us@supplyin.com</p>
						<p><b>Follow Our Social Media</b><br>
							<i class="fab fa-instagram"></i>
							<i class="fab fa-youtube"></i>
							<i class="fab fa-twitter-square"></i>
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