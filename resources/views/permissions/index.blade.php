@extends('app')

@section('styles')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Lista de Permisos</h3>
				</div>
				<div class="panel-body">
					<table id="data_table" class="table" cellspacing="0" width="100%">
						<thead>
							<tr>
						        <th>Slug</th>
						        <th>Nombre</th>
						        <th>Acciones</th>
						      </tr>
						</thead>
						<tbody>
							@foreach($permissions as $permission)
							<tr>
								<td>{{ $permission->slug }}</td>
								<td>{{ $permission->name }}</td>
								<td>
									<div class="btn-group">
										<a href="{{ url('admin/permissions/'. $permission->id . '/edit') }}" class="btn btn-default">
											<span class="fa fa-pencil"></span>
										</a>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>	
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
	<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
		    $('#data_table').DataTable();
		} );
	</script>

@endsection