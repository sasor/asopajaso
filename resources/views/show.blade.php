@extends('master')

@section('content')

<div class="card">
	
	<div class="card-header">
		
		<div class="card-title">
			
			Detalle de Usario

		</div>

		<div class="card-action">
			
			<a href="{{ back() }}" class="btn btn-outline-info">
				
				regresar

			</a>

		</div>

	</div>
	
	<div class="card-body">
		
		<p>{{ $user->name }}</p>

		<hr>

		<p>{{ $user->lastname }}</p>

		<hr>

		<p>{{ $user->ci }}</p>

	</div>

</div>

@endsection