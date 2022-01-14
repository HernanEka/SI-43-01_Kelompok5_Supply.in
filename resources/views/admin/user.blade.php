@extends('admin.layout_admin')

@section('content')
<div class="p-5">
	<div class="text-center pb-4">
		<h1 class="display-3">Data User</h1>
	</div>
	<table class="table">
		<thead class="table-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">ID User</th>
				<th scope="col">Nama User</th>
				<th scope="col">Email</th>
				<th scope="col">No Handphone</th>
				<th scope="col">Alamat</th>
				<th scope="col">Level</th>
			</tr>
		</thead>
		<tbody>
			@foreach($user as $data)
			<tr>
				<td scope="col">{{ $i++ }}</td>
				<td>{{ $data->id }}</td>
				<td>{{ $data->nama_user }}</td>
				<td>{{ $data->email }}</td>
				<td>{{ $data->phone }}</td>
				<td>{{ $data->address }}</td>
				<td>
					@if($data->level == 2)
					Admin
					@else
					User
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection