@extends('master')

@section('content')

<div class="card">
	
	<div class="card-header">
		
		<div class="card-title">
			
			Editar Usuario

		</div>

	</div>
	
	<div class="card-body">

		<form action="{{ route('user.update', $user->id) }}">
			
			@csrf
			@method('PUT')

			@include('form')

		</form>		

	</div>

</div>

@endsection