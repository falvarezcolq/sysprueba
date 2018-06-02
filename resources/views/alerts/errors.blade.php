@if(Session::has('message-error'))
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button class="close" type="button" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<!-- Usuario creado exitosamente -->
		{{ Session::get('message-error') }}
	</div>	
@endif