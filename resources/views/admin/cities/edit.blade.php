@extends('templates.base')

@section('content')
<section class="section-1">
	<x-container>
		<button class="btn btn-light "><a href="{{route('cities.index')}}" class="nav-link">Назад</a></button>
		<h3 class="title">Редагувати місто</h3>
		<form method="POST" action="{{ route('cities.update', $oldCity->city_id) }}">
			@csrf
			@method('PUT')
			<div class="form-group pb-2">
					<label for="name">Назва міста:</label>
					<input type="text" name="old_city_name" value="{{ $oldCity->city_name }}" class="form-control" readonly>
			</div>
			<div class="form-group pb-2">
				<label for="name">Назва зміненого міста:</label>
				<input type="text" name="new_city_name" value="{{ $newCityName }}" class="form-control">
		</div>
			<button type="submit" class="btn btn-primary">Оновити</button>
		</form>
	</x-container>
</section>
@endsection

