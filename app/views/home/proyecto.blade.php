@extends('layout.main')

@section('content')
<div class="tab-wrapper" data-my-navscroll  ng-class="{fixed:boolChangeClass}">
	<div class="row white z-depth-1">
		<div class="container">
			<div class="col s12">
				<ul du-spy-context class="tabs">
					<li du-scrollspy="anchor" class="tab col l6 s6"><a href="#mision" du-smooth-scroll>Misión & Visión</a></li>
					<li du-scrollspy="anchor" class="tab col l6 s6"><a href="#equipo" du-smooth-scroll>Equipo y tecnoloías</a></li>
					<li du-scrollspy?"anchor" class="tab col l4 s12" ng-show="boolChangeClass === true"><a href="#top" du-smooth-scroll>Top</a></li>				
				</ul>
			</div>
		</div>
	</div>
</div>

<h2 class="text-center title">Proyecto</h2>
<div id="banner1">
	<div id="banner-warp">
		<div class="row">
			<div class="content">
				<div class="text-center">
					<h3 class="resaltado">Servicios Especializados en</h3>
					<h1 class="resaltado">Aplicaciones Web</h1>
				</div>
			</div>		
		</div>
	</div>
</div>

<div class="descripcion">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="text-justify">
					<p class="flow-text text-center">Cuando comenzé el proyecto de <a href="#/">Servicios Especializados</a> hace unos años, tenia en mente, ofrecer a nuestros clientes una gama completa de servicios modernos, y con el animo de darles y garantizarles las mas nuevas y mejores opciones de desarrollo que las tendencias de las grandes corporaciones y el mundo del GNU ofrecen.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="mision" class="misionVision">
	<partials-mision></partials-mision>
</div>

<div id="equipo" class="container">
	<partials-equipo></partials-equipo>
</div>
@stop
