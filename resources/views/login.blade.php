@extends('template.layout')

@section('header')

<section id="Login" class="vh-100">

	@endsection

	@section('content')

	@error('password')
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		{{ $message }}
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	@enderror

	@if(session()->has('gagal'))
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		{{ session('gagal') }}
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	@endif

	@if(session()->has('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{ session('success') }}
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	@endif

	<div class="container">
		<div class="row">
			<div class="col-md-7">&nbsp;</div>
			<div class="col-md-5">
				<div class="text-end py-5 my-4">
					<p><h1 class="display-3 fw-bold mb-5" style="color: white;">Supply.in</h1></p>
					<p class="header-text mb-4">Best vegetables and fruits supplier<br>Scheduled order with wholesale quantity<br>Entrust your stock needs to us <br>Ontime delivery with best quality guarantee</p>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-danger py-2 px-5 me-4 shadow-lg" data-bs-toggle="modal" data-bs-target="#staticBackdroplogin">
						Sing In
					</button>
					<button type="button" class="btn btn-success py-2 px-5 ms-4 shadow-lg" data-bs-toggle="modal" data-bs-target="#staticBackdropsignup">
						Sing Up
					</button>



					<!-- Modal -->
					<div class="modal fade" id="staticBackdroplogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">Login</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form action="/login" method="post">
									@csrf
									<div class="modal-body">
										<div class="mb-2">
											<input type="email" name="email" class="form-control" placeholder="Email" required>
										</div>
										<div class="mb-2">
											<input type="password" name="password" class="form-control" placeholder="Password" required>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="sumbit" class="btn btn-primary">Login</button>
									</div>
								</form>
							</div>
						</div>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="staticBackdropsignup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">Sign Up</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form action="/register" method="post">
									@csrf
									<div class="modal-body">
										<div class="mb-2 text-start">
											<label class="form-label">Fullname</label>
											<input type="text" name="nama_user" class="form-control" placeholder="Firstname" required>
										</div>
										<div class="mb-2 text-start">
											<label class="form-label">Phone Number</label>
											<input type="number" name="phone" class="form-control" placeholder="081234567891"required>
										</div>
										<div class="mb-2 text-start">
											<label class="form-label">Alamat</label>
											<textarea class="form-control" name="address" rows="3" placeholder="Jl. A.Djaelani ..." required></textarea>
										</div>
										<div class="mb-2 text-start">
											<label class="form-label">Email</label>
											<input type="email" name="email" class="form-control" placeholder="customer@supply.com" required>
										</div>
										<div class="mb-2 text-start">
											<label class="form-label">Password</label>
											<input type="password" name="password" class="form-control" placeholder="Minimal 8 Character" required>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="sumbit" class="btn btn-primary">Sing Up</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</section>
@endsection
