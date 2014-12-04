@extends('layout.main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
			<h1 class="text-center title">Contactenos</h1>    
		
		</div>
		<div class="col s12">
			<form ng-submit="sendMail()" class="col s12 responseContainer">
						

				<div class="response brown darken-1" ng-show="responses === true">
					<div class="close-x">
						<span class="form-close close mdi-navigation-close" ng-click="responses = false"></span>
					</div>
					<h5 class="white-text text-center"><% responseMessage %></h5>
					<hr/>
					<div class="col s12">
						<div class="row">
							<div class="mContenido">
								<p class="white-text">El siguiente mensaje: </p>
								<ul class="collection">
									<li>Nombre: <strong><% todos.nombre %></strong></li>
									<li>Organización: <strong><% todos.organizacion %></strong></li>
									<li>E-Mail: <strong><% todos.email %></strong></li>
									<li>Asunto: <strong>"<% todos.asunto %>"</strong></li>
									<li>Cuerpo: <strong><em><% todos.body %></em></strong></li>
								</ul>
								
								<p class="white-text">Se a entregado exitosamente al destinatario</p>
							</div>
						</div>
					</div>

				</div>
			
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
					<button type="submit" class="btn btn-default">Enviar</button>				
				</div>
				<fieldset class="teal lighten-2">
					<p class="white-text">Los asteriscos(*) significan que el campo es obligatorio</p>
					<p class="white-text">Tambien puedes ponerte en contacto con nosotros escribiendo a <em>admin@webmasterhn.net</em> o llamando al <em>(504) 3258-7511</em>
				</fieldset>
			</form>	

		</div>

	</div>
</div>
@stop