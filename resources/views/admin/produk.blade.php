@extends('admin.layout_admin')

@section('content')
<div class="p-5">
	<div class="text-center pb-4">
		<h1 class="display-3">Data Produk</h1>
	</div>
	<a href="/admin/produk/create" class="btn btn-primary my-3">Tambah Product +</a>
	<table class="table">
		<thead class="table-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">ID Produk</th>
				<th scope="col">Nama Produk</th>
				<th scope="col">Harga</th>
				<th scope="col">Stock</th>
				<th scope="col">Info Tambahan</th>
				<th scope="col">Kategori</th>
				<th scope="col">Gambar</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($produk as $data)
			<tr>
				<td scope="col">{{ $i++ }}</td>
				<td>{{ $data->id }}</td>
				<td>{{ $data->nama_product }}</td>
				<td>Rp {{ number_format($data->harga) }}/{{ $data->unit }}</td>
				<td>{{ $data->stock }} {{ $data->unit }}</td>
				<td style="width: 250px;">{{Str::limit($data->deskripsi, 50)}}</td>
				<td>{{ $data->kategori }}</td>
				<td><img src="{{ asset('storage/' . $data->gambar) }}" width="50" class="thumbnail zoom"></td>
				<td>
					<a href="#" class="btn btn-warning">Edit</a>
					<a href="#" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection