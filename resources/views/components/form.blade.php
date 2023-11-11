@props(['method'=> 'GET'])

@php ($method = strtoupper($method))
@php ($_method = in_array($method,['GET', 'POST']))

<form {{$attributes}} method="{{$_method ? $method: 'POST'}}">
	
	@if ($_method)
	@else
		<input type="hidden" name="_method" method="{{$method}}">
	@endif

	@csrf 
	{{$slot}}
</form>

