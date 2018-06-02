@if(Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<button class="close" type="button" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<!-- Usuario creado exitosamente -->
		{{ Session::get('message')}}
	</div>	
@endif