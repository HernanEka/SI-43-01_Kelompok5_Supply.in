@extends('template.layout')

@section('content')

<section id="cart" class="min-vh-100">
	<div class="container py-5">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb d-flex">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item"><a href="/produk">Produk</a></li>
				<li class="breadcrumb-item"><a href="/cart">Cart</a></li>
			</ol>
		</nav>
		<div class="text-center mb-5">
			<h5 class="display-5">My Order</h5>
		</div>

		<table class="table">
			<thead class="table-dark">
				<tr>
					<th scope="col">No</th>
					<th scope="col">ID Pesanan</th>
					<th scope="col">Nama Product</th>
					<th scope="col">Nama Pembeli</th>
					<th scope="col">Jumlah Pembeli</th>
					<th scope="col">Total Bayar</th>
					<th scope="col">Status</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($order as $data)
				<tr>
					<td scope="col">{{$i}}</td>
					<td>{{$data->id}}</td>
					<td>{{$data->product->nama_product}}</td>
					<td>{{ session('nama') }}</td>
					<td>{{$data->jumlah}}</td>
					<td>Rp {{number_format($data->total)}}</td>
					<td>
						@if($data->status == 1)
						Belum Dibayar
						@endif
						@if($data->status == 2)
						Pembayaran Dipending
						@endif
						@if($data->status == 3)
						Pesanan Dikemas
						@endif
						@if($data->status == 4)
						Pesanan Dikirim
						@endif
					</td>
					<td>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$i}}">
							Bayar
						</button>

						<!-- Modal -->
						<div class="modal fade" id="staticBackdrop{{$i++}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Bukti Bayar</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<form action="/bayar/{{ $data->id }}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="modal-body">
											<input type="file" name="bukti" class="form-control">
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Bayar</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</section>

@endsection