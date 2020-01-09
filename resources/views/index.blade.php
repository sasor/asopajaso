@extends('master')

@section('content')

<div class="card">
	
	<div class="card-header">
		
		<div class="card-title">
			
			Lista de usuarios

		</div>

		<div class="card-action">
			
			<a href="{{ route('user.create') }}" class="btn btn-outline-primary">nuevo</a>

		</div>

	</div>

	<div class="card-body table-responsive">
		
		<table class="table">
			
			<thead>
				
				<tr>
					
					<th>#</th>
					
					<th>Nombre</th>
					
					<th>Apellidos</th>
					
					<th>Cedula Identidad</th>

					<th>&nbsp;</th>
				
				</tr>

			</thead>
			
			<tbody>
				
				@foreach($users as $user)

					<tr>
						
						<td>{{ $loop->index }}</td>
						
						<td>{{ $user->name }}</td>
						
						<td>{{ $user->lastname }}</td>
						
						<td>{{ $user->ci }}</td>

						<td>
							
							<div class="btn-group">
								
								<a href="{{ route('user.show', $user->id) }}" class="btn btn-link">ver</a>

								<a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">editar</a>

								<form action="#">

									<button type="submit" class="btn btn-danger">eliminar</button>

								</form>

							</div>

						</td>

					</tr>

				@endforeach

			</tbody>
		

			<tfooter>
				
				<tr>
					
					<th>#</th>
					
					<th>Nombre</th>
					
					<th>Apellidos</th>
					
					<th>Cedula Identidad</th>
				
					<th>&nbsp;</th>
				
				</tr>

			</tfooter>
			
		</table>

	</div>

</div>

@endsection