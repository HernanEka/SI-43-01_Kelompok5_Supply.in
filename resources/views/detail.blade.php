@extends('template.layout')

@section('content')

<section id="detail">
	<div class="container py-5 my-5">
		<div class="row">
			<div class="col-md-6">
				<img src="src/web-toolkit/filler.png" class="img-fluid">
			</div>
			<div class="col-md-6">
				<p class="tittle">Summerville</p>
				<h2 class="fw-bold">Bayam Merah</h2>
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
							<td>Kg</td>
							<td>RP. 50.000</td>
							<td>150</td>
							<td><input type="number" name="" class="form-control"></td>
						</tr>
					</tbody>
				</table>
				<div class="text-center">
					<a href="#" class="btn btn-secondary">Beli</a>
				</div>
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
				<ul>
					<li>1 ikat bayam merah berisi 15 batang (230-250 gram)</li>
					<li>Penyimpanan di kulkas tahan 5-6 hari<br>
					Penyimpanan di suhu ruangan tahan 3-4 hari</li>
					<li>Manfaat bayam merah :
						<ul>
							<li>Meningkatkan kadar hemoglobin</li>
							<li>Menjaga kadar gula darah</li>
							<li>Tinggi antioksidan</li>
							<li>Meningkatkan daya tahan tubuh</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

@endsection