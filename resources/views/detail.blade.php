@extends('template.layout')

@section('content')

<section id="detail">
	<div class="container py-5 my-5">
		<div class="row">
			<div class="col-md-6">
				<img src="{{ asset('storage/'. $produk->gambar) }}" class="img-fluid">
			</div>

			<div class="col-md-6">
				<form action="/produk" method="POST">
					@csrf
					<p class="tittle">Summerville</p>
					<h2 class="fw-bold">{{ $produk->nama_product }}</h2>
					<table class="table round">
						<thead class="table-dark">
							<tr>
								<th scope="col">Kemasan</th>
								<th scope="col">Unit</th>
								<th scope="col">Harga</th>
								<th scope="col">Stock</th>
								<th scope="col">Jumlah Belanja</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>{{ $produk->unit }}</td>
								<td>Rp {{ number_format($produk->harga) }}</td>
								<td>{{$produk->stock}}</td>
								<td>
									<input type="number" name="jumlah" class="form-control">
									<input type="number" name="id" class="form-control" value="{{$produk->id}}" hidden>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="text-center">
						<button type="submit" class="btn btn-primary px-5">Beli</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-md-6">
				<h5 class="mb-2">Review Product</h5>
				<div class="bg-light round ms-3 mb-3 p-4">
					<p><i class="far fa-heart"></i><i class="far fa-heart"></i><i class="far fa-heart"></i><i class="far fa-heart"></i><i class="far fa-heart"></i></p>
					<p class="text-justify">
						Pengiriman buah dan sayur cepat, selalu on time. Pesanan sampai sesuai dengan rincian dan buah sayur tetap fresh terjaga di dalam box. 
					</p>
				</div>
				<div class="bg-light round ms-3 mb-3 p-4">
					<p><i class="far fa-heart"></i><i class="far fa-heart"></i><i class="far fa-heart"></i><i class="far fa-heart"></i><i class="far fa-heart"></i></p>
					<p class="text-justify">
						Pengiriman buah dan sayur cepat, selalu on time. Pesanan sampai sesuai dengan rincian dan buah sayur tetap fresh terjaga di dalam box. 
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<h5 class="mb-2">Info Tambahan</h5>
				{{ $produk->deskripsi }}
			</div>
		</div>
	</div>
</section>

@endsection