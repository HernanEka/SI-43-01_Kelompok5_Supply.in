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

		</tbody>
	</table>
</div>

@endsection