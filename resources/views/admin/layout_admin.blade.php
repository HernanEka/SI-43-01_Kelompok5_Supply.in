<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<style type="text/css">
			a.nav-link{
				color: white;
				font-size: 16px;
			}
			a.nav-link:hover{
				color: #aaa;
				transition-duration: 0.7s;
			}
			zoom {      
				-webkit-transition: all 0.35s ease-in-out;    
				-moz-transition: all 0.35s ease-in-out;    
				transition: all 0.35s ease-in-out;     
				cursor: -webkit-zoom-in;      
				cursor: -moz-zoom-in;      
				cursor: zoom-in;  
			}     

			.zoom:hover,  
			.zoom:active,   
			.zoom:focus {
				-ms-transform: scale(5);    
				-moz-transform: scale(5);  
				-webkit-transform: scale(5);  
				-o-transform: scale(5);  
				transform: scale(5);    
				position:relative;      
				z-index:100;  
				transition-duration: 0.5s;
			}

			@media only screen and (max-width: 768px) {   
				ul.gallery {      
					margin-left: 15vw;       
					margin-right: 15vw;
				}

				.DivName {cursor: pointer}
			}
		</style>

		<title>Admin Supply.in</title>
	</head>
	<body>
		<div class="d-flex">
			<div class="col-md-2 min-vh-100 bg-dark text-light">
				<div class="text-center py-4">
					<h5 class="display-5">Admin</h5>
					<a href="/logout" class="btn btn-danger">Log Out</a>
				</div>
				<div class="mx-5">
					<ul class="navbar-nav">
						<li class="nav-item"><a href="/admin" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns-gap me-3" viewBox="0 0 16 16">
							<path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
						</svg><label>Data Pesanan</label></a></li>
						<li class="nav-item"><a href="/admin/produk" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns-gap me-3" viewBox="0 0 16 16">
							<path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
						</svg><label>Data Produk</label></a></li>
						<li class="nav-item"><a href="/admin/user" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns-gap me-3" viewBox="0 0 16 16">
							<path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
						</svg><label>Data User</label></a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-10">
				@yield('content')
			</div>
		</div>
	</body>
	</html>