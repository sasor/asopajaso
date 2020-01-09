<div class="form-group">
	
	<label for="name">Nombre</label>
	
	<input type="text" class="form-control" id="name" name="name" value={{ old('name', $user->name) }}>

</div>

<div class="form-group">
	
	<label for="lastname">Apellido</label>

	<input type="text" class="form-control" name="lastname" value={{ old('lastname', $user->lastname) }}>

</div>

<div class="form-group">
	
	<label for="email">Correo Electronico</label>

	<input type="email" class="form-control" id="email" name="email" value={{ old('email', $user->email) }}>

</div>

<div class="form-group">
	
	<label for="ci">Cedula de identidad</label>

	<input type="text" class="form-control" id="ci" name="ci" value={{ old('ci', $user->ci) }}>

</div>

<button class="btn btn-success">{{ 'Enviar' ?? $action }}</button>