@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Data User
			  	<div class="card-title pull-right"><a class="btn btn-primary" href="{{ route('DenganSenangHati.create') }}">Tambah</a>
			  		<a class="btn btn-primary" href="bonus">Bonus Ke-1</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<div class="table-responsive">
				  <table class="table table-bordered">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>Email</th>
					  <th>Created</th>
					  <th colspan="2"><center>Action</center></th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($s as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->name }}</td>
				    	<td>{{ $data->email }}</td>
				    	<td>{{ $data->created_at }}</td>
						<td><center>
							<a class="btn btn-warning" href="{{ route('DenganSenangHati.edit',$data->id) }}">Edit</a></center>
						</td>
						<td>
							<form method="post" action="{{ route('DenganSenangHati.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">
								<center>
								<button type="submit" class="btn btn-danger" class="btn btn-primary" onclick="return confirm('Are you sure to delete?')">Delete</button></center>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection