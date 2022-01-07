@extends('template.layout')

@section('header')

<section id="Login" class="vh-100">

	@endsection

	@section('content')


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
								<form action="/" method="get">
									<div class="modal-body">
										<div class="mb-2">
											<input type="text" name="" class="form-control" placeholder="Email">
										</div>
										<div class="mb-2">
											<input type="password" name="" class="form-control" placeholder="Password">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="sumbit" class="btn btn-primary">Understood</button>
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
								<form action="/" method="get">
									<div class="modal-body">
										<div class="row mb-2 text-start">
											<label class="form-label">Fullname</label>
											<div class="col-md-6">
												<input type="text" name="" class="form-control" placeholder="Firstname">
											</div>
											<div class="col-md-6">
												<input type="text" name="" class="form-control" placeholder="Lastname">
											</div>
										</div>
										<div class="row mb-2 text-start">
											<label class="form-label">Phone Number</label>
											<div class="col-md-2">
												<input type="text" name="" class="form-control" placeholder="+62">
											</div>
											<div class="col-md-10">
												<input type="text" name="" class="form-control" placeholder="8976543210">
											</div>
										</div>
										<div class="mb-2 text-start">
											<label class="form-label">Email</label>
											<input type="email" name="" class="form-control" placeholder="customer@supply.com">
										</div>
										<div class="mb-2 text-start">
											<label class="form-label">Password</label>
											<input type="password" name="" class="form-control" placeholder="Minimal 8 Character">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="sumbit" class="btn btn-primary">Understood</button>
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
