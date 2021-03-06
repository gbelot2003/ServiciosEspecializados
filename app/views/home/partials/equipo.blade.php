	<div>
		<div class="row">

			<div class="col l6  s12">
				<div class="panel purple lighten-5">
					<h3 class="text-center">Equipo<i class="mdi-action-account-circle"></i></h3>
					<p class="text-center">Socios con los que contamos para el desarrollo ne nuestras App</p>
					<div class="collection">
					@foreach($detalles as $detalle)
						<a href ng-click="testClick({{$detalle->id}})" class="collection-item" ng-morph-overlay="settings"><img class="colection-image rfoto" src="{{ $detalle->imagen }}" alt="">{{ $detalle->name }}<i class="secondary-content mdi-content-send"></i></a>
					@endforeach
 					</div>
				</div>
			</div>


			<div class="col l6 s12">
				<div class="panel purple lighten-5">
					<h3 class="text-center">Tecnologías <i class="mdi-action-android"></i></h3>
					<p class="text-center">Algunas tecnologías que usamos</p>
					<div class="collection">
					    <a href="#/tecnologias/drupal" class="collection-item modal-trigger"> <img class="colection-image" src="../img/logos/drupal-logo.png" alt=""> Drupal<i class="secondary-content mdi-content-send"></i></a>
					    <a href="#" class="collection-item"> <img class="colection-image" src="../img/logos/laravel-logo.png" alt=""> Laravel<i class="secondary-content mdi-content-send"></i></a>
					    <a href="#" class="collection-item"> <img class="colection-image" src="../img/logos/angulajs-logo.png" alt=""> Angular-js<i class="secondary-content mdi-content-send"></i></a>
					    <a href="#" class="collection-item"> <img class="colection-image" src="../img/logos/nodejs-logo.png" alt=""> Node-JS<i class="secondary-content mdi-content-send"></i></a>
					    <a href="#" class="collection-item"> <img class="colection-image" src="../img/logos/html5-logo.png" alt=""> HTML5 & CSS3<i class="secondary-content mdi-content-send"></i></a>
 					</div>
				</div>
			</div>
			

		</div>
	</div>