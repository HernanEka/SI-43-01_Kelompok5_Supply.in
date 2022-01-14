@extends('admin.layout_admin')

@section('content')
<div class="p-5">
	<div class="text-center pb-4">
		<h1 class="display-3">Data Pesanan</h1>
	</div>
	<table class="table">
		<thead class="table-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">ID Pesanan</th>
				<th scope="col">ID Produk</th>
				<th scope="col">ID User</th>
				<th scope="col">Jumlah</th>
				<th scope="col">Total Bayar</th>
				<th scope="col">Bukti Bayar</th>
				<th scope="col">Status</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($order as $data)
			<tr>
				<td scope="col">{{$i}}</td>
				<td>{{ $data->id }}</td>
				<td>{{ $data->product_id }}</td>
				<td>{{ $data->user_id }}</td>
				<td>{{ $data->jumlah }}</td>
				<td>{{ $data->total }}</td>
				<td>
					@if($data->bukti_bayar == 'None')
					Belum Ada
					@else
					<img src="{{ asset('storage/' .$data->bukti_bayar) }}" width="30" class="thumbnail zoom">
					@endif
				</td>
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
					Pesanan Di
					@endif
				</td>
				<td>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$i}}">
						Ubah Status
					</button>

					<!-- Modal -->
					<div class="modal fade" id="staticBackdrop{{$i++}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">Ubah Status</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form action="/admin/pesanan/{{$data->id}}" method="POST" enctype="multipart/form-data">
									@method('put')
									@csrf
									<div class="modal-body">
										<select name="status" class="form-select">
											<option value="1"
											@if($data->status == 1)
											selected
											@endif
											>Belum Dibayar</option>
											<option value="2"
											@if($data->status == 2)
											selected
											@endif
											>Pembayaran Dipending</option>
											<option value="3"
											@if($data->status == 3)
											selected
											@endif
											>Pesanan Dikemas</option>
											<option value="4" @if($data->status == 4)
											selected
											@endif>Pesanan Terkirim</option>
										</select>
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

@endsection