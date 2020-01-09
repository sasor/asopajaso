@extends('master')

@section('content')

<div class="card">
	
	<div class="card-header">
		
		Crear usuario

	</div>
	
	<div class="card-body">
		
		<form action="{{ route('user.store') }}" method="POST">

			@csrf
			
			@include('form')

		</form>

	</div>

</div>

@endsection