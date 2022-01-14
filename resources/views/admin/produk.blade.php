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
				<td scope="col">{{ $i}}</td>
				<td>{{ $data->id }}</td>
				<td>{{ $data->nama_product }}</td>
				<td>Rp {{ number_format($data->harga) }}/{{ $data->unit }}</td>
				<td>{{ $data->stock }} {{ $data->unit }}</td>
				<td style="width: 250px;">{{Str::limit($data->deskripsi, 50)}}</td>
				<td>{{ $data->kategori }}</td>
				<td><img src="{{ asset('storage/' . $data->gambar) }}" width="50" class="thumbnail zoom"></td>
				<td class="d-flex">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$i}}">
						Edit
					</button>

					<!-- Modal -->
					<div class="modal fade" id="staticBackdrop{{$i++}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">Ubah Status</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form action="/admin/produk/{{$data->id}}" method="POST" enctype="multipart/form-data">
									@method('put')
									@csrf
									<div class="modal-body">
										<div class="mb-3">
											<label for="nama" class="form-label">Nama Produk</label>
											<input type="text" name="nama_product" class="form-control" id="nama" placeholder="Nama Produk" value="{{ $data->nama_product }}" required>
										</div>
										<div class="mb-3">
											<label for="harga" class="form-label">Harga Produk</label>
											<input type="number" name="harga" class="form-control" id="harga" placeholder="Harga Produk" value="{{ $data->harga }}" required>
										</div>
										<div class="mb-3">
											<label for="stock" class="form-label">Stock Product</label>
											<input type="number" name="stock" class="form-control" id="stock" placeholder="Stock Product" value="{{ $data->stock }}" required>
										</div>
										<div class="mb-3">
											<label for="unit" class="form-label">Unit Produk</label>
											<select name="unit" id="unit" class="form-select" required>
												<option selected disabled hidden>Pilih Satuan Unit Produk</option>
												<option @if($data->unit == 'Kg')
													selected
													@endif>Kg</option>
												<option @if($data->unit == 'Box')
													selected
													@endif>Box</option>
												<option @if($data->unit == 'Ikat')
													selected
													@endif>Ikat</option>
											</select>
										</div>
										<div class="mb-3">
											<label for="kategori" class="form-label">Kategori Produk</label>
											<select name="kategori" id="kategori" class="form-select" required>
												<option selected disabled hidden>Pilih Kategori Produk</option>
												<option @if($data->kategori == 'Buah')
													selected
													@endif>Buah</option>
												<option @if($data->kategori == 'Sayur')
													selected
													@endif>Sayur</option>
												<option @if($data->kategori == 'Dairy Product')
													selected
													@endif>Dairy Product</option>
											</select>
										</div>
										<div class="mb-3">
											<label for="deskripsi" class="form-label">Info Tambahan</label>
											<textarea class="form-control" name="deskripsi" rows="3" placeholder="Info Tambahan Product">{{ $data->deskripsi }}</textarea>
										</div>
										<div class="mb-3">
											<label for="gambar" class="form-label">Gambar Produk</label>
											<input type="file" name="gambar" class="form-control" id="gambar" placeholder="Gambar Produk" required>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-warning">Edit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<form action="/admin/produk/{{ $data->id }}" method="post">
						@method('delete')
						@csrf
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection