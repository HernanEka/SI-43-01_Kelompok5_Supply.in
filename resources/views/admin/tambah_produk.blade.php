@extends('admin.layout_admin')

@section('content')
<div class="p-5">
	<div class="text-center pb-4">
		<h1 class="display-3">Tambah Data Produk</h1>
	</div>
	<form action="/admin/produk" method="POST" enctype="multipart/form-data" class="col-md-6">
		@csrf
		<div class="mb-3">
			<label for="nama" class="form-label">Nama Produk</label>
			<input type="text" name="nama_product" class="form-control" id="nama" placeholder="Nama Produk" required>
		</div>
		<div class="mb-3">
			<label for="harga" class="form-label">Harga Produk</label>
			<input type="number" name="harga" class="form-control" id="harga" placeholder="Harga Produk" required>
		</div>
		<div class="mb-3">
			<label for="stock" class="form-label">Stock Product</label>
			<input type="number" name="stock" class="form-control" id="stock" placeholder="Stock Product" required>
		</div>
		<div class="mb-3">
			<label for="unit" class="form-label">Unit Produk</label>
			<select name="unit" id="unit" class="form-select" required>
				<option selected disabled hidden>Pilih Satuan Unit Produk</option>
				<option>Kg</option>
				<option>Box</option>
				<option>Ikat</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="kategori" class="form-label">Kategori Produk</label>
			<select name="kategori" id="kategori" class="form-select" required>
				<option selected disabled hidden>Pilih Kategori Produk</option>
				<option>Buah</option>
				<option>Sayur</option>
				<option>Dairy Product</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="deskripsi" class="form-label">Info Tambahan</label>
			<textarea class="form-control" name="deskripsi" rows="3" placeholder="Info Tambahan Product"></textarea>
		</div>
		<div class="mb-3">
			<label for="gambar" class="form-label">Gambar Produk</label>
			<input type="file" name="gambar" class="form-control" id="gambar" placeholder="Gambar Produk" required>
		</div>
		<div class="text-end">
			<button type="submit" class="btn btn-primary">Tambah Produk + </button>
		</div>
	</form>
</div>

@endsection