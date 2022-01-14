@extends('template.layout')

@section('content')

<section id="produk" class="min-vh-100">
	<div class="container">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb d-flex">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item"><a href="/produk">Produk</a></li>
				@if (Request::is('produk'))
				<li class="breadcrumb-item active" aria-current="page">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
						Kategori
					</a>

					<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="/produk/Buah">Fruit</a></li>
						<li><a class="dropdown-item" href="/produk/Sayur">Vegetable</a></li>
						<li><a class="dropdown-item" href="/produk/Dairy Product">Dairy Product</a></li>
					</ul>
				</li>
				@endif
				@if (Request::is('produk/Buah'))
				<li class="breadcrumb-item active" aria-current="page"><a href="/produk/Buah">Fruit</a></li>
				@endif
				@if (Request::is('produk/Sayur'))
				<li class="breadcrumb-item active" aria-current="page"><a href="/produk/Sayur">Vegetable</a></li>
				@endif
				@if (Request::is('produk/Dairy Product'))
				<li class="breadcrumb-item active" aria-current="page"><a href="/produk/Dairy Product">Dairy Product</a></li>
				@endif
			</ol>
		</nav>
		<div class="text-center py-">
			<h5 class="display-5">Our Product</h5>
		</div>
		<hr>
		<div class="row">
			@foreach($produk as $data)
			<div class="col-md-4 mb-5">
				<div class="card h-100">
					<div style="background-color: white; min-height: 350px;">
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
		<hr>
	</div>
</section>

@endsection