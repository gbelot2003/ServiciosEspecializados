@extends('layout.main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
			<h1 class="text-center title">Contactenos</h1>    
		
		</div>
		<div class="col s12">
			<form ng-submit="sendMail()" class="col s12">

				<div class="onput-field col m6 s12">
					<input type="text" id="nombre" placeholder="Nombre *" required ng-model="mailNombre">
					<label for="nombre"></label>
				</div>
			
				<div class="onput-field col m6 s12">
					<input type="text" id="organizacion" placeholder="Organizacion" ng-model="mailOrganizacion">
					<label for="organizacion"></label>
				</div>

				<div class="input-field col s12">
          			<input id="email" type="email" placeholder="Email *" required ng-model="mailEmail">
          			<label for="email"></label>
        		</div>

				<div class="input-field col s12">
          			<input id="asunto" type="text" placeholder="Asunto *" required ng-model="mailAsunto">
          			<label for="asunto"></label>
        		</div>

		        <div class="input-field col s12">
			        <textarea id="body" placeholder="Mensaje *" ng-model="mailBody"></textarea>                
				</div>
				<div class="input-field col s12">
					{{  Form::token() }}	
					<button type="submit" class="btn btn-default">Enviar</button>				
				</div>
			</form>	

			<fieldset class="teal lighten-2">
				<p class="white-text">Los asteriscos(*) significan que el campo es obligatorio</p>
				<p class="white-text">Tambien puedes ponerte en contacto con nosotros escribiendo a <em>admin@webmasterhn.net</em> o llamando al <em>(504) 3258-7511</em>
			</fieldset>

		</div>

	</div>
</div>
@stop