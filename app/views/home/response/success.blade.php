@if(Session::has('global'))
	{{ Session::get('global') }}
@endif