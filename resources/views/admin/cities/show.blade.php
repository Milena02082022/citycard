@extends('templates.base')

@section('content')
<section class="section-1">
	<x-container>
		<button class="btn btn-light "><a href="{{route('cities.index')}}" class="nav-link">Назад</a></button>
		<h3 class="title">Детальніше про місто {{ $city->city_name }}</h3>
		<p class="item-title">Незабаром тут ви зможете переглянути інформацію про вартість проїзду у місті {{ $city->city_name }}! </p>
	</x-container>
</section>
@endsection