@extends('layout.main')

@section('content')

<div class="container">
	<div class="row">
		<div class="col s12">
			<h1 class="text-center title">Portafolios</h1>    
		</div>
	</div>
	<hr >
	<dic class="row">
		<div class="col s12">
				@foreach($portafolios as $portafolio)
					<div class="col s12 m4">
						<div class="card">
							<div class="card-image">
								<img src="{{$portafolio->image}}" alt="">
								<span class="card-title">
									{{$portafolio->name}}
								</span>
							</div>
							<div class="card-content blue-grey darken-1 white-text">
								<p>{{$portafolio->description}}</p>
							</div>
							<div class="card-action">
								<a href="{{$portafolio->url}}" target="_black">visitar</a>
							</div>
						</div>
					</div>
				@endforeach
		</div>
	</dic>
</div>
@stop