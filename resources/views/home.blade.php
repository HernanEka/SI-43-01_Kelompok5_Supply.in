
@extends('template.layout')

@section('content')
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
			<div class="col-md-6 px-4">
				<a href="/produk/Buah" style="text-decoration:none;">
					<div class="row px-3 bg-kategori">
						<div class="col p-3">
							<p class="text-start fw-bold py-4 px-2" style="font-size:25px;">Fruit</p>
						</div>
						<div class="col p-3">
							<p class="text-end px-2">
								<img src="src/web-toolkit/fruit.png" class="img-fluid rounded-start">
							</p>	
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 px-4">
				<a href="/produk/Sayur" style="text-decoration:none;">
					<div class="row px-3 bg-kategori">
						<div class="col p-3">
							<p class="text-start fw-bold py-4 px-2" style="font-size:25px;">Vegetable</p>
						</div>
						<div class="col p-3">
							<p class="text-end px-2">
								<img src="src/web-toolkit/vegetable.png" class="img-fluid rounded-start">
							</p>	
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 px-4">
				<a href="/produk" style="text-decoration:none;">
					<div class="row px-3 bg-kategori">
						<div class="col p-3">
							<p class="text-start fw-bold py-4 px-2" style="font-size:25px;">New Item</p>
						</div>
						<div class="col p-3">
							<p class="text-end px-2">
								<img src="src/web-toolkit/new-item.png" class="img-fluid rounded-start">
							</p>	
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 px-4">
				<a href="/produk/Dairy Product" style="text-decoration:none;">
					<div class="row px-3 bg-kategori">
						<div class="col p-3">
							<p class="text-start fw-bold py-4 px-2" style="font-size:25px;">Dairy Product</p>
						</div>
						<div class="col p-3">
							<p class="text-end px-2">
								<img src="src/web-toolkit/dairy-product.png" class="img-fluid rounded-start">
							</p>	
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<section id="recomendation">
	<div class="container mt-5 pt-5">
		<p class="fw-bold">Recommendation</p>
	</div>
	<div class="container-fluid pb-5 mb-5">
		<div class="row-3 d-flex flex-lg-nowrap overflow-auto">
			@foreach($produk as $data)
			<div class="col-md-3 p-3 mx-3 bg-light round">
				<div class="card h-100 bg-light" style="border: none;">
					<div style="background-color: white; min-height: 300px;">
						<img src="{{ asset('storage/'. $data->gambar) }}" class="card-img-top rounded-start" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title text-center">{{ $data->nama_product }}</h5>
						<p class="card-subtitle text-center">Rp {{ number_format($data->harga) }}/{{ $data->unit }}</p>.
						<p class="card-text">{{Str::limit($data->deskripsi, 50)}}</p>
					</div>
					<div class="card-footer">
						<a href="/detail/{{$data->id}}" class="btn btn-primary w-100">Beli</a>
					</div>
				</div>
			</div>
			@endforeach
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
	<div class="container mt-5 pt-5">
		<h5 class="fw-bold">Promo</h5>
	</div>
	<div class="container-fluid">
		<div class="row d-flex flex-lg-nowrap overflow-auto">
			<div class="col-sm-4 mx-3">
				<div class="card bg-secondary" style="border: none;">
					<img src="src/web-toolkit/promo.png" class="card-img-top rounded-start" alt="...">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4 mx-3">
				<div class="card bg-secondary" style="border: none;">
					<img src="src/web-toolkit/promo.png" class="card-img-top rounded-start" alt="...">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4 mx-3">
				<div class="card bg-secondary" style="border: none;">
					<img src="src/web-toolkit/promo.png" class="card-img-top rounded-start" alt="...">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4 mx-3">
				<div class="card bg-secondary" style="border: none;">
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

@endsection